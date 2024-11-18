<%@page import="com.dao.Dao"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    <jsp:useBean id="m" class="com.model.ContactModel"/>
	 <jsp:setProperty property="*" name="m"/> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<%
	
	int status = Dao.contactinsert(m);
	
	if(status>0)
	{
		
	%>
	
	<form  action="https://api.web3forms.com/submit"  method="post" >
			
			<input type="hidden" name="access_key" value="a3b9ae3c-7525-473c-8fd1-ea513f4ec007">
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i>
					</span>
				</div>
				<input name="fullname" class="form-control" placeholder="Full name"
					type="hidden" id="name" value="<%=m.getFullname()%>">
			</div>
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i>
					</span>
				</div>
				<input name="email" class="form-control" placeholder="Email"
					type="hidden" id="email" value="<%=m.getEmail()%>">
			</div>
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i>
					</span>
				</div>
				<input name="mobileno" class="form-control" placeholder="mobile no"
					type="hidden" id="mobileno" value="<%=m.getMobileno()%>">
			</div>
			
			<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"> <i class="fa fa-user"></i>
					</span>
				</div>
				<input name="feedback" class="form-control" placeholder="feedback"
					type="hidden" id="feedback" value="<%=m.getFeedback()%>">
			</div>
			
			<!-- form-group// -->
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block">
					Send Email
				</button>
			</div>
			
		</form>
		<span id="tops"></span>
		</article>
	</div>
	
	
	
	<% 	
		//response.sendRedirect("");
	}
	else
	{
		
	}

	%>
</body>
</html>