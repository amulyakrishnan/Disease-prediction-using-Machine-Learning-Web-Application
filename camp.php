<?php

session_start();
include('db.php');
$status="";
$result = mysqli_query($con,"SELECT * FROM `camp` ");
$row = mysqli_fetch_assoc($result);
$camp_name = $row['camp_name'];
$org = $row['org'];
$address = $row['address'];
$description = $row['description'];

?>
<html>
<head>
<title>shopping </title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <nav>
<h1  style="text-align:center;font-family: 'Rubik';padding-top:30px;">Medical Camps</h1> 
</nav>
<style>
  nav {
        width: 100%;
        height: 15vh;
        background-color: #2874A6;
        color: white;
        justify-content: space-between;
        text-transform: uppercase;
    }
    
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

  

$result = mysqli_query($con,"SELECT * FROM `camp` ");
while($row = mysqli_fetch_assoc($result)){
    echo  "  
    <div class='row' >
      
        
        <div class='column'  style='text-align:left;margin-top:1.8rem;'>
        <p style='font-size:35px;'><strong>".$row['camp_name'],"</strong></p>
        <p style='font-size:20px;'>".$row['address'],"</p>
        <p style='font-size:20px;'>".$row['org'],"</p>
       <p style='font-size:20px;'> ".$row['description'],"</p>
    </div>
    </div>";
        }
mysqli_close($con);

?>
    </body>
    </html>