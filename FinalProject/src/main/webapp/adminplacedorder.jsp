<%@page import="com.model.PlacedOrderModel"%>
<%@page import="com.model.ProductModel"%>
<%@page import="com.dao.Dao"%>
<%@page import="java.util.List"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    /* Add custom styles here */
    body {
      background-color: #f4f4f4;
    }
    .sidebar {
      background-color: #343a40;
      color: white;
      height: 100vh;
    }
    .content {
      padding: 20px;
    }
  </style>
</head>
<body>
	<%
    
	    response.setHeader("cache-control", "no-cache");
	    response.setHeader("cache-control", "no-store");
	    response.setHeader("pragma", "no-cache");
	    response.setDateHeader("Expires", 0);
    
    %>

<%
	if(session.getAttribute("artistadmin")!=null)
	{
		
	}
	else
	{
		response.sendRedirect("adminlogin.jsp");
	}

%>

  
    <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 sidebar">
        <div class="pt-3">
          <h2>Admin Panel</h2>
          
          
          
          <ul class="nav flex-column mt-3">
            <li class="nav-item">
              <a class="nav-link" href="adminaddproducts.jsp" style="color: white;">Add Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminviewproducts.jsp" style="color: white;">View All Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminplacedorder.jsp" style="color: white;">Placed Order</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="admincontacted.jsp" style="color: white;">Feedback</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="adminlogout.jsp" style="color: red;">Logout</a>
            </li>
            
          </ul>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-9 col-lg-10 content">
       
        <h2>Welcome to the Admin Panel</h2>
       	  <table class="scroll table table-bordered  ">
         <thead>
          	<th>PId</th>
            <th>Product Name</th>
			<th>Product Price</th>
			<th>Product Description</th>
			<th>Product Image</th>
			<th>Email</th>
			<th>Id</th>
			<th>Status</th>
			
			
         </thead>
         <tbody>
         <%
         	
         	List<PlacedOrderModel>list = Dao.placedviewproducts();
         	
         	for(PlacedOrderModel pm : list)
         	{
         		
         %>		
         	
         	<tr>
				<td><%=pm.getPid() %></td><td><%=pm.getP_name() %></td><td><%=pm.getP_price() %></td><td><%=pm.getP_des() %></td><td><img src="data:image/jpeg;base64,<%=pm.getP_image()%>" width="150px" height="200px" /></td><td><%=pm.getEmail() %></td><td><%=pm.getId() %></td><td><%=pm.getStatus() %></td>
			</tr>	
         		
         <% 		
         	}
         
         %>
          
</body>
</html>