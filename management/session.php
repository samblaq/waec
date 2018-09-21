<?php
    @session_start();
    if (isset($_SESSION['Waec_ID'])) {
        $ID = $_SESSION['Waec_ID'];
        $UserName    = $_SESSION['Waec_Username'];
        $FullName = $_SESSION['Waec_FullName'];
        $Fname = $_SESSION['Waec_Fname'];
    }else{
        @session_destroy();
    }
?>