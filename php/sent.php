<?php
require_once('DBconnect.php');

if(isset($_POST['orderid'])){
	$s= $_POST['orderid'];
	
	$sql ="UPDATE OrderInfo SET Status='Sent' WHERE OrderId='$s'";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Deleted Successfully";
		header("Location: order.php");
	}
	
	else{
		//echo "Deleted Failed";
		header("Location: order.php");
	}

}

?>