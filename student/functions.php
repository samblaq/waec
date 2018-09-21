<?php
	$schoolId = '';
	if (!empty($_POST)) {
		$schoolId = $_POST['schoolId'];
	} else {

	}
	getData($schoolId);
	$response = [];
	
	function getData($schoolId) {
	include("databaseconnection.php");
		$sql_programme = "SELECT * from schoolselection_option1 WHERE ID = $schoolId";
			$result = $conn->query($sql_programme);
			while ($programme = $result->fetch_assoc()) {
				$dataArray = [];
				
				$dataArray['101'] = $programme['Course_101'];
				$dataArray['201'] = $programme['Course_201'];
				$dataArray['301'] = $programme['Course_301'];
				$dataArray['401'] = $programme['Course_401'];
				$dataArray['402'] = $programme['Course_402'];
				$dataArray['501'] = $programme['Course_501'];
				$dataArray['502'] = $programme['Course_502'];

				// echo json_encode($dataArray);
				$response['courses'] = $dataArray;
		}
		
		$sql_accomodation = "SELECT * from schoolselection_option1 where ID = $schoolId";
		$result1 = $conn->query($sql_accomodation);
		while($accomodation = $result1->fetch_assoc()){
			$accomoArray = [];
			$accomoArray['day'] = $accomodation['Status_Day'];
			$accomoArray['boarding'] = $accomodation['Status_Boarding'];
			$accomoArray['hostel'] = $accomodation['Status_Hostel'];
			// echo json_encode($accomoArray);
				$response['accommodation'] = $accomoArray;
		}

		$sql_region = "SELECT * from schoolselection_option1 where ID = $schoolId";
		$result2 = $conn->query($sql_region);
		while($region = $result2->fetch_assoc()){
			$regionArray = [];
			$regionArray['R'] = $region['Region'];
			// echo json_encode($regionArray);
				$response['region'] = $regionArray;
		}

		$sql_schoolCode = "SELECT * from schoolselection_option1 where ID = $schoolId";
		$result3 = $conn->query($sql_schoolCode);
		while($schoolCode = $result3->fetch_assoc()){
			$schoolCodeArray = [];
			$schoolCodeArray['C'] = $schoolCode['School_Code'];
			// echo json_encode($schoolCodeArray);
				$response['schoolCode'] = $schoolCodeArray;
		}

		echo json_encode($response);
	}
?>



