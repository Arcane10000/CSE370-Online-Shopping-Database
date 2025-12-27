<?php
echo ' CustomerId';
echo ' ---Name';
echo ' ---Email';
echo ' ---Phone Number';
echo ' ---Score';
echo ' ---address';
echo ' ---EmployeeID';

echo '<br>';





// first of all, we need to connect to the database
require_once('DBconnect.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['customerid'])){
	
	$n = $_POST['customerid'];
	
	
	
	$sql = " select * from customer where CustomerId= '$n' ";
	
	//Execute the query 
	$result = mysqli_query($conn, $sql);
	
	//check if this insertion is happening in the database
	if(mysqli_affected_rows($conn)){
	
		//print_r($result);
		//echo [$result];
		//header("Location:customer.php");
		while($row = mysqli_fetch_array($result)){
			echo $row[0];
			echo " ---";
			echo $row[1];
			echo " ---";
			echo $row[2];
			echo " ---";
			echo $row[3];
			echo " ---";
			echo $row[4];
			echo " ---";
			echo $row[5];
			echo " ---";
			echo $row[6];
		}
		
	}
	else{
		//echo "Insertion Failed";
		header("Location: customer.php");
	}
	
}


?>