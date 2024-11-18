<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>
<body>
   <jsp:include page="header.jsp"/>

    <div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
		
		
		
		<form  action="contactinsert.jsp"  method="post" >
			
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i>
					</span>
				</div>
				<input name="fullname" class="form-control" placeholder="Full name"
					type="text" id="name">
			</div>
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i>
					</span>
				</div>
				<input name="email" class="form-control" placeholder="Email"
					type="text" id="email">
			</div>
			
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i>
					</span>
				</div>
				<input name="mobileno" class="form-control" placeholder="Mobile No"
					type="text" id="email">
			</div>
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i>
					</span>
				</div>
				<input name="feedback" class="form-control" placeholder="feedback"
					type="text" id="feedback">
			</div>
			
			<!-- form-group// -->
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">
					Submit
				</button>
			</div>
			
		</form>
		<span id="tops"></span>
		</article>
	</div>
    <jsp:include page="footer.jsp"/>
    
</body>
</html>