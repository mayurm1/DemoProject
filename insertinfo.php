<?php
        //include database connecton file
		include('DatabaseConnection.php');
		
		//get data from input fields
		
		$firstName=$_POST['firstname'];
		$lastName=$_POST['lastname'];
		$gender=$_POST['gender'];
		$birthDate=$_POST['birthdate'];
		$emailId=$_POST['emailid'];
		$mobileNumber=$_POST['mobileno'];
		$passWord=$_POST['password'];
		$retypePassword=$_POST['retypepassword'];
		$mobileNumber=$_POST['mobileno'];
        
		//create a query
		$sql = "INSERT INTO registration(firstname,lastname,gender,birthdate,emailid,password,mobileno) 
		          VALUES 
		       ('$firstName','$lastName','$gender','$birthDate','$emailId','$passWord','$mobileNumber')";

		//excecute Query
		if($passWord == $retypePassword)
		{
  			if ($connection->query($sql) === TRUE) 
  			{
			 header("location: productinfo.php");
		     echo "New record created successfully";
		    }
		    else 
		    {
		     echo "Error: " . $sql . "<br>" . $connection->error;
		    }
		}
		else
		{
			header("location:registration.php");

		}

		//close connection
		$connection->close();
?>
