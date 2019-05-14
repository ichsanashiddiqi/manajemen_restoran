<?php
include '../includes/connect.php';
$user_id = $_SESSION['user_id'];


$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$password =  htmlspecialchars($_POST['password']);
$phone = $_POST['phone'];
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
// 
$number = htmlspecialchars($_POST['number']);
$cvv = htmlspecialchars($_POST['cvv']);
$wallet = htmlspecialchars($_POST['balance']);
$sql = "UPDATE users SET name = '$name', username = '$username', password='$password', contact=$phone, email='$email', address='$address' WHERE id = $user_id;";
$sql = "UPDATE wallet_details SET number = '$number' , cvv ='$cvv', balance = '$wallet' where id = $user_id;";
if($con->query($sql)==true){
	$_SESSION['name'] = $name;
}
header("location: ../index.php");
?>