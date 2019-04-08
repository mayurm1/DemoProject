<?php
 
      //include database connecton file
      include('DatabaseConnection.php');
      
      //get emailid and password form input fields      
      $userName = $_POST['emailid'];
      $passWord = $_POST['password']; 
      
      //create query
      $sql = "SELECT emailid ,password FROM registration WHERE emailid = '$userName' and password = '$passWord'";

      // Perform query
       $result=$connection->query($sql);
  
      // If result matched $userName and $passWord, table row must be 1 row
      if($result->num_rows == 1)
      {
         session_start();
         
         //redirect to the main page after login
         header("location: productinfo.php");
      }
      else 
      { 
         $passwordErr="invalid password";
      }
   
 ?>
