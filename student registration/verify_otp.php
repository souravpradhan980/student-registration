<?php
session_start();

if(isset($_POST['submit']))
{
    $etoken=$_POST['otp'];
    
    if($etoken==$_SESSION['token'])
    {
        header('location:create_password.php');
    }
    
    else
    {
        $_SESSION['msg']="Invalide OTP...";
    }
    
}

if(isset($_POST['resend']))
{
  $token=mt_rand(10000,99999); 
    $_SESSION['token']=$token;
    $c_email=$_SESSION['email'];
        $username=$_SESSION['username'];
         $user_subject="OTP from Indiawebclass "; 
    $user_msg="Hi $username here your OTP to create new password $token";
    $from="souravpradhan980@gmail.com";
    $header="From:$from";
    
     if(mail($c_email,$user_subject,$user_msg,$header))
    {
       $_SESSION['msg']="OTP Resend to your mail,please check...";
       
    }  
    
}
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
         <!-- Php include -->
    
	<style>
         .check_otp
        {
            width: 100%;
            height: 100px;
            background-color: #0cc00c;
            color: white;
        }
        .resend
        {
            height: 36px;
        }
        
        p
        {
            margin-top: 10px;
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
                        <h2>India Webclass Log In</h2>
                        <span class="check_otp">  <?php echo $_SESSION['msg'];?></span>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text icon-area"><i class="fa fa-phone" style="font-size:20px;"></i></div>
                        </div>
                        <input type="text" name="otp" class="form-control input" placeholder="Enter OTP">
                      </div>
                        
                        <input type="submit" name="submit" class="btn btn-success col-xl-12 input" value="Verify OTP">
                        
                        <p>If you did not get any OTP 
                        <input type="submit" name="resend" class="btn btn-info col-xl-2 resend " value="Resend OTP">
                        </p>
                   
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