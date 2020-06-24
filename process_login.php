<?php
require_once 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query="SELECT * FROM users WHERE email=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){

            $result = $result->fetch_assoc();
            $user_id = $result['user_id'];
            $db_password = $result['password'];

            if(password_verify($password,$db_password)){
                    $_SESSION['logged_in']=true;
                    $_SESSION['user'] = $user_id;

                    header('Location: protected.php');
                    exit();
            }else{
                $error['password'] = 'incorrect password';
            }
    }
    else {
        $error['email']="email doesnt exists";
    }
}

