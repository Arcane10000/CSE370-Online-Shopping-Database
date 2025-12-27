<?php
require_once('DBconnect.php');

if(isset($_POST['productid'])){
	$s= $_POST['productid'];
	
	$sql =" Delete from Product where ProductId='$s'";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Deleted Successfully";
		header("Location: Product.php");
	}
	
	else{
		//echo "Deleted Failed";
		header("Location: Product.php");
	}

}

?>
