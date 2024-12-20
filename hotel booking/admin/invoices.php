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
<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

	<div class="main-wrapper">
	<?php include_once 'menu.php';?>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<div class="mt-5">
<h4 class="card-title float-left mt-2">Invoices</h4>
<a href="create-invoice.php" class="btn btn-primary float-right veiwbutton">Create New
Invoice</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form>
<div class="row formtype">
<div class="col-md-3">
<div class="form-group">
<label>From</label>
<div class="cal-icon">
<input type="text" class="form-control datetimepicker">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>To</label>
<div class="cal-icon">
<input type="text" class="form-control datetimepicker">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Leave Status</label>
<select class="form-control" id="sel1" name="sellist1">
<option>Select</option>
<option>Pending</option>
<option>Approved</option>
<option>Rejected</option>
</select>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Search</label>
<a href="#" class="btn btn-success btn-block mt-0 search_button"> Search </a>

</div>
</div>
</div>
</form>
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
<th>#</th>
<th>Invoice Number</th>
<th>Name</th>
<th>Created Date</th>
<th>Due Date</th>
<th>In/Out Customer</th>
<th>Amount</th>
<th class="text-right">Status</th>
<th class="text-right">Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>
1
</td>
<td>#INV-0001</td>
<td>Soeng Souy</td>
<td>3-04-2020</td>
<td>6-04-2020</td>
<td>In Customer</td>
<td>$20</td>
<td class="text-right">
<div class="actions">
<a href="#" class="btn btn-sm bg-success-light mr-2">
Active
</a>
</div>
</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="edit-invoice.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
1
</td>
<td>#INV-0002</td>
<td>Joseph Maglio</td>
<td>5-04-2020</td>
<td>9-04-2020</td>
<td>Out Customer</td>
<td>$20</td>
<td class="text-right">
<div class="actions">
<a href="#" class="btn btn-sm bg-success-light mr-2">
Active
</a>
</div>
</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="edit-invoice.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
1
</td>
<td>#INV-0003</td>
<td>Eugenia Galloway </td>
<td>2-04-2020</td>
<td>10-04-2020</td>
<td>In Customer</td>
<td>$20</td>
<td class="text-right">
<div class="actions">
<a href="#" class="btn btn-sm bg-success-light mr-2">
Active
</a>
</div>
</td>
 <td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="edit-invoice.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
1
</td>
<td>#INV-0004</td>
<td>Barbara Kaiser</td>
<td>1-04-2020</td>
<td>8-04-2020</td>
<td>Out Customer</td>
<td>$20</td>
<td class="text-right">
<div class="actions">
<a href="#" class="btn btn-sm bg-success-light mr-2">
Active
</a>
</div>
</td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v ellipse_color"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="edit-invoice.html"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
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


<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/select2.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
	</script>
</body>
</html>