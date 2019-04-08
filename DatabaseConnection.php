<?php 
    //set credentials of databases  to user define variables for connection
      $servername = "localhost";
      $username = "mayurm";
      $password = "mayur123";
      $dbname = "shopinghighwaydb";

      // Create connection
      $connection = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
      } 
  
 ?>