<?php 

session_start();

include "db_conn.php"; 
include "functions.php";

if (isset($_POST['uname']) && isset($_POST['password']))
{
    //function that will be used to validate the information in the database 
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$user_data = 'uname='. $uname. '&password='. $pass;


	if(empty($uname)){

		header("Location: login.php?error=User Name is required&$user_data");
		exit();


	}

	elseif (empty($pass)){

		header("Location: login.php?error=Password is required&$user_data");
		exit();

	}


	

	
	else{


        $sql = "SELECT * FROM game_info WHERE user_name = '$uname' AND password= '$pass'";


        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);

            if($row['user_name']===$uname && $row['password'] === $pass ){

                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];

                header("Location: Intropg.html");
                exit();

            }else{
                header("Location: login.php?error=Incorrect User name or password");
                exit();
            }

        }else{
            header("Location: login.php?error=Incorrect User name or password");
            exit();
        }
    }


}
else{
    header("Location: login.php");
    exit();
}
			
