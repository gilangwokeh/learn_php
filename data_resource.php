<?php
//data resource 
$servername = "127.0.0.1";
$username = "gilang1";
$password = "gilang12345";

//create connection mysql
$conn = new mysqli($servername,$username,$password);

//check connection
if($conn->connect_error){
  die("Connection failed:".$conn->connect_error);
}
echo "connection successfully";
?>