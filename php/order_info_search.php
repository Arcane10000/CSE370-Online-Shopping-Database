<?php
echo ' OrderInfo';

echo ' ---Quantity';
echo ' ---OrderId';
echo ' ---ProductId';


echo '<br>';





// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['orderinfoid'])){
	
	$n = $_POST['orderinfoid'];
	
	
	
	$sql = " select * from OrderInfo where OrderInfo= '$n' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//print_r($result);
		//echo [$result];
		//header("Location:product.php");
		while($row = mysqli_fetch_array($result)){
			echo $row[0];
			echo " ---";
			echo $row[1];
			echo " ---";
			echo $row[2];
			echo " ---";
			echo $row[3];
			
			
			
		}
		
	}
	else{
		//echo "Insertion Failed";
		header("Location: orderinfo.php");
	}
	
}


?>