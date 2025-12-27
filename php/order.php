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
				<a href="customer.php" style="margin-left: 20px;"> Customer  </a> 
				<a href="order_info.php" style="margin-left: 20px;"> OrderInfo  </a>
				<a href="supplier.php" style="margin-left: 20px;"> Supplier  </a> 
					
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Order </div>
		
		<div class='table_header' style="margin-left:15%; margin-right:15%; margin-top:50px; margin-bottom:50px;text-align:center;background:#ff7a33; border-radius:15px;">
			<div class="row" style="padding:7px;"> 
				<div class="col-md-2"> Orderid  </div>
				<div class="col-md-2">  Date </div>
				<div class="col-md-2">  Status </div>
				<div class="col-md-2">  CustomerID </div>
				<div class="col-md-2">  EmployeeId </div>
		
			
		</div>
		</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM onlineshopping.order";   //change db name to the table name
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			
			<div style="margin-left:15%; margin-right:15%; margin-top:50px; margin-bottom:50px;text-align:center;background:#c58a6a; border-radius:15px;">
			<div class="row" style="padding:7px;"> 	
				<div class="col-md-2">  <?php echo $row[0]; ?> </div>
				<div class="col-md-2">  <?php echo $row[1]; ?> </div>
				<div class="col-md-2">  <?php echo $row[2] ?> </div>
				<div class="col-md-2">  <?php echo $row[3] ?> </div>
				<div class="col-md-2">  <?php echo $row[4] ?> </div>
				
			</div>	
			
			</div>
			
		
			<?php 
				}					
			}
			?>
		
		
		
		
		
	</section>	
		
	<section id='section2'>
		<div class="title"> New Order </div>
		
		<form action="insert_order.php" class="form_design" method="post">
			Orderid: <input type="text" name="orderid"> 
			CustomerId: <input type="text" name="customerid">
			EmployeeId: <input type="text" name="employeeid">
			Date // YYYY-MM-DD: <input type="text" name="Date"> 
			Status: <input type="text" name="status"> 
			
			
			
			
			<input type="submit" value="Add to Order">
			
			
		
			
			
		</form>
		
		<div class="title"> Search Order </div>
		
		<form action="search_order.php" class="form_design" method="post">
			Orderid: <input type="text" name="orderid"> <br/>
			<br/>
			<input type="submit" value="Search">
		</form>
		
		<div class="title"> Remove Order </div>
		
		<form action="delete_order.php" class="form_design" method="post">
			Orderid: <input type="text" name="orderid"> <br/>
			<br/>
			<input type="submit" value="Remove">
		</form>
		
		<div class="title"> Delivery Status </div>
		
		<form action="send.php" class="form_design" method="post">
			Orderid: <input type="text" name="orderid"> <br/>
			<br/>
			<input type="submit" value="Sent">
		</form>
		
		
		
	</section>	
	
	<section id = "section3">
	<div class="title"> Delivered </div>
	<div class='table_header' style="margin-left:20%; margin-right:20%; margin-top:50px; margin-bottom:50px;text-align:center;background:#ff7a33; border-radius:15px;">
		<div class="row" style="padding:7px;">
			<div class="col-md-3" style="margin-left: 20px;"> OrderInfoId  </div>
			
			<div class="col-md-2" style="margin-left: 20px;">  Quantity </div>
			<div class="col-md-3" style="margin-left: 20px;">  OrderId </div>
			<div class="col-md-2" style="margin-left: 20px;">  ProductId </div>

		</div>
			
	</div>

		<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->

		<?php
		require_once("DBconnect.php");
		$sql = "SELECT * FROM onlineshopping.Order WHERE Status='Sent'";   //change db name to the table name
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			//here we will print every row that is returned by our query $sql
			while($row = mysqli_fetch_array($result)){
			//here we have to write some HTML code, so we will close php tag
		?>
			<div  style="margin-left:20%; margin-right:20%; margin-top:50px; margin-bottom:50px;text-align:center;background:#c58a6a; border-radius:15px;">
			<div class="row" style="padding:7px;">
				<div class="col-md-3">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo $row[2] ?> </div>
				<div class="col-md-3">  <?php echo $row[3] ?> </div>
				
			</div>
			
			</div>

			<?php
				}
			}
			?>




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

