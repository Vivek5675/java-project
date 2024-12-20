<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Hotel Dashboard Template</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/feathericon.min.css">

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
<h4 class="card-title float-left mt-2">Payments</h4>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="table-responsive">
<table class="datatable table table-stripped">
<thead>
<tr>
<th>Invoice ID</th>
<th>Customer Name</th>
<th>Customer Age</th>
<th>Payment Type</th>
<th>Paid Date</th>
<th>Paid Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td><a href="invoice-view.html">#INV-0001</a></td>
<td>Vivek</td>
<td>50</td>
<td>Paypal</td>
<td>5-5-2020</td>
<td>3200</td>
</tr>
<tr>
<td><a href="invoice-view.html">#INV-0002</a></td>
<td>Smit</td>
<td>63</td>
<td>Paypal</td>
<td>10-5-2020</td>
<td>7075</td>
</tr>
<tr>
<td><a href="invoice-view.html">#INV-0003</a></td>
<td>Yash</td>
 <td>66</td>
<td>Payer</td>
<td>12-5-2020</td>
<td>6000</td>
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