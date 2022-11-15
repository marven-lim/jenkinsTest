<?php 
session_start();

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
            if ("araradacius" === $uname && "letmein" === $pass) {
            	$_SESSION['user_name'] = $uname;
            	$_SESSION['name'] = $pass;
            	$_SESSION['id'] = "1";
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}
	}
	
else{
	header("Location: index.php");
	exit();
}