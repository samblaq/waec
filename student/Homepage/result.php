<?php
    include('databaseconnection.php');
    include('indexsession.php');

    if (isset($_POST['submit'])) {
        function sanitize($data){
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
        }

        if (empty($_POST['indexnum'])) {
            $errorlogin = "Invalid School Code or Index Number";
        }else{
            $index = sanitize($_POST['indexnum']);

           $sql = "SELECT * FROM student where index_num = '$index'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($index == $row['index_num']) {
                        //Initializing session variables.
                        @session_start();
                        $_SESSION['indexNumber'] = $row['index_num'];
                        // $_SESSION['School_Code'] = $row['sch_code'];
                        // $_SESSION['School_Circuit'] = $row['circuit'];

                        // Redirecting To Other Page
                            header("location: ../checker.php"); 
                            exit();
                    } else {
                        $errorlogin = "Invalid Index Number";
                    }
                    
                }
                exit();
            }else{
                 $errorlogin = "Invalid Index Number";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Waec | Ghana</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/logo1.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/checker.png');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.html" class="text-success">
                                    <span><img src="assets/images/waec_logo.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <?php
                                if (isset($errorlogin)) {
                                     echo
                                        "<div class=\"alert alert-danger alert-dismissable\">
                                            <i class=\"fa fa-ban\"></i>
                                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                                            $errorlogin
                                        </div>";
                                }
                            ?>
                            <form class="form-horizontal" action="result.php" method="post">

                                <!-- <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="username">School Code</label>
                                        <input class="form-control" name= "code" required="">
                                    </div>
                                </div>
 -->
                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Index Number</label>
                                        <input class="form-control" type="text" required="" name="indexnum" >
                                    </div>
                                </div>


                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" name ="submit" type="submit">Submit</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Registrar?  <a href="index.php" class="text-dark m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Waec Ghana</p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>