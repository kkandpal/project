<?php
require_once 'connect.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];
$query="INSERT INTO user VALUES('$firstname','$lastname','$email','$number', $password)";
$result=$connect->query($query);
if(!$result)
{
 die("could not enter data into database".$connect->error);
}
?>
