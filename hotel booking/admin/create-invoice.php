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
<div class="content mt-5">
<div class="row mt-5">
<div class="col-sm-12">
<h4 class="page-title">Create Invoice</h4>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<form>
<div class="row mt-5">
<div class="col-md-3">
<div class="form-group">
<label>Room Type</label>
<select class="form-control" id="sel1" name="sellist1">
<option>Select</option>
<option>Single</option>
<option>Double</option>
<option>Quad</option>
<option>King</option>
<option>Suite</option>
<option>Villa</option>
</select>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Room Type</label>
<select class="form-control" id="sel2" name="sellist1">
<option>Select</option>
<option>Single</option>
<option>Double</option>
<option>Quad</option>
<option>King</option>
<option>Suite</option>
<option>Villa</option>
</select>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Email</label>
<input class="form-control" type="email">
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Room Type</label>
<select class="form-control" id="sel3" name="sellist1">
 <option>Select</option>
<option>Single</option>
<option>Double</option>
<option>Quad</option>
<option>King</option>
<option>Suite</option>
<option>Villa</option>
</select>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Customer Address</label>
<textarea class="form-control" rows="3"></textarea>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Billing Address</label>
<textarea class="form-control" rows="3"></textarea>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Invoice date <span class="text-danger">*</span></label>
<div class="cal-icon">
<input class="form-control datetimepicker" type="text">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-group">
<label>Due Date <span class="text-danger">*</span></label>
<div class="cal-icon">
<input class="form-control datetimepicker" type="text">
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="table-responsive">
<table class="table table-hover table-white">
<thead>
<tr>
<th style="width: 20px">#</th>
<th class="col-sm-2">Item</th>
<th class="col-md-6">Description</th>
<th style="width:100px;">Unit Cost</th>
<th style="width:80px;">Qty</th>
<th>Amount</th>
<th> </th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>
<input class="form-control" type="text" style="min-width:150px">
</td>
<td>
<input class="form-control" type="text" style="min-width:150px">
</td>
<td>
<input class="form-control" style="width:100px" type="text">
</td>
<td>
<input class="form-control" style="width:80px" type="text">
</td>
<td>
<input class="form-control" readonly="" style="width:120px" type="text">
</td>
<td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fas fa-plus"></i></a></td>
</tr>
<tr>
<td>2</td>
<td>
<input class="form-control" type="text" style="min-width:150px">
</td>
<td>
<input class="form-control" type="text" style="min-width:150px">
</td>
<td>
<input class="form-control" style="width:100px" type="text">
</td>
<td>
<input class="form-control" style="width:80px" type="text">
</td>
<td>
<input class="form-control" readonly="" style="width:120px" type="text">
</td>
<td><a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fas fa-trash-alt"></i></a></td>
</tr>
</tbody>
</table>
</div>
<div class="table-responsive">
<table class="table table-hover table-white">
<tbody>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td class="text-right">Total</td>
<td style="text-align: right; padding-right: 30px;width: 230px">0
</td>
</tr>
<tr>
<td colspan="5" class="text-right">Tax</td>
<td style="text-align: right; padding-right: 30px;width: 230px">
<input class="form-control text-right form-amt" value="0" readonly="" type="text">
</td>
</tr>
<tr>
<td colspan="5" class="text-right">
Discount %
</td>
<td style="text-align: right; padding-right: 30px;width: 230px">
<input class="form-control text-right" type="text">
</td>
</tr>
<tr>
<td colspan="5" style="text-align: right; font-weight: bold">
Grand Total
</td>
<td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
$ 0.00
</td>
</tr>
</tbody>
</table>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
<label>Other Information</label>
<textarea class="form-control"></textarea>
</div>
</div>
</div>
</div>
</div>
<button type="button" class="btn btn-primary buttonedit">Save</button>
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