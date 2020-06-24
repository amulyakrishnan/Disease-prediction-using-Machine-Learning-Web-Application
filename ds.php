<?php

session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `doctors` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$code = $row['code'];
$doc_name = $row['doc_name'];
$spealization = $row['spealization'];
$hos_name = $row['hos_name'];
$address = $row['address'];
$phone_no = $row['phone_no'];
$map = $row['map'];
}
?>
<html>
<head>
<title>shopping </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<style>
.button3 {border-radius: 0.4rem;}
.button {
  background-color:#629632; 
  border: none;
  color: white;
  padding: 0.8rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 0.93rem;
  margin: 0.2rem 0.12rem;
  cursor: pointer;
}
.navbar {
  overflow: hidden;
  background-color: #629632	;
  position: sticky;
  color: white;
  position: -webkit-sticky;
  top: 0;
  padding: 1.2rem 0.625rem;
}
.button1 {
  background-color:#000; 
  border: none;
  color: white;
  padding: 1.25rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 0.93rem;
  margin: 0.25rem 0.125rem;
  cursor: pointer;
}

.column {
  float: left;
  width: 33.33%;
  padding: 1.0rem;
}

.column1 {
  float: left;
  width: 33.33%;
  padding: 1.0rem;
  margin-left:15rem;
  margin-top:15rem;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.header {
  padding: 0.31rem;
  background: #629632;
  color: white;
  font-size: 0.95rem;
}
.product_wrapper a{
text-decoration:none;
}

.column img{
  width:80%;
  height:50%;
}

  .btn1 {
          background: #00b894;
        color: white;
        text-align: center;
        vertical-align: middle;
     
        

    }

    /* .btn1:hover {
        background: #00b894;
        color: white;
    } */

    .btn2 {
        background: #00b894;
        color: white;
        text-align: center;
        vertical-align:center;
        
      

    }
/* 
    .btn2:hover {
        background: white;
        color: black;

    } */

  a {
        padding: 12px 30px;
        border-radius: 4px;
        outline: none;
        text-transform: uppercase;
        font-size: 13px;
        font-weight: 500;
        margin-right:5px;
        text-decoration:none;
        margin-top:10px;
        letter-spacing: 1px;
        transition: all .5s ease;
        align-items: center;
        
    }
.a1{
  border: 1px solid grey;
  
  padding:0.2rem;
  font-size:0.8rem;

}   
.btn a{
        background: white;
        color: #000;
        text-align: center;
        vertical-align: middle;
       
    }
@media (max-width:960px){
  .column {
  float: left;
  width: 100%;
  padding: 1.0rem;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.header {
  padding: 0.31rem;
  background: #629632;
  color: white;
  font-size: 0.95rem;
}
.product_wrapper a{
text-decoration:none;
}

.column img{
  width:100%;
  height:40%;
  margin-top:0.5rem;

}
.a1{
  padding:0.2rem;
  font-size:1rem;
}
.column p{
  font-size:1.2rem;
margin-top:-0.5rem;
}

a {
        padding: 10px 7px;
        border-radius: 4px;
        outline: none;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 500;
        margin:0 auto;
        text-decoration:none;
        margin-top:5px;
        letter-spacing: 0.5px;
        transition: all .5s ease;
        align-items: center;
        
    }
}
</style>

<?php

  

$result = mysqli_query($con,"SELECT * FROM `doctors` where doc_type='s'");
while($row = mysqli_fetch_assoc($result)){
		echo  "<div class='row' >
        <div class='column'  style='text-align:left;margin-top:1.8rem;'>
        <p>".$row['doc_name'],"</p>
        <p>".$row['spealization'],"</p>
        <p>".$row['hos_name'],"</p>
       <p> ".$row['address'],"</p>
      <a href= '".$row['map']."'>Map Link</a>
      <br>
<label style='font-weight:650;font-size:1.2rem;'>Code:</label>
      <input style='font-weight:650;border-width:0px;width:5rem;
      border:none;font-size:1.2rem;' type='text' value=".$row['code']." id='myinput'>
      <a class='a1' onclick='myFunction()'>Copy Code</a>
    <p></p>

      <p style='padding-top:0.5rem;'><b>Specialzation:</b></p>
      <p style='text-align:left; margin-right:0.31rem;'>".$row['spealization'].".  <a href='gallery.php?code=" . $row['code'] . "' style='text-align: center;margin-top:10rem;'><u>Gallery</u></a></p>
     
    </div>
        <div class='column1' >
        <br> 

        <a href='book_appointment.php' class='btn2' style='text-align: center;padding-left:20px;'>book now</a></p>
        </div>
   
        </div><hr style='border-top: 0.06rem solid #a9a9a9;'>";
        }
mysqli_close($con);

?>
<script>
function myFunction() {
  var copyText = document.getElementById("myinput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
</body>
</html>