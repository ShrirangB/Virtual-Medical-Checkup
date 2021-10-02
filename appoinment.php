<?php

  session_start();
  header('location:appoinment.html');
  //header('location:register.html');

  $First_Name = $_POST['First Name'];
  $Last_Name= $_POST['Last Name'];
  $email_id = $_POST['email_id'];
 
  $phone_number = $_POST['phone number'];

if(empty($First_Name ) || empty($Last_Name) || empty($email_id) || empty($phone_number)){
	echo "all fields are required !!";
	die();
}
else{

	$conn =  mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conn, 'test1');




		$ins = "insert into appoinment(First_Name,Last_Name,email_id,phone_number) values('$First_Name', '$Last_Name','$email_id','$phone_number') ";
		mysqli_query($conn, $ins);
		echo "Info Added Successfully";
	
}
?>