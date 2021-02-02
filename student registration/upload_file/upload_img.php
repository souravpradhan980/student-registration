<?php
session_start();
include '../find_teacher_db.php';
include 'upload_backend.php';
if(!isset($_SESSION['username']))
{
    header('location:http://localhost/web%20project%20file%20normal%20registration/login.php');
}
else
{
    $username=$_SESSION['username'];
    
     
    
 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Document</title>
    <!-- Bootstrap -->
	<link href="../css/bootstrap-4.3.1.css" rel="stylesheet">
     <link rel="stylesheet" id="fontawsome" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link href="style.css" rel="stylesheet">
     
      
      
      
      <style>
         
          #photo_status,#marksheet_status
          {
             color: red; 
          }
         #email_div
          {
              display: none;
          }
      </style>
  </head>
  <body>
  	<!-- body code goes here -->
      
        <header>
            
           
                
                
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
                        <i class="fa fa-2x fa-user" style="color:#eee; margin:0px 10px;"></i>
                         <p class="navbar-brand logo" ><?php echo "<h6 id='username'>$username</h6>"?></p>
                  <!-- Links -->
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="btn btn-primary" href="../logout.php">Log Out</a>
                    </li>

                  </ul>

                </nav>
            
            
          </header>    
         
        
         <div class="container-fluied main-div">
             
                 
            
                     
                 <div class="col-xl-8 col-lg-8 col-md-6 col-sm-10 col-12 m-auto form">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                         <div class="user-info" >
                         <h3> Upload image</h3>
                         </div>
                    
                <div id="email_div">
                   <div class="form-group">
                    <label for="email">Student Email Id :</label>
                    <input type="email" name="student_email" class="form-control" id="email" placeholder="Enter Registered Student Email Id">
                       
                       <div class="upload">
                       <input type="submit" class="col-xl-12  btn btn-info mt-2" name="verify_email" value="Varify Student Email">
                       </div>
                       
                    </div>      
                         
                </div>
          
                         
               <div class="form-group">
                        <div class="form-group">
                        <label for="user_photo">Candidate Photo :</label>
                        <input type="file" class="form-control" id="Username" name="user_photo" >
                            </div>
                    
                        <div class="upload">
                            <h6  id="photo_status"><?php echo $_SESSION['upload_photo_status']; ?></h6>
                        <input class="float-right upload-btn btn-success" type="submit" name="upload_photo" value="Upload">
                         </div>
                      </div>
                         
                          <div class="form-group">
                        <div class="form-group">
                        <label for="photo">Marksheet Scan Copy :</label>
                        <input type="file" class="form-control mt-3" id="Username" name="marksheet" >
                            </div>
                    
                        <div class="upload">
                            <h6  id="marksheet_status"><?php echo $_SESSION['upload_marksheet_status']; ?></h6>
                        <input class="float-right upload-btn btn-success" type="submit" name="upload_marksheet" value="Upload">
                         </div>
                      </div>
                         
                     <div class="next-btn">
                         
                      <input type="submit" name="submit" class="btn btn-primary col-xl-12 next mt-3" value="Submit">
                      </div>   
                         
                         </form>
                 </div>
                 
                         
                     
       
             
            
      
                </div>
          
          
   
         
          
          
          
      
      
      <?php
      /***** Upload Photo Status Section *******************/
      if(!isset($_SESSION['upload_photo_status']))
      {
        ?>
            <script>

                    document.getElementById('photo_status').style="display:none";
               

             </script>
        <?php  
      }
      else if($_SESSION['upload_photo_status']=="photo successfully updated")
      {
        ?>
            <script>

                    document.getElementById('photo_status').style="color:green";
               

             </script>
        <?php
      }
      
     /***** Upload Marksheet Status Section *******************/
      
      if(!isset($_SESSION['upload_marksheet_status']))
      {
        ?>
            <script>

                    document.getElementById('marksheet_status').style="display:none";
               

             </script>
        <?php  
      }
      else if($_SESSION['upload_marksheet_status']=="Marksheet successfully updated")
      {
        ?>
            <script>

                    document.getElementById('marksheet_status').style="color:green";
               

             </script>
        <?php
      }
     /***** fatch Email Status Section *******************/
      
     else if($_SESSION['s_email']!="none")
    {
        
        ?>
        <script>
            alert("Registration done.. \n Next upload photos");    
        </script>
    <?php
    }
   else
    {
       ?>
        <script>
           document.getElementById('email_div').style="display:block";    
        </script>
    <?php 
    
    }
      ?>

     
      
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/popper.min.js"></script> 
  <script src="../js/bootstrap-4.3.1.js"></script>
  </body>
</html>