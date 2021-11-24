<?php 

session_start();

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {
		
//function that will be used to validate the information in the database 
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
	$user_data = 'uname='. $uname. '&name='. $name;


	if(empty($uname)){

		header("Location: signup.php?error=User Name is required&$user_data");
		exit();


	}

	elseif (empty($pass)){

		header("Location: signup.php?error=Password is required&$user_data");
		exit();

	}

	elseif (empty($re_pass)){

		header("Location: signup.php?error=Re Password is required&$user_data");
		exit();

	}

	elseif (empty($name)){

		header("Location: signup.php?error=Name is required&$user_data");
		exit();

	}

	elseif ($pass !== $re_pass){

		header("Location: signup.php?error=Passwords do not match&$user_data");
		exit();

	}

	else{

	
		$sql = "SELECT * FROM game_info WHERE user_name = '$uname' ";
		$result = mysqli_query($connection, $sql);
         

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO game_info(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($connection, $sql2);
           if ($result2) {
           	 header("Location: login.php");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}