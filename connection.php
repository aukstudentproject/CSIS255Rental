<?php
ob_start();
$connection = mysqli_connect("localhost","root","","rental");
if(!$connection){
    echo "Connection Failed";
}

$user = 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=rental', $user, $pass);

?>
