package com.dao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Base64;
import java.util.List;

import com.model.AdminModel;
import com.model.CartModel;
import com.model.ContactModel;
import com.model.PlacedOrderModel;
import com.model.ProductModel;
import com.model.SignupModel;
import com.model.WishlistModel;


//Database Connection.
public class Dao 
{
	public static Connection getconnect()
	{
		Connection con = null;
		
		try 
		{
			Class.forName("com.mysql.jdbc.Driver");
			con = DriverManager.getConnection("jdbc:mysql://localhost:3306/artisthub","root","");
		} 
		catch (Exception e) 
		{
			e.printStackTrace();
		}
		
		
		
		return con;
		
	}
	
	//Signup.
	public static int signup(SignupModel m)
	{
		Connection con = Dao.getconnect();
		int status = 0;
		
		try 
		{
			PreparedStatement ps = con.prepareStatement("insert into user(name,phone,email,password) values (?,?,?,?)");
			
			ps.setString(1,m.getName());
			ps.setString(2,m.getPhone());
			ps.setString(3,m.getEmail());
			ps.setString(4,m.getPassword());
			
			status = ps.executeUpdate();
		} 
		catch (SQLException e)
		{
			e.printStackTrace();	
		}
		
		return status;
		
	}
	
	//Login.
	public static SignupModel login(SignupModel m)
	{
		Connection con = Dao.getconnect();
		SignupModel m2 = null;
		
		try 
		{
			PreparedStatement ps = con.prepareStatement("select * from user where email=? and password =?");
			
			ps.setString(1,m.getEmail());
			ps.setString(2,m.getPassword());
			
			ResultSet rs = ps.executeQuery();
			
			if (rs.next())
			{
				int id = rs.getInt(1);
				String name = rs.getString(2);
				String phone = rs.getString(3);
				String email = rs.getString(4);
				String password = rs.getString(5);
				
				m2 = new SignupModel();
				m2.setId(id);
				m2.setName(name);
				m2.setPhone(phone);
				m2.setEmail(email);
				m2.setPassword(password);
			}
			else 
			{
				System.out.println("Invalid Credentials");
			}
		} 
		catch (SQLException e) 
		{
			e.printStackTrace();
		}
		
		
		return m2;
		
	}
	
	//View Product
	public static List<ProductModel> viewproducts()
	{
		List<ProductModel> plist = new ArrayList<ProductModel>();
		
		Connection con = Dao.getconnect();
		
		try 
		{
			PreparedStatement ps = con.prepareStatement("select * from products");
			ResultSet set = ps.executeQuery();
		
			while(set.next())
			{
				
				int id = set.getInt(1);
				String pname = set.getString(2);
				String pprice = set.getString(3);
				String pdes = set.getString(4);
				//String pimage = set.getString(5);
				 
				byte[] imgData = set.getBytes(5);
				String encode = Base64.getEncoder().encodeToString(imgData);
				
				 ProductModel pm = new ProductModel();
				pm.setId(id);
				pm.setP_name(pname);
				pm.setP_price(pprice);
				pm.setP_des(pdes);
				pm.setP_image(encode);	
				
				plist.add(pm);
				
			}
		} 
		catch (Exception e)
		{
			e.printStackTrace();
		}
		
		return plist;	
	}
	
	//Wishlist.
	public static ProductModel getwishlistindexwise(int id)
	{
		ProductModel m =null;
		
		Connection con = Dao.getconnect();
		try 
		{
			PreparedStatement ps = con.prepareStatement("select * from products where id=?");
			ps.setInt(1,id);
			
			ResultSet set = ps.executeQuery();
			
			if(set.next())
			{
				m = new ProductModel();
				m.setId(set.getInt(1));
				m.setP_name(set.getString(2));
				m.setP_price(set.getString(3));
				m.setP_des(set.getString(4));
				byte[] imgData = set.getBytes("p_image"); // blob field 
		        String encode = Base64.getEncoder().encodeToString(imgData);
				m.setP_image(encode);
			}
			
		}
		catch (SQLException e) 
		{
			e.printStackTrace();
		}
		
		
		
		return m;
	}
	
