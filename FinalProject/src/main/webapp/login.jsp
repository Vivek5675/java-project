<%@page import="com.dao.Dao" %>
<%@page import="com.model.SignupModel" %>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
    <jsp:useBean id="m" class="com.model.SignupModel"></jsp:useBean>
    <jsp:setProperty property="*" name="m"/>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<%
    
	    response.setHeader("cache-control", "no-cache");
	    response.setHeader("cache-control", "no-store");
	    response.setHeader("pragma", "no-cache");
	    response.setDateHeader("Expires", 0);
    
    %>
    
	<%
			SignupModel m2 =Dao.login(m);
	
			if(m2!=null)
			{
				//out.print("Login Success");
				session.setAttribute("project",true);
				session.setAttribute("email",m.getEmail());
				session.setAttribute("name",m2.getName());
				session.setAttribute("num",m2.getPhone());
				
				
				response.sendRedirect("dashboard.jsp");
			}
			else
			{
				out.print("Login Fail");
			}
	%>
</body>
</html>