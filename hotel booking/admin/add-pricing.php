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
		<div class="header">
			<div class="header-left">
				<a href="index.php" class="logo"> <img src="img/logo.png" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
				<a href="index.php" class="logo logo-small"> <img src="img/logo.png" alt="Logo" width="30" height="30"> </a>
			</div>
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="active"> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-booking.php"> All Booking </a></li>
								<li><a href="edit-booking.php"> Edit Booking </a></li>

							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-customer.php"> All customers </a></li>
								<li><a href="edit-customer.php"> Edit Customer </a></li>
								<li><a href="add-customer.php"> Add Customer </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Hotels </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-rooms.php">All Hotels </a></li>
								<li><a href="edit-room.php"> Edit Hotels </a></li>
								<li><a href="add-room.php"> Add Hotels </a></li>
							</ul>
						</li>
						
						<li> <a href="pricing.php"><i class="far fa-money-bill-alt"></i> <span>Pricing</span></a> </li>
				
						</li>
				
						<li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="invoices.php">Invoices </a></li>
								<li><a href="payments.php">Payments </a></li>
							</ul>
						</li>										
						<li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="changepassword.php">Change Password </a></li>
								<li><a href="login.php">Log Out</a></li>
							</ul>
						</li>	
					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title mt-5">Add Pricing</h3> </div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<form>
							<div class="row formtype">
								<div class="col-md-4">
									<div class="form-group">
										<label>Pricing Name</label>
										<input class="form-control" type="text" value="single"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Pricing Amount</label>
										<input type="text" class="form-control" id="usr"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Pricing Amount</label>
										<input type="text" class="form-control" id="usr1"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Pricing Amount</label>
										<input type="text" class="form-control" id="usr2"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Pricing Amount</label>
										<input type="text" class="form-control" id="usr3"> </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Pricing Description</label>
										<textarea class="form-control" rows="5" id="comment" name="text"></textarea>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<button type="button" class="btn btn-primary buttonedit mt-5">Publish Pricing</button>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
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