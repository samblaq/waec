<?php include("indexsession.php"); ?>
<?php include("databaseconnection.php"); ?>
<?php

	@session_start();
	if(session_destroy()) // Destroying All Sessions
    {
    	$_SESSION = [];
        header("Location: result.php"); // Redirecting To Home Page
    }else{
        header("Location: result.php");
        exit();
    }
?>