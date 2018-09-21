<?php

	$schoolId = '';
	if (!empty($_POST)) {
		$schoolId = $_POST['schoolId'];
	} else {

	}
	getData($schoolId);
	
	function getData($schoolId) {
    include("databaseconnection.php");
    
		$sql_accomodation = "SELECT * from schoolselection_option1 where ID = $schoolId";
		$result1 = $conn->query($sql_accomodation);
		while($row = $result1->fetch_assoc()){
			$accomoArray = [];
			$accomoArray['day'] = $row['Status_Day'];
			$accomoArray['boarding'] = $row['Status_Boarding'];
			$accomoArray['hostel'] = $row['Status_Hostel'];
            
            echo json_encode($accomoArray);
		}
	}
?>