	public static List<WishlistModel> getwishlistbyemail(String email)
	{
		List<WishlistModel>list = new ArrayList<>();
		
		Connection con = Dao.getconnect();
		try 
		{
			PreparedStatement ps = con.prepareStatement("select * from wishlist where email=?");
			ps.setString(1, email);
			
			ResultSet set = ps.executeQuery();
			
			while(set.next())
			{
				int id = set.getInt(1);
				String pname = set.getString(2);
				String pprice = set.getString(3);
				String pdes = set.getString(4);
				
				String email1 = set.getString(6);
				byte[] imgData = set.getBytes("p_image"); // blob field 
		        String encode = Base64.getEncoder().encodeToString(imgData);
				
				WishlistModel m = new WishlistModel();
				m.setId(id);
				m.setP_name(pname);
				m.setP_price(pprice);
				m.setP_des(pdes);
				m.setP_image(encode);
				m.setEmail(email1);
				
				list.add(m);
			}
			
		}
		catch (Exception e)
		{
			e.printStackTrace();
		}
		
		
		return list;
	}
	
	public static List<CartModel>getcartbyemail(String email)
	{
		List<CartModel>list = new ArrayList<>();
		
		Connection con = Dao.getconnect();
		
		try 
		{
			PreparedStatement ps = con.prepareStatement("select * from cart where email=?");
			ps.setString(1, email);
			
			ResultSet set = ps.executeQuery();
			
			while(set.next())
			{
				int id = set.getInt(1);
				String pname = set.getString(2);
				String pprice = set.getString(3);
				String pdes = set.getString(4);
				
				String email1 = set.getString(6);
				byte[] imgData = set.getBytes("p_image"); // blob field 
		        String encode = Base64.getEncoder().encodeToString(imgData);
				
		        CartModel m = new CartModel();
				m.setId(id);
				m.setP_name(pname);
				m.setP_price(pprice);
				m.setP_des(pdes);
				m.setP_image(encode);
				m.setEmail(email1);
				
				list.add(m);
			}
			
		}
		catch (Exception e)
		{
			e.printStackTrace();
		}
		
		
		return list;
	}
	
	public static int deletefromwishlist(int id)
	{
		
		int status = 0;
		
		Connection con = Dao.getconnect();
		
		try 
		{
			PreparedStatement ps = con.prepareStatement("delete from wishlist where id=?");
			ps.setInt(1, id);
			status = ps.executeUpdate();
			
		}
		catch (SQLException e)
		{
			e.printStackTrace();
		}
		
		return status;
	}
	
	//delete from wishlist for button
	public static int delete(int id)
	{
		Connection con = Dao.getconnect();
		int status = 0;
		try
		{
			PreparedStatement ps = con.prepareStatement("delete from wishlist where id=?");
			ps.setInt(1,id);
			status = ps.executeUpdate();
		} 
		catch (SQLException e)
		{
			e.printStackTrace();
		}
		
		return status;
		
	}
	
	//delete from cart for button
		public static int deletecart(int id)
		{
			Connection con = Dao.getconnect();
			int status = 0;
			try
			{
				PreparedStatement ps = con.prepareStatement("delete from cart where id=?");
				ps.setInt(1,id);
				status = ps.executeUpdate();
			} 
			catch (SQLException e)
			{
				e.printStackTrace();
			}
			
			return status;
			
		}
		
		public static AdminModel adminlogin(AdminModel m)
		{
			Connection con = Dao.getconnect();
			AdminModel m2 = null;
			
			try 
			{
				PreparedStatement ps = con.prepareStatement("select * from admin where username=? and password =?");
				
				ps.setString(1,m.getUsername());
				ps.setString(2,m.getPassword());
				
				ResultSet rs = ps.executeQuery();
				
				if (rs.next())
				{
					int id = rs.getInt(1);
					String username = rs.getString(2);
					String password = rs.getString(3);
					
					m2 = new AdminModel();
					m2.setId(id);
					m2.setUsername(username);
					m2.setPassword(password);
				}
				else 
				{
					System.out.println("Invalid Credentials");
				}
			} 
			catch (SQLException e) 
			{
				e.printStackTrace();
			}
			
			return m2;
			
		}
		
