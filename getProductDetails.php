<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   <?php 

                        //include database connection file 
                       include('DatabaseConnection.php'); 

                        //create a query
                          $sql = "SELECT *FROM products";
                          
                        //excecute Query
                        $result = $connection->query($sql);
                      
                        //close connection
                        $connection->close();

              ?>
                    <div class="box-body table-responsive no-padding">
                         <table class="table table-hover"> 
                              <tr>
                                   <div class="container-fluid bg-">
                                      <div class="row">
                                              <div class="col-sm-3">
                                               <h4>product Name</h4>
                                              </div>
                                            <div class="col-sm-3">
                                           <h4> Quantity</h4>
                                          </div>
                                            <div class="col-sm-3">
                                           <h4> Price</h4>
                                          </div>
                                      </div>
                                    </div>
                                  
                               </tr>

                               <tr>
                                  <?php

                                       if(mysqli_num_rows($result)>0)
                                       {
                                         while($row=mysqli_fetch_array($result))
                                         {  
                                  ?>
                                    <div class="container-fluid">
                                      <div class="row">
                                         <div class="col-sm-3">
                                            <?php echo $row['productname']; ?>
                                         </div>
                                         <div class="col-sm-3">
                                            <?php echo $row['quantity']; ?>
                                          </div>
                                            <div class="col-sm-3">
                                            <?php echo $row['price']; ?>
                                          </div>
                                      </div>
                                    </div><br>
                                    <?php
                                        }
                                       }
                                     ?>

                                  </tr>
                           </table>
                        </div>
</body>
</html>
 