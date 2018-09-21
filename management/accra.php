<?php include("session.php"); ?>
<?php include("databaseconnection.php") ?>
<?php
    if (isset($_GET['ID'])) {
        $ID = $_GET['ID'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student | Profile</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

        <style type="text/css">
            .no-print{
                display: none;
            }

            .img{
            position: relative;
            float: left;
            width:  50px;
            height: 50px;
            background-position: 50% 50%;
            background-repeat:   no-repeat;
            background-size:     cover;
            }   

            .images{

            height: 80px;
            }


            .images:hover{
              background-color: #f3f6f9;
              border-radius: 10px;
            }
        </style>
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <div class="logo">
                    <img src="img/waec_logo.png" >
                </div>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <?php 
                            include("user-account-menu-bar.php");
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php include "side-bar-menu.php"; ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Student Profile
                        <small>Search &amp; Manage all Student Under this Category</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="admin.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Students</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                   
                                   <div class="box-tools">
                                        <div class="input-group" style="text-align: right;">
                                            <form action="#" method="POST" >
                                                <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                                <div class="input-group-btn">
                                                    <button type="submit" name="submit_table_search" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php 
                                        if (isset($_POST['submit_table_search'])) {
                                             $TableSearch = $_POST['table_search'];
                                            echo "<div style=\"text-align:center;\">
                                        <h3 style=\"text-align:center; float:none;\" class=\"box-title\">Search Results with '$TableSearch'</h3>
                                    </div>";
                                        }

                                    ?>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    
                                        <?php 
                                            $rec_limit = 10;
                                              //get number of records
                                              $sql = "SELECT * from student where region = 'G.Accra'";
                                              $result = $conn->query($sql);
                                              $rec_count=mysqli_num_rows($result);


                                             if( isset($_GET{'page'} ) ) {
                                                $page = $_GET{'page'} + 1;
                                                $offset = $rec_limit * $page ;
                                             }else {
                                                $page = 0;
                                                $offset = 0;
                                             }
                                             
                                             $left_rec = $rec_count - ($page * $rec_limit);
                                            if (isset($_POST['submit_table_search'])) {
                                                $sql = "SELECT * FROM student where surname LIKE '%$TableSearch%' OR othername LIKE '%$TableSearch%' OR gender LIKE '%$TableSearch%' OR DOB LIKE '%$TableSearch%'";
                                            }else{
                                                $sql = "SELECT * from student where region = 'G.Accra' limit $offset, $rec_limit";
                                            }
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                echo "<table class=\"table table-hover\">
                                                <tr>
                                                    <th>Surname</th>
                                                    <th>Othername</th>
                                                    <th>Gender</th>
                                                    <th>Action</th>
                                                </tr>";
                                                 while ($row = $result->fetch_assoc()) {
                                                    echo  "<tr>
                                                            <td>".$row['surname']."</td>
                                                            <td>".$row['othername']."</td>  
                                                            <td>".$row['gender']."</td>  
                                                            <td><a href='#' class='btn btn-info btn-sm' data-toggle='modal' data-target='#studentModal" . $row['ID'] . "'>View Details</a></td>
                                                        </tr>";
                                            ?>
                                            <!-- Modal -->
                               
                                            <?php
                                                }
                                            }else {
                                                echo "<br><br><br><h4 style='text-align:center;'> No Schools found.</h4><br><br><br><br><br><br>";
                                            } 

                                        ?>
                                    </table>
                                </div>

                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                  Launch demo modal
                                </button> -->
                        <?php
                            $resultModal = $conn->query($sql);
                            if ($resultModal->num_rows > 0) {
                                
                                 while ($row = $resultModal->fetch_assoc()) {
                        ?>

                            <div class="modal fade" id="studentModal<?= $row['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel"><center>Registration Details</center></h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <table class="table table-hover">
                                            <?php
                                            
                                                    echo "
                                                        <tr>
                                                            <th>Choice</th>
                                                            <th>School</th>
                                                            <th>Programme</th>
                                                            <th>Status</th>
                                                        </tr>";
                                                        

                                                    //while ($row = $result->fetch_assoc()) {
                                                        echo "
                                                        <tr>
                                                            <th>First</th>
                                                            <td>".$row['first']."</td>
                                                            <td>".$row['programme']."</td>
                                                            <td>".$row['accomodation']."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Second</th>
                                                            <td>".$row['second']."</td>
                                                            <td>".$row['programme_2']."</td>
                                                            <td>".$row['accomodation_2']."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Third</th>
                                                            <td>".$row['third']."</td>
                                                            <td>".$row['programme_3']."</td>
                                                            <td>".$row['accomodation_3']."</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fourth</th>
                                                            <td>".$row['fourth']."</td>
                                                            <td>".$row['programme_4']."</td>
                                                            <td>".$row['accomodation_4']."</td>
                                                        </tr>";
                                                    //}
                                                ?>
                                            
                                        </table>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                
                        <?php
                                }
                            }
                        ?>
                                <!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <ul class="pagination pagination-sm no-margin pull-right">
                                     <?php 

                                        if (!isset($_POST['submit_table_search'])) {

                                        
                                            if( $left_rec < $rec_limit and isset($_GET['page'])) {
                                            $last = $page - 2;
                                                echo "<li><a href = \"accra.php?page=$last\">&laquo;</a></li>";
                                             }else if( $page == 0 and $left_rec>$rec_limit) {
                                                echo "<li><a href = \"accra.php?page=$page\">&raquo;</a></li>";
                                             }else if( $page > 0) {
                                                $last = $page - 2;
                                                echo "<li><a href = \"accra.php?page=$last\">&laquo;</a></li>";
                                                echo "<li><a href = \"accra.php?page=$page\">&raquo;</a></li>";
                                             }
                                         }
                                    ?>
                                    </ul>
                                </div>
                            </div><!-- /.box -->
                        </div>
                    </div>

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">


                            
                            <!-- quick email widget -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-envelope"></i>
                                    <h3 class="box-title">Quick Email</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Remove"><i class="fa fa-minus"></i></button>
                                    </div><!-- /. tools -->
                                </div>
                                <div class="box-body">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="emailto" placeholder="Email to:"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                                        </div>
                                        <div>
                                            <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer clearfix">
                                    <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>

                        </section><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-5 connectedSortable">

                            
                            <!-- Calendar -->
                            <div class="box box-solid bg-yellow-gradient">
                                <div class="box-header">
                                    <i class="fa fa-calendar"></i>
                                    <h3 class="box-title">Calendar</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        
                                        <button class="btn btn-warning btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>                                    </div><!-- /. tools -->
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <!--The calendar -->
                                    <div id="calendar" style="width: 100%"></div>
                                </div><!-- /.box-body -->
                                </div><!-- /.box -->

                        </section><!-- right col -->
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
