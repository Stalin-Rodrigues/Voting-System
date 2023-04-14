<?php
session_start();
$con = mysqli_connect("localhost","root","","vote");

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$candidate = $_POST['candidate'];
	
	$query = "INSERT INTO users (email,password,gender,candidate) VALUES('$email','$password','$gender','$candidate')";
	$query_run = mysqli_query($con,$query);
	
	if($query_run){
		$_SESSION['status'] = "Inserted Successfully";
		header("Location: index.php");
	}
	else{
		$_SESSION['status'] = "Not Inserted";
		header("Location: index.php");
	}
}	
?>