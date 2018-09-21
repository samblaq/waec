<?php
    include("databaseconnection.php");

    if (isset($_POST['Finish'])) {
        function sanitize($data){
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            $data = trim($data);
            return $data;
        }

        if (isset($_POST['capture'])) {
            $image = $_Files['img']['image'];
        }
        
        $surname = sanitize($_POST['surname']);
        $othername = sanitize($_POST['otherNames']);
        $gender = sanitize($_POST['gender']);
        $DOB = sanitize($_POST['DOB']);
        $address = sanitize($_POST['address']);
        $title = sanitize($_POST['title']);
        $surname1 = sanitize($_POST['surname1']);
        $other = sanitize($_POST['other']);
        $relation = sanitize($_POST['relation']);
        $occupation = sanitize($_POST['occupation']);
        $phone = sanitize($_POST['phone']);
        $email = sanitize($_POST['email']);
        $add = sanitize($_POST['add']);
        $first = sanitize($_POST['first']);
        $region = sanitize($_POST['region']);
        $code = sanitize($_POST['code']);
        $programme = sanitize($_POST['programme']);
        $accomodation = sanitize($_POST['accomodation']);
        $second = sanitize($_POST['second']);
        $region_2 = sanitize($_POST['region_2']);
        $code_2 = sanitize($_POST['code_2']);
        $programme_2 = sanitize($_POST['programme_2']);
        $accomodation_2 = sanitize($_POST['accomodation_2']);
        $third = sanitize($_POST['third']);
        $region_3 = sanitize($_POST['region_3']);
        $code_3 = sanitize($_POST['code_3']);
        $programme_3 = sanitize($_POST['programme_3']);
        $accomodation_3 = sanitize($_POST['accomodation_3']);
        $fourth = sanitize($_POST['fourth']);
        $region_4 = sanitize($_POST['region_4']);
        $code_4 = sanitize($_POST['code_4']);
        $programme_4 = sanitize($_POST['programme_4']);
        $accomodation_4 = sanitize($_POST['accomodation_4']);
        $agree = sanitize($_POST['agree']);

        $sql_student_details = "INSERT INTO student (image,surname,othername,gender,DOB,address,title,surname1,other,relation,occupation,phone,email,adds,first,region,code,programme,
            accomodation,second,region_2,code_2,programme_2,accomodation_2,third,region_3,code_3,programme_3,accomodation_3,fourth,region_4,code_4,programme_4,accomodation_4,
            agree) values ('$image','$surname','$othername','$gender','$DOB','$address','$title','$surname1','$other','$relation',
            '$occupation','$phone','$email','$add','$first','$region','$code','$programme','$accomodation','$second','$region_2','$code_2','$programme_2','$accomodation_2',
            '$third','$region_3','$code_3','$programme_3','$accomodation_3','$fourth','$region_4','$code_4','$programme_4','$accomodation_4','$agree')";
        $result = $conn->query($sql_student_details);
    }
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
        <script src="assets/js/script.js"></script>
		
		

		<script type="text/javascript">
			
			function getCurPagePath(){
				var strHttpServer = location.protocol + '//' +
						location.hostname + 
						(location.port === '' ? '' : ':' + location.port),
					curPathName = unescape(location.pathname),
					curPath = curPathName.substring(0, curPathName.lastIndexOf("/") + 1);
				
				return strHttpServer + curPath;
			}

			function onUploadSuccess(){
				var fileName; alert(imageViewer.io.getHTTPResponse());
				responseData = dynamsoft.lib.parse(imageViewer.io.getHTTPResponse());				
				// document.getElementById('btn-upload').innerHTML = 'Upload';
				
				if (responseData && responseData.success && responseData.fileName) {
					fileName = responseData.fileName;

					var a = document.createElement('a');
					var linkText = document.createTextNode(fileName);
					a.appendChild(linkText);
					a.title = fileName;
					a.href = getCurPagePath() + 'UploadedImages/' + fileName + '?v=' + (new Date).getTime();;
					a.target = '_blank';

					var divImgLinks = document.getElementById('image-links'),
						firstChild = divImgLinks.firstChild;

					divImgLinks.insertBefore(a, (typeof firstChild) === 'string' ? null : firstChild);
				}else if(responseData && responseData.error){
					alert(responseData.error);
				}
			}
			
			function onUploadFailure(errorCode, errorString){
				alert('Upload failed: ' + errorString);
			}
			
			function uploadCapturedImage() { 
				var imageViewer = dcsObject.getImageViewer('dcsImageContainer');
				var counter,
				url = getCurPagePath() + 'uploadImage.php',
				fileName = "",
				imageType = imageViewer.io.EnumImageType.JPEG;
				imageIndexArray = [0];
		 
				imageViewer.io.setHTTPFormFields({ "fileName": fileName });
				imageViewer.io.httpUploadAsync(url, imageIndexArray, imageType, onUploadSuccess, onUploadFailure);
			 
			}
		</script>
    </head>


    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="assets/images/logo.png" alt="" height="70" width="70">
                            </span>
                            <!-- <i>
                                <img src="assets/images/logo_sm.png" alt="" height="28">
                            </i> -->
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">Maxine Kennedy</a> </h5>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <?php include("side-bar-menu.php") ?>
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

                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h3 style="text-align:center"><b>WAEC BECE REGISTRATION 2018</b></h3>
                                    <div class="pull-in">
                                        <form id="basic-form" action="student.php" name="myform" method = "post">
                                            <div>
                                                <h3 id="personal">Personal Details</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <h4 class="control-label"><strong>Take a Passport Picture</strong></h4>
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div id="dcsVideoContainer" style="width: 200px; height: 150px; display: inline-block; border: solid 1px gray;" class="form-control"> </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div id="dcsImageContainer" name = "image" style="width: 200px; height: 150px; display: inline-block; border: solid 1px gray;" class="form-control"> </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input type="button" value="Capture" name ="capture" onclick="CaptureDocument();" class="btn btn-primary form-control" />
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <!-- input type="button" value="Upload" name ="saveImage" onclick="alert(window.location.href.replace('student.php', ''));var imageViewer = dcsObject.getImageViewer('dcsImageContainer');var counter,url = getCurPagePath() + 'uploadImage.php',fileName = 'test.jpg',imageType = imageViewer.io.EnumImageType.JPEG;imageIndexArray = [0];imageViewer.io.setHTTPFormFields({ 'fileName': fileName });imageViewer.io.httpUploadAsync(url, imageIndexArray, imageType, onUploadSuccess, onUploadFailure);" class="btn btn-primary form-control" / -->
                                                            <input type="button" value="Upload" name ="saveImage" onclick="uploadCapturedImage();" class="btn btn-primary form-control" />
                                                        </div>
                                                    </div> 
                                                    
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <h4 class="control-label"><strong>Personal Details</strong></h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label " for="surname">Surname<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input class="form-control required" name="surname" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label " for="othername">Othernames<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input class="form-control required" name="otherNames" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="custom-control-label">Gender<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="gender" class="form-control required">
                                                                <option value=""></option>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                   
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label " for="Birth">Date of Birth<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type = "date" name="DOB" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label " for="address">Address<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <textarea name="address" rows="5" cols="20" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                 <!-------------a button should be here ----->
                                                </section>
                                                <!-- Guardians info -->
                                                <h3 id="guardians">Guardians Information</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <h4 class="control-label"><strong>Guardian's Information</strong></h4>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label" for="name"> Title<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="title" class="form-control required">
                                                                <option value=""></option>
                                                                <option value="1">Mr</option>
                                                                <option value="2">Miss</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label " for="surname"> Surname<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input id="surname" name="surname1" type="text" class="required form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label " for="other"> Othernames<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input name="other" type="text" class="required form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label " for="relation"> Relation To Applicant<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="relation" class="form-control required">
                                                                <option value=""></option>
                                                                <option value="1">Grandmother</option>
                                                                <option value="2">GrandFather</option>
                                                                <option value="3">Uncle</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                           <label class="control-label " for="occupation"> Occupation<b style="color:red">*</b></label> 
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input name="occupation" type="text" class="required form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                           <label class="control-label" for="phone">Phone Number<b style="color:red">*</b></label> 
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-phone"></i>
                                                                </div>
                                                                <input type="text" name="phone" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                           <label class="control-label" for="email">Email<b style="color:red">*</b></label> 
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </div>
                                                                <input type="text" name="email" class="form-control"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="control-label " for="address">Address<b style="color:red">*</b></label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <textarea name="add" rows="5" cols="20" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </section>
                                                <h3 id="school">School Selection</h3>
                                                <!--First Choice School_Namehool Selection-->
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <h4 class="control-label"><strong>First Choice Selection</strong></h4>
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="sch" class="control-label">School Name</label>
                                                        </div>
                                                        <?php
                                                            $sql_select_firstChoice = "SELECT * from schoolselection_option1";
                                                            $result = $conn->query($sql_select_firstChoice);
                                                        ?>
                                                        <div class="col-lg-8">
                                                        
                                                            <select name="first" id = "first" class="form-control required">
                                                                <option value=""></option>
                                                                <?php while ($row = $result->fetch_assoc()):; ?>
                                                                <option value="<?php echo $row['ID']; ?>"><?php echo $row['School_Name']; ?></option>
                                                               <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="sch" class="control-label">Region</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="region" id='region' class="form-control required">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="code" class="control-label">School Code</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="code" id='code' class="form-control" disabled="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="prog" class="control-label">Programme</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="programme" id='prog' class="form-control required">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                     </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="accomo" class="control-label">Accomodation</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="accomodation" id ='accomodation' class="form-control required">
                                                                <option  value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr/>

                                                    <!--Second Choice Selection-->
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <h4 class="control-label"><strong>Second Choice Selection</strong></h4>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        $sql_select_SecondChoice = "SELECT * from schoolselection_option2";
                                                        $result2 = $conn->query($sql_select_SecondChoice);
                                                    ?>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="sch" class="control-label">School Name</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        
                                                            <select name="second" id = "second" class="form-control required">
                                                                <option value=""></option>
                                                                <?php while ($row2 = $result2->fetch_assoc()):; ?>
                                                                <option value="<?php echo $row2['ID']; ?>"><?php echo $row2['School_Name']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="sch" class="control-label">Region</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="region_2" id ='region2' class="form-control required">
                                                                <option value=""></option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="code" class="control-label">School Code</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="code_2" id ='code_2' class="form-control" disabled="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="prog" class="control-label">Programme</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="programme_2" id ="prog_2" class="form-control required">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                     </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="accomo" class="control-label">Accomodation</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="accomodation_2" id = "accomodation_2" class="form-control required">
                                                                <option value=""></option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr/>

                                                    <!--Third choice School Selection-->
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <h4 class="control-label"><strong>Third Choice Selection</strong></h4>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        $sql_select_thirdChoice = "SELECT * from schoolselection_option3";
                                                        $result3 = $conn->query($sql_select_thirdChoice);
                                                    ?>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="sch" class="control-label">School Name</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                        
                                                            <select name="third" id = "third" class="form-control required">
                                                                <option value=""></option>
                                                                <?php while ($row3 = $result3->fetch_assoc()):; ?>
                                                                <option value="<?php echo $row3['ID']; ?>"><?php echo $row3['School_Name']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="sch" class="control-label">Region</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="region_3" id = 'region3' class="form-control required">
                                                                <option value=""></option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="code" class="control-label">School Code</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="code_3" id = "code_3" class="form-control" disabled="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="prog" class="control-label">Programme</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="programme_3" id = "prog3" class="form-control required">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                     </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="accomo" class="control-label">Accomodation</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="accomodation_3" id = "accomodation_3" class="form-control required">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr/>

                                                    <!--Fourth Choice School Selection -->
                                                    <?php
                                                        $sql_select_fourthChoice = "SELECT * from schoolselection_option4";
                                                        $result4 = $conn->query($sql_select_fourthChoice);
                                                    ?>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12">
                                                            <h4 class="control-label"><strong>Fourth Choice Selection</strong></h4>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="sch" class="control-label">School Name</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                             <select name="fourth" id = "fourth" class="form-control required">
                                                                <option value=""></option>
                                                                <?php while ($row4 = $result4->fetch_assoc()):; ?>
                                                                <option value="<?php echo $row4['ID']; ?>"><?php echo $row4['Institution']; ?></option>
                                                                <?php endwhile; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="sch" class="control-label">Region</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="region_4" id = "region4" class="form-control required">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="code" class="control-label">School Code</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="code_4" id = "code_4" class="form-control" disabled="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="prog" class="control-label">Programme</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="programme_4" id = "prog4" class="form-control required">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                     </div>

                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-1">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="accomo" class="control-label">Accomodation</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="accomodation_4" id = "accomodation_4"     class="form-control required">
                                                                <option value=""></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                  </section>
                                                
                                                <h3 id="terms">Terms & Conditions</h3>
                                                <section>
                                                    
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-3">
                                                            
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="checkbox-v" type="checkbox" name="agree" class="form-control">
                                                                <label for="checkbox-v"> I agree with the Terms and Conditions. </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-9">
                                                            
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <button type="submit" value="Finish" name="Finish" class="btn btn-primary form-control">Finish</button>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- End row -->
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

        <!--Form Wizard
        <script src="../plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>d

        <!--wizard initialization-->
        <!--<script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>-->

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- javacript for validation
        <script type="text/javascript" src="assets/js/validation.js"></script>-->
        <!--webcam -->
        <script type="text/javascript" src="assets/js/camera.js"></script>

       <script type="text/javascript">
            $(document).ready(function() {
    $('#basic-form').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            surname: {
                validators: {   
                    notEmpty: {
                        message: 'The surname is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 15,
                        message: 'The surname must be more than 3 and less than 15 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The surname can only consist of alphabet'
                    }
                }
            },
            otherNames: {
                validators: {
                    notEmpty: {
                        message: 'The othername is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 15,
                        message: 'The othername must be more than 3 and less than 15 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The othername can only consist of alphabet'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 50,
                        message: 'The address must be more than 10 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9\-\w\s_\.]+$/,
                        message: 'The address can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            
            //this field is for guardians
            title: {
                validators: {
                    notEmpty: {
                        message: 'The title is required'
                    }
                }
            },
            relation: {
                validators: {
                    notEmpty: {
                        message: 'The relation is required'
                    }
                }
            },
            surname1: {
                validators: {   
                    notEmpty: {
                        message: 'The surname is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 15,
                        message: 'The surname must be more than 3 and less than 15 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The surname can only consist of alphabet'
                    }
                }
            },
            other: {
                validators: {
                    notEmpty: {
                        message: 'The othername is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 15,
                        message: 'The othername must be more than 3 and less than 15 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The othername can only consist of alphabet'
                    }
                }
            },
            occupation: {
                validators: {
                    notEmpty: {
                        message: 'The Occupation is required'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The Occupation must be more than 7 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z\w\s]+$/,
                        message: 'The Occupation can only consist of alphabet'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The Phone Number is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 13,
                        message: 'The Phone Number must be 10 or more, but not greater than 13 characters'
                    },
                    regexp: {
                        regexp: /^[0-9'/+]+$/,
                        message: 'The Phone Number can only consist of Numbers'
                    }
                }
            },
            email: {
                validators: {
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    },
                    regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
                }
            },
            add: {
                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    },
                    stringLength: {
                        min: 10,
                        max: 50,
                        message: 'The address must be more than 10 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9\-\w\s_\.]+$/,
                        message: 'address can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },

            //for first choice validation
            first: {
                validators: {
                    notEmpty: {
                        message: 'The First Choice is required'
                    }
                }
            },
            region: {
                validators: {
                    notEmpty: {
                        message: 'The region is required'
                    }
                }
            },
            programme: {
                validators: {
                    notEmpty: {
                        message: 'The Programme is required'
                    }
                }
            },
            accomodation: {
                validators: {
                    notEmpty: {
                        message: 'The Accomodation Status is required'
                    }
                }
            },

            //for second choice validation
            second: {
                validators: {
                    notEmpty: {
                        message: 'The Second Choice is required'
                    }
                }
            },
            region_2: {
                validators: {
                    notEmpty: {
                        message: 'The region is required'
                    }
                }
            },
            programme_2: {
                validators: {
                    notEmpty: {
                        message: 'The Programme is required'
                    }
                }
            },
            accomodation_2: {
                validators: {
                    notEmpty: {
                        message: 'The Accomodation Status is required'
                    }
                }
            },

            //for Third choice validation
            third: {
                validators: {
                    notEmpty: {
                        message: 'The Third Choice is required'
                    }
                }
            },
            region_3: {
                validators: {
                    notEmpty: {
                        message: 'The region is required'
                    }
                }
            },
            programme_3: {
                validators: {
                    notEmpty: {
                        message: 'The Programme is required'
                    }
                }
            },
            accomodation_3: {
                validators: {
                    notEmpty: {
                        message: 'The Accomodation Status is required'
                    }
                }
            },

            //for fourth choice validation
            fourth: {
                validators: {
                    notEmpty: {
                        message: 'The Fourth Choice is required'
                    }
                }
            },
            region_4: {
                validators: {
                    notEmpty: {
                        message: 'The region is required'
                    }
                }
            },
            programme_4: {
                validators: {
                    notEmpty: {
                        message: 'The Programme is required'
                    }
                }
            },
            accomodation_4: {
                validators: {
                    notEmpty: {
                        message: 'The Accomodation Status is required'
                    }
                }
            },

            // Term and Conditions
            agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }//end of fields
    });
});
       </script>

        <script type="text/javascript">
            $(function() {
                $("#first").change(function() {
                    console.log($(this).val());
                    var school_id = $(this).val();
                    
                    $.ajax({
                        url : "functions.php",
                        method : "post",
                        dataType : "json",
                        data : {schoolId : school_id},
                        success : function(response) {
                            console.log(response);
                            console.log(response.courses);

                            var region = $("#region");
                            region.html("<option>" + response.region.R + "</option>");
                            $("#code").val(response.schoolCode.C);
                            // var programs = [];
                            var prog = $("#prog");
                            prog.html("");
                            for (var o in response.courses) {
                                // console.log(response.courses[o]);
                                var value = response.courses[o];
                                if (value != null) {
                                    // programs.push(value);
                                    prog.append("<option>" + value + "</option>");
                                }
                            }
                            // console.log(programs);

                            var accom = $("#accomodation");
                            accom.html("");
                            for (var a in response.accommodation) {
                                var values = response.accommodation[a];
                                if (values != null) {
                                    accom.append("<option>" + values + "</option>");
                                }
                            }
                            console.log(accom.html());
                        }
                    });//ajax ends
                });
               
            });
        </script>

        <script type="text/javascript">
            $(function(){
                $("#second").change(function(){
                    console.log($(this).val());
                    var id = $(this).val();

                    $.ajax({
                        url: "function2.php",
                        method: "post",
                        dataType: "json",
                        data: {Id : id},
                        success: function(response){
                            console.log(response);
                            console.log(response.courses);

                            var region = $("#region2");
                            region.html("<option>" + response.region.R + "</option>");
                            $("#code_2").val(response.schoolCode.C);

                            var prog = $("#prog_2");
                            prog.html("");
                            for(var o in response.courses){
                                var value = response.courses[o];
                                if (value != null) {
                                    prog.append("<option>" + value + "</option>")
                                }
                            }

                            var accom = $("#accomodation_2");
                            accom.html("");
                            for(var a in response.accommodation){
                                var values = response.accommodation[a];
                                if (values != null) {
                                    accom.append("<option>" + values + "</option>")
                                }
                            }
                        }
                    });
                });
            });
        </script>

        <script type="text/javascript">
            $(function(){
                $("#third").change(function(){
                    console.log($(this).val());
                    var id = $(this).val();

                    $.ajax({
                        url: "function3.php",
                        method: "post",
                        dataType: "json",
                        data: {Id : id},
                        success:function(response){
                            console.log(response);
                            console.log(response.courses);

                            var region = $("#region3");
                            region.html("<option>" + response.region.R + "</option>");
                            $("#code_3").val(response.schoolCode.C);

                            var prog = $("#prog3");
                            prog.html("");
                            for( var o in response.courses){
                                var value = response.courses[o];
                                if (value != null) {
                                    prog.append("<option>" + value + "</option>")
                                }
                            }

                            var accom = $("#accomodation_3");
                            accom.html("");
                            for( var a in response.accommodation){
                                var values = response.accommodation[a];
                                if (values != null) {
                                    accom.append("<option>" + values + "</option>")
                                }
                            }
                        }
                    })
                })
            })
        </script>

        <script type="text/javascript">
            $(function(){
                $("#fourth").change(function(){
                    console.log($(this).val());
                    var id = $(this).val();

                    $.ajax({
                        url: "function4.php",
                        method: "post",
                        dataType: "json",
                        data: {Id : id},
                        success:function(response){
                            console.log(response);
                            console.log(response.courses);

                            var region = $("#region4");
                            region.html("<option>" + response.region.R+ "</option>");
                            $("#code_4").val(response.schoolCode.C);

                            var prog = $("#prog4");
                            prog.html("");
                            for(var o in response.courses){
                                var value = response.courses[o];
                                if (value != null) {
                                    prog.append("<option>" + value + "</option>")
                                }
                            }

                            var accom = $("#accomodation_4");
                            accom.html("");
                            for(var a in response.accommodation){
                                var values = response.accommodation[a];
                                if (values != null) {
                                    accom.append("<option>" + values + "</option>")
                                }
                            }
                        }
                    })
                })
            })
        </script>
	</body>
</html>