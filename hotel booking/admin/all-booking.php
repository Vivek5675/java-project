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
	<title>trip.com - Bookings</title>
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
							<h4 class="card-title float-left mt-2">All Bookings</h4> </div>
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
												<th>username</th>
												<th>Name</th>
												<th>Hotel</th>
												<th>Amount</th>
												<th>Adult</th>
												<th>Child</th>
												<th>Date</th>
												<th>Phone</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$res = mysqli_query($conn, "select bookings.*, users.username, hotels.hotel_name, hotels.price from bookings left join users on bookings.user_id = users.id left join hotels on bookings.hotel_id = hotels.id");
											if(mysqli_num_rows($res) > 0){
												while($row = mysqli_fetch_assoc($res)) {
												?>
												<tr>
													<td><?php echo $row['username']; ?></td>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo $row['hotel_name']; ?></td>
													<td><?php echo $row['price']; ?></td>
													<td><?php echo $row['adult']; ?></td>
													<td><?php echo $row['child']; ?></td>
													<td><?php echo date('d-m-Y',strtotime($row['date'])); ?></td>
													<td><?php echo $row['phone']; ?></td>
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