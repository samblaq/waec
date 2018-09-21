<?php
    $Id = '';
	if (!empty($_POST)) {
		$Id = $_POST['Id'];
	} else {

	}
	getinfo($Id);

	function getinfo($Id) {
	include("databaseconnection.php");
		$sql_program = "SELECT * from schoolselection_option4 WHERE ID = $Id";
			$result2 = $conn->query($sql_program);
			while ($data1 = $result2->fetch_assoc()) {
				$dataArr = [];
				//$dataArr['id'] = $data1['ID'];
				$dataArr['601'] = $data1['Course_601'];
				$dataArr['602'] = $data1['Course_602'];
				$dataArr['603'] = $data1['Course_603'];
				$dataArr['604'] = $data1['Course_604'];
				$dataArr['605'] = $data1['Course_605'];
				$dataArr['606'] = $data1['Course_606'];
                $dataArr['607'] = $data1['Course_607'];
                $dataArr['608'] = $data1['Course_608'];
				$dataArr['609'] = $data1['Course_609'];
				$dataArr['610'] = $data1['Course_610'];
				$dataArr['611'] = $data1['Course_611'];
				$dataArr['612'] = $data1['Course_612'];
				$dataArr['613'] = $data1['Course_613'];
                $dataArr['614'] = $data1['Course_614'];
                $dataArr['701'] = $data1['Course_701'];
				$dataArr['702'] = $data1['Course_702'];
				$dataArr['703'] = $data1['Course_703'];
				$dataArr['704'] = $data1['Course_704'];
				$dataArr['705'] = $data1['Course_705'];
				$dataArr['706'] = $data1['Course_706'];
                $dataArr['707'] = $data1['Course_707'];
                $dataArr['801'] = $data1['Course_801'];
				$dataArr['802'] = $data1['Course_802'];
				$dataArr['803'] = $data1['Course_803'];
				$dataArr['804'] = $data1['Course_804'];
				$dataArr['805'] = $data1['Course_805'];
				$dataArr['901'] = $data1['Course_901'];
                $dataArr['902'] = $data1['Course_902'];
                $dataArr['903'] = $data1['Course_903'];
				$dataArr['904'] = $data1['Course_904'];

				// echo json_encode($dataArr);
				$response['courses'] = $dataArr;
		}

	$sql_accomodation = "SELECT * from schoolselection_option4 where ID = $Id";
		$result1 = $conn->query($sql_accomodation);
		while($accomodation = $result1->fetch_assoc()){
			$accomoArray = [];
			$accomoArray['day'] = $accomodation['Status_Day'];
			$accomoArray['boarding'] = $accomodation['Status_Boarding'];
			$accomoArray['hostel'] = $accomodation['Status_Hostel'];
			// echo json_encode($accomoArray);
				$response['accommodation'] = $accomoArray;
		}  

		$sql_region = "SELECT * from schoolselection_option4 where ID = $Id";
		$result2 = $conn->query($sql_region);
		while($region = $result2->fetch_assoc()){
			$regionArray = [];
			$regionArray['R'] = $region['Region'];
			// echo json_encode($regionArray);
				$response['region'] = $regionArray;
		}

		$sql_schoolCode = "SELECT * from schoolselection_option4 where ID = $Id";
		$result3 = $conn->query($sql_schoolCode);
		while($schoolCode = $result3->fetch_assoc()){
			$schoolCodeArray = [];
			$schoolCodeArray['C'] = $schoolCode['Institute_Code'];
			// echo json_encode($schoolCodeArray);
				$response['schoolCode'] = $schoolCodeArray;
		}

		echo json_encode($response);
	}
?>