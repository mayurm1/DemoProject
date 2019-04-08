<!DOCTYPE html>
<html>
<head>
	<title></title>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>

<body>
    
  <!--Header-->
    <div class="container-fluid">
     	<div class="row">
     		<div class="col-xs-4 bg-primary beutify make-center">
     		 ShoppingHighway
     		</div>
        <form action="getProductDetails.php" method="post">
     		<div class="col-xs-4 bg-primary beutify make-center">
     		 <input type="text" class="form-control" name="productname" placeholder="Search Products...">
     		 <input type="submit" class="btn btn-danger" name="" value="Search">
     		</div>
        </form>
         <div class="col-xs-4 bg-primary beutify make-center">
           <a href="login.php">
     		    <button type="button" class="btn btn-info btn-lg">
             <span class="glyphicon glyphicon-off"></span> sign out
            </button> 
         </a>
       </div>
      </div>
    </div>


    <!--Main Body--> 
    <form action="insertproduct.php" method="post">
    <div class="container-fluid" style="margin-top: 10px" >
        <div class="row">

          <div class="col-xs-3">
            <a href="getProductDetails.php"><input type="button"  class="form-control btn-primary btn-lg " value="Display Product" name=""></a>
          </div>

          <div class="col-xs-6 breadcrumb">
            <h3 class="make-center"> ...Fill The Product Details...</h3>
               <input type="text" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Category Name" name="categoryname">
                <input type="text" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Product Name" name="productname">
                <input type="text" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Quantity" name="quantity">
                <input type="text" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Price" name="price">
                <input type="submit" class="btn btn-primary btn-outline-primary" value="Insert Product" name="submit">
          </div>

          <div class="col-xs-3">
               
                         
                    </div>
                </div>
         </form>
</body>
</html>