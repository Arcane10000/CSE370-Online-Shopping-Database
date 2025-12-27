<?php
require_once('DBconnect.php');

if(isset($_POST['orderinfoid'])){
	$s= $_POST['orderinfoid'];
	
	$sql =" Delete from OrderInfo where OrderInfoId='$s'";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Deleted Successfully";
		header("Location: order_info.php");
	}
	
	else{
		//echo "Deleted Failed";
		header("Location: order_info.php");
	}

}

?>
