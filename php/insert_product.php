<?php

require_once('DBconnect.php');

if(isset($_POST['productid']) && isset($_POST['name']) && isset($_POST['price']) && isset($_POST['quantity']) && isset($_POST['supplierid'])){
	$pr=$_POST['productid'];
	$n=$_POST['name'];
	$p=$_POST['price'];
	$q=$_POST['quantity'];
	$s=$_POST['supplierid'];
	
	$sql="INSERT INTO Product VALUES( '$pr', '$n', '$p', '$q', '$s' )";
	
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