<?php
	include('databaseconnection.php');
	if (isset($_POST['submit'])) {
		
		// if (isset($_POST['capture'])) {
		$image_t = $_FILES['image']['type'];
		$image_tmp = $_FILES['image']['tmp_name'];
		$image_name = $_FILES['image']['name'];
		if (isset($UploadImageError)) {
			if ($image_tmp) {
				$UploadImageError = "<b>Original Image</b> was not selected.";
			}
		}
	// }

		if (!isset($UploadImageError)) {
			$UploadImageSuccess = "Image Added Successfully";

			//filepath for the image
			$imagePath = "/StudentImages/".$image_name;
			move_uploaded_file($image_name, $imagePath);

			$sql = "INSERT INTO test (name,tmp,img_path) values ('$image_name','$image_tmp','$imagePath')";
			$result = $conn->query($sql);
		}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <script type="text/javascript" src="DCSResources/dynamsoft.camera.config.js"> </script>
        <script type="text/javascript" src="DCSResources/dynamsoft.camera.initiate.js"> </script>
        <script type="text/javascript" src="assets/js/camera.js"></script>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h2>Test Camera</h2>
	<form method="post">
		<!-- <div class="form-group clearfix">
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
                <input type="button" value="Capture" name ="capture" onclick="CaptureDocument();" class="btn btn-custom form-control" />
            </div>
        </div> -->

        <input type="file" name="image" />
        <button name="submit" type="submit">Submit</button>
	</form>
</body>
</html>