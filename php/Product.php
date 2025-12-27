<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> FitCheck Inventory </title>
    
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
			<div class="col-md-2" style="font-size: 30px;color:#ffffff;"> FitCheck Inventory </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="order.php"> Order  </a>
				<a href="order_info.php" style="margin-left: 20px;"> OrderInfo  </a> 
				<a href="employee.php" style="margin-left: 20px;"> Employee  </a> 
				<a href="customer.php" style="margin-left: 20px;"> Customer  </a> 
				<a href="Supplier.php"> Supplier  </a> 
			</div>
		</div>
	</section>
	
	<section id = "section1">
		<div class="title"> Products </div>
		<div class='table_header' style="margin-left:20%; margin-right:20%; margin-top:50px; margin-bottom:50px;text-align:center;background:#ff7a33; border-radius:15px;">
			<div class="row" style="padding:7px;"> 
				<div class="col-md-2"> Productid  </div>
				<div class="col-md-3">  Name </div>
				<div class="col-md-2">  Price </div>
				<div class="col-md-3">  Quantity </div>
				<div class="col-md-2">  SupplierId </div>
			</div>
		</div>	
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM Product";   //change db name to the table name
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div style="margin-left:20%; margin-right:20%; margin-top:50px; margin-bottom:50px;text-align:center;background:#c58a6a; border-radius:15px;">
			<div class="row" style="padding:5px;"> 
				<div class="col-md-2">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
				<div class="col-md-2">  <?php echo $row[2] ?> </div>
				<div class="col-md-3">  <?php echo $row[3] ?> </div>
				<div class="col-md-2">  <?php echo $row[4] ?> </div>
			</div>
			</div>
			<?php 
				}					
			}
			?>
			
		</div>
		
		
		
		
		
		<div class="title"> Out of Stock </div>
		<div class='table_header' style="margin-left:15%; margin-right:15%; margin-top:50px; margin-bottom:50px;text-align:center;background:#ff7a33; border-radius:15px;">
			<div class="row" style="padding:7px;"> 
				<div class="col-md-2"> Productid  </div>
				<div class="col-md-2">  Name </div>
				<div class="col-md-2">  Price </div>
				<div class="col-md-2">  Quantity </div>
				<div class="col-md-2">  SupplierId </div>
			</div>
			
		</div>
			
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->
			
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM Product WHERE Quantity_in_stock=0 ORDER BY Price DESC";   //change db name to the table name
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div style="margin-left:15%; margin-right:15%; margin-top:50px; margin-bottom:50px;text-align:center;background:#c58a6a; border-radius:15px;">
			<div class="row" style="padding:5px;"> 
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
		
	<section id = "section2">
		<div class="title"> Add a New Product </div>
		
		<form action="insert_product.php" class="form_design" method="post">
			ProductId: <input type="text" name="productid"> <br/>
			Name: <input type="text" name="name"> <br/> 
			Price: <input type="text" name="price"> <br/>
			Quantity: <input type="text" name="quantity"> <br/>
			SupplierId: <input type="text" name="supplierid"> <br/>
			
			<br/>
			<input type="submit" value="Add Product">
		</form>
	
	
	
		<div class="title"> Remove a Product </div>
		
		<form action="delete_product.php" class="form_design" method="post">
			Productid: <input type="text" name="productid"> <br/>
			<br/>
			<input type="submit" value="Remove Product">
		</form>
		
		<div class="title"> Search Product </div>
		
		<form action="search_product.php" class="form_design" method="post">
			Name: <input type="text" name="name"> <br/>
			<br/>
			<input type="submit" value="search Product">
		</form>
		
		
		<div class="title"> Update Stock </div>
		
		<form action="update_product_stock.php" class="form_design" method="post">
			
			Name: <input type="text" name="name"> <br/> 
			
			New Quantity: <input type="text" name="quantity"> <br/>
			
			
			<br/>
			<input type="submit" value="Update">
		</form>
		
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>

