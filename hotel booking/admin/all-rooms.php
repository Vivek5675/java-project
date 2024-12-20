<?php
include("../config.php");
if(!isset($_SESSION['aloginid']) || $_SESSION['aloginid'] == ''){
    Header("location: login.php");
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
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper">
	<?php include_once 'menu.php';?>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
							<?php
								if(isset($_SESSION['hotel_success_msg'])){
								?>
								<div class="row gx-4 gx-lg-5 justify-content-center">
									<div class="col-lg-12 col-xl-12 text-center">
										<div class="alert alert-success" style="color:green;padding-bottom:15px;">
										<?php
											echo $_SESSION['hotel_success_msg'];
											unset($_SESSION['hotel_success_msg']);
										?>
										</div>
									</div>
								</div>
								<?php
								}
							?>
							<?php
								if(isset($_SESSION['hotel_error_msg'])){
								?>
								<div class="row gx-4 gx-lg-5 justify-content-center">
									<div class="col-lg-12 col-xl-12 text-center">
										<div class="alert alert-danger" style="color:red;padding-bottom:15px;">
										<?php
											echo $_SESSION['hotel_error_msg'];
											unset($_SESSION['hotel_error_msg']);
										?>
										</div>
									</div>
								</div>
								<?php
								}
							?>
								<h4 class="card-title float-left mt-2">All Hotels</h4> <a href="add-room.php" class="btn btn-primary float-right veiwbutton">Add Hotel</a> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
									<table class="datatable table table-stripped table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Hotel ID</th>
												<th>Hotel Name</th>
												<th>Room type</th>
												<th>Food</th>
												<th>Bed Count</th>
												<th>Price</th>
												<th>Ph. Number</th>
												<th class="text-right">Actions</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$res = mysqli_query($conn, "select * from hotels");
											if(mysqli_num_rows($res) > 0){
												while($row = mysqli_fetch_assoc($res)) {
												?>
												<tr>
													<td><?php echo $row['code']; ?></td>
													<td><?php echo $row['hotel_name']; ?></td>
													<td><?php echo $row['hotel_ac_noac']; ?></td>
													<td><?php echo $row['hotel_food']; ?></td>
													<td><?php echo $row['bed']; ?></td>
													<td><?php echo $row['price']; ?></td>
													<td><?php echo $row['phone_no']; ?></td>
													<td>
														<div class="btn-group" role="group">
														<a href="edit-room.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a>
														<a href="delete-room.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Do you realy want to delete this hotel')" class="btn btn-danger">Delete</a>
														</div>
													</td>
												</tr>
												<?php
												}
											}
										?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_asset" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center"> <img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3 class="delete_class">Are you sure want to delete this Asset?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>