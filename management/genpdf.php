<?php
    require('fpdf.php');
    $todaysdate = date('Y-m-d');
    class PDF extends FPDF
    {
        // Page header
        function Header()
        {
            // Logo
            $this->Image('PikmelogoBlack.png', 5, 7.5, 30);
            $this->Image('solutekblackandblue.png', 37, 8, 30);
            // Arial bold 15
            $this->SetFont('Arial', 'B', 15);
            // Move to the right
            $this->Cell(160);
            // Title
            $this->Cell(30, 10, "Summary Statement", 0, 0, 'R');
            // Line break
            $this->Ln(20);
        }
        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);
            // Page number
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }
    $date = new DateTime($todaysdate);
    $date->modify('-1 day');
    $yesterdaysdate = $date->format('Y-m-d');
    // $servername     = "localhost";
    // $username       = "michaelselbygh";
    // $password       = "livinggooD1$";
    // $dbname         = "pikmeknust";
    $AmountDueTotal = 0;
    // Create connection
    // $conn           = new mysqli($servername, $username, $password, $dbname);
    include('databaseconnection.php');
    // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // $sql    = "SELECT FName, drivers.Driver_ID, LName, ONames, Vehicle_No, Vehicle_ID from drivers, d_bus where d_bus.Driver_ID=drivers.Driver_ID";
    // $result = $conn->query($sql);
    // $i      = 0;
    // while ($row = $result->fetch_assoc()) {
    //     $DName[$i]       = $row['FName'] . " " . $row['LName'] . " " . $row["ONames"];
    //     $DVehicle_No[$i] = $row['Vehicle_No'];
    //     $DVehicle_ID[$i] = $row['Vehicle_ID'];
    //     $D_ID[$i] = $row['Driver_ID'];
    //     $i               = $i + 1;
    // }
    // sizeof($DName);
    // for ($i = 0; $i < sizeof($DName); $i++) {
    //     //selecting number of trips and total amount generated
    //     $sql    = "SELECT count(*) as count FROM trips WHERE Vehicle_ID='$DVehicle_ID[$i]' and VA_Time like '%$yesterdaysdate%'";
    //     $result = $conn->query($sql);
    //     while ($row2 = $result->fetch_assoc()) {
    //         $DNoTrips[$i] = $row2['count'];
    //     }
    // }
    // for ($i = 0; $i < sizeof($DName); $i++) {
    //     //total money gen for prev day 
    //     $DMoney[$i] = 0;
    //     $sql        = "SELECT Cost, HeadCount FROM trips WHERE Vehicle_ID='$DVehicle_ID[$i]' and VA_Time like '%$yesterdaysdate%'";
    //     $result     = $conn->query($sql);
    //     while ($row3 = $result->fetch_assoc()) {
    //         $AmountDueTotal = $AmountDueTotal + ($row3['Cost'] * $row3['HeadCount']);
    //         $DMoney[$i]     = $DMoney[$i] + ($row3['Cost'] * $row3['HeadCount']);
    //     }
    // }
    // for ($i = 0; $i < sizeof($DName); $i++) {
    //     //at this stage we have totals and trips for Scheduled trips
    //     //we will now add reservations.
    //      $sql        = "SELECT sum(Cost) as SumCost, count(Res_ID) as TripCount FROM reservations WHERE Driver_ID='$D_ID[$i]' and Time like '%$yesterdaysdate%' and Status='CONFIRMED'";
    //     $result     = $conn->query($sql);
    //     while ($row3 = $result->fetch_assoc()) {
    //         $AmountDueTotal = round($AmountDueTotal + $row3['SumCost'], 1, PHP_ROUND_HALF_DOWN);
    //         $DMoney[$i]     = round($DMoney[$i] + $row3['SumCost'], 1, PHP_ROUND_HALF_DOWN);
    //         $DNoTrips[$i] = $DNoTrips[$i] + $row3['TripCount'];

    //     }
    // }
    // for ($i = 0; $i < sizeof($DName); $i++) {
    //     //at this stage we have totals and trips for Scheduled trips and reservations
    //     //we will now add OTG trips.
    //       $sql        = "SELECT sum(Cost) as SumCost, count(OTGOffers.TripID) as TripCount FROM OTGTrips, OTGOffers WHERE OTGTrips.Offer_ID=OTGOffers.Offer_ID and Driver_ID='$D_ID[$i]' and Date like '%$yesterdaysdate%' and (Status='COMPLETED' OR Status='INITIALIZED') ";
    //     $result     = $conn->query($sql);
    //     while ($row3 = $result->fetch_assoc()) {
    //         $AmountDueTotal = round($AmountDueTotal + $row3['SumCost'], 1, PHP_ROUND_HALF_DOWN);
    //         $DMoney[$i]     = round($DMoney[$i] + $row3['SumCost'], 1, PHP_ROUND_HALF_DOWN);
    //         $DNoTrips[$i] = $DNoTrips[$i] + $row3['TripCount'];

    //     }
    // }

    // //calculating 5 % of everything out of final fee
    // $AmountDueTotal = 0.95*$AmountDueTotal;
    // for ($i = 0; $i < sizeof($DName); $i++) {
    //     $DMoney[$i] = 0.95*$DMoney[$i];
    // }



    // $todaysdatewords = date('l jS \of F Y');
    // Instanciation of inherited class
    $pdf             = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 15);
    $pdf->setX(87);
    $pdf->Cell(30, 10, "$todaysdatewords", 0, 0, 'C');
    $pdf->Ln();
    $pdf->setX(87);
    $pdf->Cell(30, 10, "Total Amount Due : $AmountDueTotal", 0, 0, 'C');
    $pdf->Ln();
    $pdf->SetFont('Times', 'B', 12);
    $pdf->Cell(0, 10, "Driver Name", 0, 0);
    $pdf->setX(60);
    $pdf->Cell(0, 10, "Vehicle Number", 0, 0);
    $pdf->setX(110);
    $pdf->Cell(0, 10, "No of Trips", 0, 0);
    $pdf->setX(160);
    $pdf->Cell(0, 10, "Amount Due", 0, 0);
    $pdf->Ln();
    $pdf->SetFont('Times', '', 12);
    for ($i = 0; $i < sizeof($DName); $i++) {
        $pdf->Cell(0, 10, ($i + 1) . ". " . $DName[$i], 0, 0);
        $pdf->setX(70);
        $pdf->Cell(0, 10, $DVehicle_No[$i], 0, 0);
        $pdf->setX(120);
        $pdf->Cell(0, 10, $DNoTrips[$i], 0, 0);
        $pdf->setX(170);
        $pdf->Cell(0, 10, $DMoney[$i], 0, 1);
    }
    //$pdf->Output("F", "Summaries/Summary$todaysdate.pdf");
    //echo "Code ran, no errors";
    $pdf->Output();
?>