<?php
include('connect.php');
$rightw=$_GET['rightw'];
$forwards=$_GET['forwards'];
$leftw=$_GET['leftw'];
$backwards=$_GET['backwards'];
$stop=$_GET['stop'];
$sql="INSERT INTO rimot (rightw , forwards , leftw , backwards , stop )VALUES('$rightw',$forwards,$leftw,$backwards,$stop)";
$result = $conn->query($sql);

?>