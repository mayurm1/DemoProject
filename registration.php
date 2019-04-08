<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

 <?php include('header.php'); ?>
 


	<form  method="post" action="insertinfo.php">
         <div class="container-fluid ">
        	<div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 jumbotron">
                	<h3 class="make-center">Registration Page</h3>
                	<div class="row">
                		<div class="col-sm-6">
	                		<input type="text" class="form-control" style="margin-bottom: 10px" placeholder="First Name" name="firstname">
	                    </div>
	                    <div class="col-sm-6">
	     	            	<input type="text" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Last Name" name="lastname">
	     	        	</div>
     	            </div>
     	            <div class="row">
     	            	<div class="col-sm-3">
     	            		Gender
     	            	</div>
     	            	<div class="col-sm-3">
     	            		<label class="form-check-label">
                               <input type="radio" class="form-check-input" value="male" name="gender">Male
                            </label>
     	            	</div>
     	            	<div class="col-sm-3">     	            		
     	            		<label class="form-check-label">
                               <input type="radio" class="form-check-input " value="female" name="gender">Female
                            </label>
     	            	</div>
     	            	<div class="col-sm-3"></div>
     	            </div>
     	           <input type="date" class="form-control margin-b" placeholder="BirthDate" name="birthdate">
     	          
                   <input type="Email" class="form-control" style="margin-bottom: 10px" placeholder="Email Id" name="emailid" required>
                   <input type="text" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Mobile Number" name="mobileno">
     	           <input type="Password" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Password" name="password">
     	           <input type="Password" class="form-control mt-2" style="margin-bottom: 10px" placeholder="Retype Password" name="retypepassword" required>
     
     	          <input type="submit" class="btn btn-primary btn-outline-primary" value="Register" name="">
               </div>
               <div class="col-sm-3"></div>
        	</div>
        </div>
    </form>


 </body>
</html>