<?php include("session.php"); ?>
<?php include("databaseconnection.php"); ?>
<?php

	@session_start();
	if(session_destroy()) // Destroying All Sessions
    {
    		$action = 'User has Logged-out';
            //setting up the local timezone
            date_default_timezone_set('UTC');
            $date = date("Y-m-d H:i:s");
            $sql = "INSERT INTO log (Username,Action,Dates) values ('$FullName','$action','$date')";
            $conn->query($sql);


    	$_SESSION = [];
        header("Location: ../index.php"); // Redirecting To Home Page
    }else{
        header("Location: ../index.php");
        exit();
    }
?>