<%@page import="com.model.ContactModel"%>
<%@page import="com.model.ProductModel"%>
<%@page import="com.dao.Dao"%>
<%@page import="java.util.List"%>

<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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
          	<th>Id</th>
            <th>Contact Name</th>
			<th>Contact Email</th>
			<th>Mobile Number</th>
			<th>Feedback</th>
			<th>Action</th>
			
			
         </thead>
         <tbody>
         <%
         	
         	List<ContactModel>list = Dao.viewcontact();
         	
         	for(ContactModel pm : list)
         	{
         		
         %>		
         	
         	<tr>
				<td><%=pm.getId() %></td>
				<td><%=pm.getFullname() %></td>
				<td><%=pm.getEmail() %></td>
				<td><%=pm.getMobileno() %></td>
				<td><%=pm.getFeedback() %></td>
				<td>
			<form action="Actionresolved" method="POST">
		   		 <input type="hidden" name="action" value="RESOLVED" />
		   		 <input type="hidden" name="id" value="<%=pm.getId() %>" />
		   		 
		    	<button  type="submit">resolved</button>
		</form>		
				</td>
				
			</tr>	
         		
         <% 		
         	}
         
         %>
          <%--  <%
			List<ImageModel> list = ImageDao.getAll();
			for(ImageModel m : list)
			{
			%>
			<tr>
				</td><td><%=m.getP_name() %></td><td><%=m.getP_price() %></td><td><%=m.getP_des() %></td><td><img src="data:image/jpeg;base64,<%=m.getP_image()%>" width="150px" height="200px" /></td>
			</tr>	
			
			<%
				}
			%> --%>
         </tbody>
      </table>
       	 
        <!-- Add your content here -->
      </div>
    </div>
  </div>
 <div class="container ">
     
   </div>
 <!-- <select  name="action" id="action">
	 					 <option value="pending">PENDING</option>
	  						<option value="resolved">RESOLVED</option>
	  				</select>  -->
  
</body>
</html>