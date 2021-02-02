<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>India Webclass</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
      <!-- Font awsome-->
      <link rel="stylesheet" id="fontawsome" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <!-- Link Css-->
      <link href="css/style.css" rel="stylesheet">
      <?php include 'create_account_backend.php';?>
      
	<style>
         .input
        {
            height: 40px;
        }
        </style>
  </head>
  <body>
  	<!-- body code goes here -->
	<div class="main-div container-fluid">
           <div class="center-div col-xl-9 col-lg-10 col-md-10 col-sm-10 col-12 ">
               <div class="row center-div-row"> 
             <div class="center-left-div col-xl-6 col-lg-6 col-md-6 col-sm-4 col-12 ">
                  <div class="img-section col-xl-7 col-lg-6 col-md-6 col-sm-4 col-5">
                   <img class="left-img col-lg-9 col-12"src="unnamed.png">
                  </div>
              
                  
               </div> 
               <div class="center-right-div  col-lg-6 col-md-6 col-sm-10 col-12 ">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class=" form text-center col-xl-12">
                        <h2>India Webclass Sign Up</h2>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text icon-area"><i class="fa fa-user" style="font-size:20px;"></i></span>
                        </div>
                        <input type="text" name="username" class="form-control input" placeholder="Username">
                      </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text icon-area"><i class="fa fa-envelope" style="font-size:20px;"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control input" placeholder="Email address">
                      </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text icon-area"><i class="fa fa-phone" style="font-size:20px;"></i></span>
                        </div>
                        <input type="text" name="phone" class="form-control input" placeholder="Phone number">
                      </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text icon-area"><i class="fa fa-lock" style="font-size:20px;"></i></span>
                        </div>
                        <input type="password" name="password" class="form-control input" placeholder="Enter Password">
                      </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text icon-area"><i class="fa fa-lock" style="font-size:25px;"></i></span>
                        </div>
                        <input type="Password" name="cpassword" class="form-control input" placeholder="Conform Password">
                      </div>
                        <input type="submit" name="submit" class="btn btn-success col-xl-12 input" value="SIGN UP">
                        
                        
                   <p>If you already have a account <a href="#">Log In</a></p>
                   </form>
                   
               </div> 
               
                </div>
            </div>
         </div>	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>