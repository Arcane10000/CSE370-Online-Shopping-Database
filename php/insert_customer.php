<?php

require_once('DBconnect.php');

if(isset($_POST['customerid']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pno']) && isset($_POST['address']) && isset($_POST['employeeid']) && isset($_POST['score'])){
	$c=$_POST['customerid'];
	$n=$_POST['name'];
	$e=$_POST['email'];
	$p=$_POST['pno'];
	$a=$_POST['address'];
	$employee=$_POST['employeeid'];
	$s=$_POST['score'];
	
	$sql="INSERT INTO Customer VALUES( '$c', '$n', '$e', '$p', '$s','$a', '$employee' )";
	
	$result=mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		//echo "Inserted Successfully";
		header("Location: customer.php");
	}
	else{
		//echo "Insertion Failed";
		header("Location: customer.php");
	}

}

?>