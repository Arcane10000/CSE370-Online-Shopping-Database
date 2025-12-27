<?php

require_once('DBconnect.php');

if(isset($_POST['supplierid']) && isset($_POST['name'])){
	$s=$_POST['supplierid'];
	$n=$_POST['name'];
	
	$sql="INSERT INTO Supplier VALUES( '$s', '$n' )";
	
	$result=mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Inserted Successfully";
		header("Location: Supplier.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: Supplier.php");
	}

}

?>