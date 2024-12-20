<?php
include("../config.php");
if(!isset($_SESSION['aloginid']) || $_SESSION['aloginid'] == ''){
    Header("location: login.php");
}
if(isset($_POST['submit']))
{
    $code = $_POST['code'];
	$hotel_name = $_POST['hotel_name'];
	$hotel_ac_noac = $_POST['hotel_ac_noac'];
	$hotel_food = $_POST['hotel_food'];
	$bed = $_POST['bed'];
	$price = $_POST['price'];
	$phone_no = $_POST['phone_no'];
	// $file_upload = $_POST['file_upload'];
	$detail = $_POST['detail'];
    $address = $_POST['address'];

	$errors= false;
	$file_name = $_FILES['file_upload']['name'];
	$file_size =$_FILES['file_upload']['size'];
	$file_tmp =$_FILES['file_upload']['tmp_name'];
	$file_type=$_FILES['file_upload']['type'];
	$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);;
	$extensions= array("jpeg","jpg","png");
	if(in_array($file_ext,$extensions)=== false){
		$hotel_error = "Extension not allowed, please choose a JPEG or PNG file.";
		$errors = true;
	}elseif($file_size > 2097152){
		$hotel_error = 'File size must be excately 2 MB';
		$errors = true;
	}elseif(empty($errors)==true){
		// echo "uploads/hotels/".$file_name;exit;
		$temm = move_uploaded_file($file_tmp,"../uploads/hotels/".$file_name);
		$file_upload = $file_name;
	}

	if($errors == false){
		$inset = mysqli_query($conn,"insert into hotels (code,hotel_name,hotel_ac_noac,hotel_food,bed,price,phone_no,file_upload,detail,address) values('".$code."','".$hotel_name."','".$hotel_ac_noac."','".$hotel_food."','".$bed."','".$price."','".$phone_no."','".$file_upload."','".$detail."','".$address."')");
		if($inset)
		{
			$_SESSION['hotel_success_msg'] = "Hotel added successfully.";
			Header("location:all-rooms.php");
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper">
	<?php include_once 'menu.php';?>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col mt-5">
						<?php
							if(isset($hotel_error)){
							?>
							<div class="row gx-4 gx-lg-5 justify-content-center">
								<div class="col-lg-12 col-xl-12 text-center">
									<div class="alert alert-success" style="color:green;padding-bottom:15px;">
									<?php
										echo $hotel_error;
									?>
									</div>
								</div>
							</div>
							<?php
							}
						?>
							<h3 class="page-title mt-5">Add Hotels</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form action="add-room.php" method="POST" enctype="multipart/form-data">
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Hotel Id</label>
										<input class="form-control" type="text" name="code" required> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Hotel Name</label>
										<input class="form-control" type="text" name="hotel_name" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>AC/NON-AC</label>
										<select class="form-control" id="sel2" name="hotel_ac_noac" required>
											<option value="">Select</option>
											<option value="AC">AC</option>
											<option value="NON-AC">NON-AC</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Food</label>
										<select class="form-control" id="sel3" name="hotel_food" required>
											<option value="">Select</option>
											<option value="Free Breakfast">Free Breakfast</option>
											<option value="Free Lunch">Free Lunch</option>
											<option value="Free Dinner">Free Dinner</option>
											<option value="Free Breakfast & Dinner">Free Breakfast & Dinner</option>
											<option value="Free Welcome Drink">Free Welcome Drink</option>
											<option value="No Free Food">No Free Food</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Bed Count</label>
										<select class="form-control" id="sel" name="bed" required>
											<option value="">Select</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Price</label>
										<input type="text" class="form-control" id="usr" name="price" required> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Phone Number</label>
										<input type="text" class="form-control" id="usr1" name="phone_no" required> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>File Upload</label>
										<div class="custom-file mb-3">
											<input type="file" class="custom-file-input" id="customFile" name="file_upload" required>
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
									</div>
								</div>
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Detail</label>
										<textarea class="form-control" rows="5" id="comment" name="detail" required></textarea>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Address</label>
										<textarea class="form-control" rows="5" id="comment" name="address" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-primary buttonedit ml-2">Save</button>
										<a href="all-rooms.php" class="btn btn-primary buttonedit">Cancel</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script>
	$(function() {
		$('#datetimepicker3').datetimepicker({
			format: 'LT'
		});
	});
	</script>
</body>

</html>