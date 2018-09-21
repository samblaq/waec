<?php
    include("databaseconnection.php");
    include('Homepage/indexsession.php');
    //include("uploadImage.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Waec - Ghana</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo.png">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="../plugins/jquery.steps/css/jquery.steps.css" />

        <!-- App css -->

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <!--new plugins for the validation -->
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/formValidation.css"/>

        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/formValidation.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <!--ends here-->

        <script src="assets/js/modernizr.min.js"></script>
        <!--webcam script-->
        <script type="text/javascript" src="DCSResources/dynamsoft.camera.config.js"> </script>
        <script type="text/javascript" src="DCSResources/dynamsoft.camera.initiate.js"> </script>

        <!-- jQuery  -->
        
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>


    </head>


    <body>
        <!-- Begin page -->
            <div id="wrapper">
             <?php
                $idnum = $_SESSION['indexNumber'];
                $sql = "SELECT * from student where index_num = '$idnum'";
                $result  = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $image = $row['image'];
                    $index = $row['index_num'];
                    $name = $row['surname'] .' '. $row['othername'];
                    $gender = $row['gender'];
                    $date = $row['DOB'];
                    $guardian = $row['surname1'] .' '. $row['other'];
                    $relation = $row['relation'];
                    $occupation = $row['occupation'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    $first = $row['first'];
                    $Region = $row['region'];
                    $code = $row['code'];
                    $Programme = $row['programme'];
                    $Accomodation = $row['accomodation'];
                    $second = $row['second'];
                    $region2 = $row['region_2'];
                    $code2 = $row['code_2'];
                    $programme2 = $row['programme_2'];
                    $accomodation2 = $row['accomodation_2'];
                    $third = $row['third'];
                    $region3 = $row['region_3'];
                    $code3 = $row['code_3'];
                    $programme3 = $row['programme_3'];
                    $accomodation3 = $row['accomodation_3'];
                    $Fourth = $row['fourth'];
                    $region4 = $row['region_4'];
                    $code4 = $row['code_4'];
                    $programme4 = $row['programme_4'];
                    $accomodation4 = $row['accomodation_4'];
                }
            ?>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="assets/images/waec_logo.png" />
                            </span>
                            
                        </a>
                    </div>
                
                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src=<?php echo $image; ?> alt="user-img" title="Mat Helme" class="rounded-square img-fluid">
                        </div>
                        <h5><a href="#"></a> </h5>
                        <p class="text-muted"><?php echo $index; ?></p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                       <?php include("Homepage/hide.php") ?>
                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            
           

            <div class="content-page">
                
                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        <center><strong><h3>Summary Information of Candidate</h3></strong></center>
                        <br></br>
                        <div>
                            <table class="table table-bordered" width:"200px">
                                
                               <tr>
                                    <th colspan="2" style="text-align:center">Personal Information</th>
                                </tr>
                                <tr>
                                    <td colspan="2" style="padding-left:800px"><img src=<?php echo $image; ?> width ="250px" height="200px"></td>
                                </tr>
                                <tr>
                                    <th>Index Number</th>
                                    <td colspan="1"><?php echo $index; ?></td>
                                </tr>
                                <tr>
                                    <th>Candidate Name</th>
                                    <td colspan="1"><?php echo $name; ?></td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td colspan="1"><?php echo $gender; ?></td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td colspan="1"><?php echo $date; ?></td>
                                </tr>
                                <!-- <tr>
                                    <th>Junior High Attended</th>
                                    <td colspan="1">".."</td>
                                </tr> -->
                                <tr>
                                    <th>Type of Examination</th>
                                    <td colspan="1">2018 BECE, EXAMINATION</td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align:center">Guardian Information</th>
                                </tr>
                                <tr>
                                    <th>Guardian Name</th>
                                    <td colspan="1"><?php echo $guardian; ?></td>
                                </tr>
                                <tr>
                                    <th>Relation To Applicant</th>
                                    <td colspan="1"><?php echo $relation; ?></td>
                                </tr>
                                <tr>
                                    <th>Occupation</th>
                                    <td colspan="1"><?php echo $occupation; ?></td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td colspan="1"><?php echo $phone; ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td colspan="1"><?php echo $email; ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align:center">School Selection</th>
                                </tr>
                                <tr>
                                    <th colspan="2">First Choice</th>
                                </tr>
                                <tr>
                                    <th>School Name</th>
                                    <td colspan="1"><?php echo $first; ?></td>
                                </tr>
                                <tr>
                                    <th>Region </th>
                                    <td colspan="1"><?php echo $Region; ?></td>
                                </tr>
                                <tr>
                                    <th>School Code</th>
                                    <td colspan="1"><?php echo $code; ?></td>
                                </tr>
                                <tr>
                                    <th>Programme</th>
                                    <td colspan="1"><?php echo $Programme; ?></td>
                                </tr>
                                <tr>
                                    <th>Accomodation</th>
                                    <td colspan="1"><?php echo $Accomodation; ?></td>
                                </tr>

                                <tr>
                                    <th colspan="2" style="text-align:center">School Selection</th>
                                </tr>
                                <tr>
                                    <th colspan="2">Second Choice</th>
                                </tr>
                                <tr>
                                    <th>School Name</th>
                                    <td colspan="1"><?php echo $second; ?></td>
                                </tr>
                                <tr>
                                    <th>Region </th>
                                    <td colspan="1"><?php echo $region2; ?></td>
                                </tr>
                                <tr>
                                    <th>School Code</th>
                                    <td colspan="1"><?php echo $code2; ?></td>
                                </tr>
                                <tr>
                                    <th>Programme</th>
                                    <td colspan="1"><?php echo $programme2; ?></td>
                                </tr>
                                <tr>
                                    <th>Accomodation</th>
                                    <td colspan="1"><?php echo $accomodation2; ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align:center">School Selection</th>
                                </tr>
                                <tr>
                                    <th colspan="2">Third Choice</th>
                                </tr>
                                <tr>
                                    <th>School Name</th>
                                    <td colspan="1"><?php echo $third; ?></td>
                                </tr>
                                <tr>
                                    <th>Region </th>
                                    <td colspan="1"><?php echo $region3; ?></td>
                                </tr>
                                <tr>
                                    <th>School Code</th>
                                    <td colspan="1"><?php echo $code3; ?></td>
                                </tr>
                                <tr>
                                    <th>Programme</th>
                                    <td colspan="1"><?php echo $programme3; ?></td>
                                </tr>
                                <tr>
                                    <th>Accomodation</th>
                                    <td colspan="1"><?php echo $accomodation3; ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" style="text-align:center">School Selection</th>
                                </tr>
                                <tr>
                                    <th colspan="2">Fourth Choice</th>
                                </tr>
                                <tr>
                                    <th>School Name</th>
                                    <td colspan="1"><?php echo $Fourth; ?></td>
                                </tr>
                                <tr>
                                    <th>Region </th>
                                    <td colspan="1"><?php echo $region4; ?></td>
                                </tr>
                                <tr>
                                    <th>School Code</th>
                                    <td colspan="1"><?php echo $code4; ?></td>
                                </tr>
                                <tr>
                                    <th>Programme</th>
                                    <td colspan="1"><?php echo $programme4; ?></td>
                                </tr>
                                <tr>
                                    <th>Accomodation</th>
                                    <td colspan="1"><?php echo $accomodation4; ?></td>
                                </tr>
                            </table>
                        </div>
                    
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Waec Ghana
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <!--<script src="assets/js/jquery.min.js"></script>-->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
    </body>
</html>