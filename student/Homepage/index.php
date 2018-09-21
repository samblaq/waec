<?php
    include("databaseconnection.php");
    include("session.php");

    if(isset($_POST['submit'])){
        function sanitize($data){
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
        }

        if (empty($_POST['code']) || empty($_POST['password'])) {
            $errorlogin = "Invalid School Code or Password";
        }else{
            $code = sanitize($_POST['code']);
            $password = sanitize($_POST['password']);

           $sql = "SELECT * FROM School where sch_code = '$code'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($code == $row['sch_code'] && $password == $row["Password"]) {
                        //Initia;izing session variables.
                        @session_start();
                        $_SESSION['School_Name'] = $row['sch_name'];
                        $_SESSION['School_Code'] = $row['sch_code'];
                        $_SESSION['School_Circuit'] = $row['circuit'];

                        // Redirecting To Other Page
                            header("location: ../student.php"); 
                            exit();
                    } else {
                        $errorlogin = "Invalid School Code or Password";
                    }
                    
                }
                exit();
            }else{
                 $errorlogin = "Invalid School Code or Password";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Waec Ghana</title>
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
        <div class="accountbg" style="background: url('assets/images/2.jpg');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="index.php" class="text-success">
                                    <span><img src="assets/images/waec_logo.png" ></span>
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
                            <form action="index.php" method="post">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">School Code</label>
                                        <input class="form-control" type="text" name="code" required="" placeholder="Enter your School Code">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" name="password" placeholder="Enter your password">
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="submit">Sign In</button>
                                    </div>
                                </div>
                            </form>
                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Students Information <a href="result.php" class="text-dark m-l-5"><b> Sign In</b></a></p>
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