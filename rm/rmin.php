<?php
include ('connect.php');
$R=$GET['R']
$spl="SELECT * FROM rimot WHERE rightw='$R";
$sresult = $conn->query($spl);
$count = $result-> num_rows;
echo $count;
?>