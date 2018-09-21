<?php
    @session_start();
    if (isset($_SESSION['indexNumber'])) {
    	$index = $_SESSION['indexNumber'];
        // $sch_code = $_SESSION['School_Code'];
        // $sch_name    = $_SESSION['School_Name'];
        // $School_Circuit = $_SESSION['School_Circuit'];
        // $Fname = $_SESSION['Waec_Fname'];
    }else{
        @session_destroy();
    }
?>
