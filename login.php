<?php

  session_start();
  
  //header('location:register.html');

  
  



    $conn =  mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, 'test1');
    if($conn){
        echo"connectio succeful";
    }else{
        echo"no connection";
    }


    
    $username = $_POST['username'];
    $password = $_POST['password'];

	$checkForUnique = "select * from register where username = '$username' && password = '$password'";

	$result = mysqli_query($conn, $checkForUnique);
	$noOfRows = mysqli_num_rows($result);

	if($noOfRows == 1){
        $_SESSION['username'] = $username;
        header('location:home.php');
		
	}
	else{
     
        header('location:login.html');
        
	}

?>