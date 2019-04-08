<?php 

       //include database connecton file
		include('DatabaseConnection.php');

		//get data from input fields
		$category=$_POST['categoryname'];
		$productName=$_POST['productname'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];

		//create a query
		$sql = "INSERT INTO products (category,productname,quantity,price) VALUES ('$category','$productName','$quantity','$price')";
        
		//excecute Query
		if ($connection->query($sql) === TRUE) {
			header('location:productinfo.php');
		     echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $connection->error;
		}

		//close connection
		$connection->close();

 ?>