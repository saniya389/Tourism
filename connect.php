<?php

	$name = $_POST['name'];
	$email =  $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$country = $_POST['country'];

	//Database Connection

	$conn = new mysqli('localhost','root','12344321','tourism');
	if ($conn->connect_error) {
		die('Connection Failed :' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(name,email,mobile,password,country) values(?,?,?,?,?)");
		$stmt->bind_param("ssiss",$name,$email,$mobile,$password,$country);
		$stmt->execute();
		echo "Registration Sucessful...";
		$stmt->close();
		$conn->close();
	}


?>