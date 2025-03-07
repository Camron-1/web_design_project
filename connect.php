<?php
$servername='localhost';
$user='root';
$password='';
$dbname='animals275';
$conn=mysqli_connect($servername, $user, $password,$dbname);
if ($conn-> connect_error){
die ("connection failed:". mysqli_connect_error());}





?>
