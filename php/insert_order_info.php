<?php

require_once('DBconnect.php');

if(isset($_POST['orderinfoid']) && isset($_POST['quantity']) && isset($_POST['orderid']) && isset($_POST['productid'])){
	$oi=$_POST['orderinfoid'];
	
	$q=$_POST['quantity'];
	$o=$_POST['orderid'];
	$pi=$_POST['productid'];
	
	$sql="INSERT INTO onlineshopping.OrderInfo VALUES( '$oi','$q', '$o', '$pi',)";
	
	$result=mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Inserted Successfully";
		header("Location: order_info.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: order_info.php");
	}

}

?>