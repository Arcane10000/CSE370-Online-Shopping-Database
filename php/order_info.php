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
				<a href="Product.php" style="margin-left: 20px;"> Product  </a>
				<a href="employee.php" style="margin-left: 20px;"> Employee  </a>
				<a href="customer.php" style="margin-left: 20px;"> Customer  </a>
				<a href="Supplier.php"> Supplier  </a> 
			</div>
		</div>
	</section>

	<section id = "section1">
		<div class="title"> Order Information </div>
		<div class='table_header' style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#ff7a33; border-radius:15px;">
			<div class="row" style="padding:7px;">
				<div class="col-md-2" style="margin-left: 40px;"> OrderInfoId  </div>
				
				<div class="col-md-2" style="margin-left: 40px;">  Quantity </div>
				<div class="col-md-1" style="margin-left: 40px;">  OrderId </div>
				<div class="col-md-2" style="margin-left: 40px;">  ProductId </div>

			</div>
		</div>
			<!-- here we will write php codes to fetch data from database and will show in the rows of this table -->

			<?php
			require_once("DBconnect.php");
			$sql = "SELECT * FROM OrderInfo";   //change db name to the table name
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				//here we will print every row that is returned by our query $sql
				while($row = mysqli_fetch_array($result)){
				//here we have to write some HTML code, so we will close php tag
			?>
			<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;text-align:center;background:#c58a6a; border-radius:15px;">
			<div class="row" style="padding:5px;">
				<div class="col-md-2">  <?php echo $row[0]; ?> </div>
				<div class="col-md-2">  <?php echo $row[1]; ?> </div>
				<div class="col-md-2">  <?php echo $row[2] ?> </div>
				<div class="col-md-1">  <?php echo $row[3] ?> </div>
				
			</div>
			</div>

			<?php
				}
			}
			?>

		</div>



	</section>

	<section id = "section2">
		<div class="title"> Add a New Order </div>

		<form action="insert_order_info.php" class="form_design" method="post">
			OrderInfoId: <input type="text" name="orderinfoid"> <br/>
			
			Quantity: <input type="text" name="quantity"> <br/>
			OrderId: <input type="text" name="orderid"> <br/>
			ProductId: <input type="text" name="productid"> <br/>

			<br/>
			<input type="submit" value="Add to Order">
		</form>
	

	
		<div class="title"> Remove an Order </div>

		<form action="delete_OrderInfo.php" class="form_design" method="post">
			OrderInfoId: <input type="text" name="orderinfoid"> <br/>
			<br/>
			<input type="submit" value="Remove">
		</form>
		
		
		<div class="title"> Search an Order </div>

		<form action="order_info_search.php" class="form_design" method="post">
			OrderInfoId: <input type="text" name="orderinfoid"> <br/>
			<br/>
			<input type="submit" value="search">
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

