<?php
require_once('DBconnect.php');

if(isset($_POST['name'])){
	$s= $_POST['name'];
	
	$sql =" Delete from Supplier where Name='$s'";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Deleted Successfully";
		header("Location: Supplier.php");
	}
	
	else{
		//echo "Deleted Failed";
		header("Location: Supplier.php");
	}

}

?>
