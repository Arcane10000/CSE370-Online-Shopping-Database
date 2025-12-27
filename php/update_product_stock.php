<?php

require_once('DBconnect.php');

if(isset($_POST['name']) && isset($_POST['quantity'])){
	
	$n=$_POST['name'];
	$e=$_POST['quantity'];
	
	
	$sql="Update product set Quantity_in_stock='$e' where Name='$n'";
	
	$result=mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Inserted Successfully";
		header("Location: Product.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: Product.php");
	}

}

?>