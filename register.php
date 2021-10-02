<?php

  session_start();
  header('location:login.html');
  //header('location:register.html');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email_id = $_POST['email_id'];
  $addres = $_POST['addres'];
  $number = $_POST['number'];

if(empty($username) || empty($password) || empty($email_id) || empty($addres)|| empty($number)){
	echo "all fields are required !!";
	die();
}
else{

	$conn =  mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conn, 'test1');

	$checkForUnique = "select * from register where username = '$username'";

	$result = mysqli_query($conn, $checkForUnique);
	$noOfRows = mysqli_num_rows($result);

	if($noOfRows == 1){
		echo "Username Already Taken";
	}
	else{
		$ins = "insert into register(username,password,addres,number) values('$username', '$password','$email_id','$number') ";
		mysqli_query($conn, $ins);
		echo "Info Added Successfully";
	}
}
?>