<?php



require_once "db.php";

$error = array();

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $r_password = $_POST['r_password'];
    if($password === $r_password) {
        $hash = password_hash($password,PASSWORD_DEFAULT);

        $select = "SELECT * FROM users WHERE email=?";
        $stmt = $con->prepare($select);
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $stmt->store_result();
        if($stmt->num_rows > 0) {
            $error['email']= "Email already exists";
        } else {



            $query = "INSERT INTO users(name , email , password) VALUES (? , ? , ?)";
            $stmt = $con->prepare($query);
            $stmt->bind_param('sss', $name, $email, $hash );
           if( $stmt->execute() === false) {
               echo $con->error;
           }
        }
    }
   
    else {
        $error['password']= "password doesnt match";
    }
    

    
}