		public static List<ContactModel> viewcontact()
		{
			
			List<ContactModel> plist = new ArrayList<>();
			
			Connection con = Dao.getconnect();
			
			try 
			{
				PreparedStatement ps = con.prepareStatement("select * from contact");
				ResultSet set = ps.executeQuery();
			
				while(set.next())
				{
					
					int id = set.getInt(1);
					String name = set.getString(2);
					String email = set.getString(3);
					String mnum = set.getString(4);
					String feedback = set.getString(5);
					//String pimage = set.getString(5);
					 
					
					
					ContactModel cm = new ContactModel();
					cm.setId(id);
					cm.setFullname(name);
					cm.setEmail(email);
					cm.setMobileno(mnum);
					cm.setFeedback(feedback);
					
					plist.add(cm);
					
				}
			} 
			catch (Exception e)
			{
				e.printStackTrace();
			}
			
			
			
			
			return plist;
			
		}
		
		public static int contactinsert(ContactModel m)
		{
			Connection con = Dao.getconnect();
			int status = 0;
			
			try 
			{
				PreparedStatement ps = con.prepareStatement("insert into contact(fullname,email,mobileno,feedback,action) values (?,?,?,?,'pending')");
		
				ps.setString(1,m.getFullname());
				ps.setString(2,m.getEmail());
				ps.setString(3,m.getMobileno());
				ps.setString(4,m.getFeedback());
				
				status = ps.executeUpdate();
			} 
			catch (Exception e)
			{
				
				e.printStackTrace();
			}
			
			return status;
		}
		
		public static int deletefromcart(int id)
		{
			
			int status = 0;
			
			Connection con = Dao.getconnect();
			
			try 
			{
				PreparedStatement ps = con.prepareStatement("delete from cart where id=?");
				ps.setInt(1, id);
				status = ps.executeUpdate();
				
			}
			catch (SQLException e)
			{
				e.printStackTrace();
			}
			
			return status;
		}
		
		
		public static List<PlacedOrderModel> placedviewproducts()
		{
			
			List<PlacedOrderModel> plist = new ArrayList<>();
			
			Connection con = Dao.getconnect();
			
			try 
			{
				PreparedStatement ps = con.prepareStatement("select * from placedorder");
				ResultSet set = ps.executeQuery();
			
				while(set.next())
				{
					
					int pid = set.getInt(1);
					String pname = set.getString(2);
					String pprice = set.getString(3);
					String pdes = set.getString(4);
					//String pimage = set.getString(5);
					 
					byte[] imgData = set.getBytes(5);
					String encode = Base64.getEncoder().encodeToString(imgData);
					
					String email = set.getString(6);
					int id = set.getInt(7);
					String status = set.getString(8);
					
					
					PlacedOrderModel pm = new PlacedOrderModel();
					pm.setPid(pid);
					pm.setP_name(pname);
					pm.setP_price(pprice);
					pm.setP_des(pdes);
					pm.setP_image(encode);	
					pm.setEmail(email);
					pm.setId(id);
					pm.setStatus(status);
					
					
					plist.add(pm);
					
				}
			} 
			catch (Exception e)
			{
				e.printStackTrace();
			}
			
			
			
			
			return plist;
			
		}
		
		public static CartModel getwishlistindexwisecart(int id)
		{
			CartModel m =null;
			
			Connection con = Dao.getconnect();
			try 
			{
				PreparedStatement ps = con.prepareStatement("select * from cart where id=?");
				ps.setInt(1,id);
				
				ResultSet set = ps.executeQuery();
				
				if(set.next())
				{
					m = new CartModel();
					m.setId(set.getInt(1));
					m.setP_name(set.getString(2));
					m.setP_price(set.getString(3));
					m.setP_des(set.getString(4));
					byte[] imgData = set.getBytes("p_image"); // blob field 
			        String encode = Base64.getEncoder().encodeToString(imgData);
					m.setP_image(encode);
				}
				
			}
			catch (SQLException e) 
			{
				e.printStackTrace();
			}
			
			
			
			return m;
		}
}
