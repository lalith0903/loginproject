<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

//connect sever

$conn = mysqli_connect('localhost', 'root', '', 'demo');
if ($conn -> connect_error) {
	echo "Registeration Not Successfully ....";
	//die('Connection Failed : ' $conn->connect_error);
}else {
	$stmt = "insert into login (firstname, lastname, email, password)values('$firstname','$lastname','$email','$password')";
	$execute=mysqli_query($conn,$stmt);
	echo "Registeration Successfully ....";
	//$stmt->close();
	//$conn->close();
}


?>