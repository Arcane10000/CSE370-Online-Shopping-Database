<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> Inventory </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/> 
  </head>

  <body> 
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">  
			<div class="col-md-2" style="font-size: 30px;color:#ffffff;"> Inventory </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="product.php"> Products </a> 
				<a href="employee.php" style="margin-left: 20px;"> Employee </a> 
				<a href="order.php" style="margin-left: 20px;"> Order  </a> 
				<a href="order_info.php" style="margin-left: 20px;"> OrderInfo  </a>
				<a href="supplier.php" style="margin-left: 20px;"> Supplier  </a> 
					
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Customers </div>
		
		<div class='table_header' style="margin-left:5%; margin-right:5%; margin-top:50px; margin-bottom:50px;text-align:center;background:#ff7a33; border-radius:15px;">
			<div class="row" style="padding:7px;"> 
				<div class="col-md-2"> CustomerId  </div>
				<div class="col-md-1">  Name </div>
				<div class="col-md-2">  Email </div>
				<div class="col-md-1">  Phone Number </div>
				<div class="col-md-2">  Score </div>
				<div class="col-md-2">  Address </div>
				<div class="col-md-1">  EmployeeId </div>
				
		
			
		</div>
		</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM onlineshopping.customer"; //change db name to the table name
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			
			<div style="margin-left:5%; margin-right:5%; margin-top:50px; margin-bottom:50px;text-align:center;background:#c58a6a; border-radius:15px;">
			<div class="row" style="padding:7px;"> 	
				<div class="col-md-2">  <?php echo $row[0]; ?> </div>
				<div class="col-md-1">  <?php echo $row[1]; ?> </div>
				<div class="col-md-2">  <?php echo $row[2] ?> </div>
				<div class="col-md-1">  <?php echo $row[3] ?> </div>
				<div class="col-md-2">  <?php echo $row[4] ?> </div>
				<div class="col-md-2">  <?php echo $row[5] ?> </div>
				<div class="col-md-1">  <?php echo $row[6] ?> </div>
			</div>	
			
			</div>
			
		<?php 
				}					
			}
			?>
			
		
		
		
	</section>	
		
	<section id='section2'>
		<div class="title"> New Customer </div>
		
		<form action="insert_customer.php" class="form_design" method="post">
			CustomerID: <input type="text" name="customerid"> 
			Name: <input type="text" name="name">
			Email: <input type="text" name="email">
			Score: <input type="text" name="score">
			Address: <input type="text" name="address"> 	
			employeeID: <input type="text" name="employeeid"> 
			phone number: <input type="text" name="pno">
			
			
			
			<input type="submit" value="Add to Order">

			
		</form>
		
		<div class="title"> Search Customer </div>
		
		<form action="search_customer.php" class="form_design" method="post">
			CustomerID: <input type="text" name="customerid"> <br/>
			<br/>
			<input type="submit" value="Search">
		</form>
		
		
		<div class="title"> Remove Customer </div>
		
		<form action="delete_customer.php" class="form_design" method="post">
			Name: <input type="text" name="name"> <br/>
			<br/>
			<input type="submit" value="Remove">
		</form>
		
	</section>	
	
	
	
	
	<!----- Footer ----->
	<section id="footer"> 
	 <footer>
		<p>Author: Inventory</p>
		<p>inventory@example.com</p>
	</footer> 
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>
