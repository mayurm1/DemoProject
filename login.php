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

 <?php include('header.php') ?>
  
  <form action="getlogin.php" method="post">
   <div class="container-fluid ">
    <div class="row">
     <div class="col-sm-3"></div>
     <div class="col-sm-6 jumbotron">
      <h3>Login Your Account</h3>
      
      <input type="text" class="form-control" style="margin-bottom: 10px" placeholder="Username" name="emailid">
      <input type="text" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Password" name="password">
      <input type="submit" class="btn btn-primary btn-outline-primary" value="login" name="">
      
     </div>
     <div class="col-sm-3"></div>
    </div>
   </div>
   </form>

</body>
 
</html>