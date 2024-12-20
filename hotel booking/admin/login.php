<?php
include("../config.php");
if(isset($_SESSION['aloginid']) && $_SESSION['aloginid'] != ''){
    Header("location:index.php");
}
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $res = mysqli_query($conn,"select * from admin where email='".$email."' and password='".$password."'");
    if(mysqli_num_rows($res) < 1)
    {
        $invalid_cred = true;
    }
    else
    {
        
        $admin_data = mysqli_fetch_array($res);
        $_SESSION['aloginid']=$admin_data['id'];
        $_SESSION['aloginuser']=$admin_data['username'];
        Header("location:index.php");
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
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="img/logo.png" alt="Logo"><h1>Trip.Com</h1> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
							<?php
								if(isset($invalid_cred)){
								?>
								<div class="row gx-4 gx-lg-5 justify-content-center">
									<div class="col-lg-12 col-xl-12 text-center">
										<div class="alert alert-danger" style="color:red;padding-bottom:15px;">
											Invalid Username or Password!
										</div>
									</div>
								</div>
								<?php
								}
							?>
							<form action="login.php" method="POST" autocomplete="off">
								<div class="form-group">
									<input class="form-control" type="text" name="email" placeholder="Email"> </div>
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="Password"> </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit" name="submit">Login</button>
								</div>
							</form>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>