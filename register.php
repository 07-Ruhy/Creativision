<?php

$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$conn=mysqli_connect("localhost","root","","online");

if($conn)
{
	$sql="INSERT into users(username,password,email,phone)values('$username','$password','$email','$phone')";
	if(mysqli_query($conn,$sql))
	{
		echo "the details inserted successfuly";
		header("location:login1.html");
	}
	else
	{
		echo "registration failed";
		header("location:registration.html");
	}


}

?>