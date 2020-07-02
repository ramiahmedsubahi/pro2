<?php
$servernam='localhost';
$username='root';
$password='';
$dbname='pro2';
$conn=new mysqli($servernam,$username,$password,$dbname);
$conn->set_charset('utf8');
 if($conn->connect_error){
 	die("خطاء");
 }
echo"تم الاتصال ";
?>