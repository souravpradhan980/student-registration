<?php
session_start();
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
    <title>Ragistration Form</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
     <link rel="stylesheet" id="fontawsome" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link href="css/style.css" rel="stylesheet">
     
      
     <?php
      include 'insert_class_book_data.php';
      
      ?>
      
      
      <style>
            .navbar
          {
              padding: 2px 16px;
          }
          .main-div
          {
           background-color:gainsboro;
      
              height: 100%;
              padding: 0;
          }
          h1
          {
              font-family: Cooper Black;
              padding-top: 10px;
              font-size: 30px;
              font-weight: 200px;
          }
          h3
          {
              font-family: Comic Sans MS;
          }
          #username
          {
              font-size: 25px;
              font-family: Comic Sans MS;
              color: white;
          }
          .form
          {
              padding: 20px;
              height: 100%;
              background-color: white;
              box-shadow:1px 5px 13px 0px #4b4747c7;
              box-sizing: border-box;
          }
          .user-info
          {
              width: 100%;
              height: 40px;
              /*background-color:#ef6d0ec4;*/
              background-color: #ef6603;
              border-radius: 5px;
          }
          .user-info h3
          {
              color: white;
              text-align: center;
          }
          .next-btn
          {
             
              width: 100%;
              height: 50px;
          }
          .next
          {
              float: right;
          }
      </style>
  </head>
  <body>
  	<!-- body code goes here -->
      
        <header>
            
           
                
                
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                        <i class="fa fa-2x fa-user" style="color:#eee; margin:0px 10px;"></i>
                         <p class="navbar-brand logo" ><?php echo "<h6 id='username'>$username</h6>"?></p>
                  <!-- Links -->
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="btn btn-primary" href="logout.php">Log Out</a>
                    </li>

                  </ul>

                </nav>
            
            
          </header>    
         
        
         <div class="container-fluied main-div">
             <?php
                if(isset($_SESSION['s_email'])) 
                     {
                         
                          header('location:upload_file/upload_img.php');
                     }

                ?>
                 
            
                     
                 <div class="col-xl-8 col-lg-8 col-md-6 col-sm-10 col-12 m-auto form">
                     <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
                         <div class="user-info" >
                         <h3> Student Information</h3>
                         </div>
                    <div class="form-group">
                        <label for="Username">Username :</label>
                        <input type="text" name="student" class="form-control" id="Username" placeholder="Enter Student Username" required>
                      </div>
                      <div class="form-group">
                        <label for="email" >Student email address :</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Student email address" required>
                      </div>
                     <div class="form-group">
                        <label for="phone">Student Phone number :</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Student Phone number" required>
                      </div>
                     <div class="form-group">
                      <label for="address">Address :</label>
                      <textarea class="form-control" name="address" rows="3" id="address" placeholder="Enter Student address"required></textarea>
                    </div>
                     
                     <div class="form-group">
                      <label class="radio-inline"><input type="radio"  name="gen" value="male" required>Male</label>
                          <label class="radio-inline"><input type="radio" name="gen" value="female" required>Female</label>
                    </div>
                     <div class="form-group">
                      <label class="radio-inline"><input  type="radio" name="tution_for" value="School_subject" onchange="change()"required>School subject</label>
                          <label class="radio-inline"><input type="radio" name="tution_for" value="Career_Course" onchange="change2()" required>Career Course</label>
                    </div>
                    <div class="user-info" >
                         <h3>Educational Information to apply</h3>
                         </div>
                         
                    <div id="for_course">
                      <div class="form-group">
                        <label for="class">Educational Qualification :</label>
                    <input type="text" class="form-control" id="qualification" name="qualification"  placeholder="Enter your last Educational qualification" required>
                      </div> 
                         <div class="form-group">
                        <label for="school">Apply for Course :</label>
                    <input type="text" class="form-control" id="course" name="course" placeholder="Enter Subject or Course name for enrollment" required >
                      </div>
                    </div>
                <div id="for_subject">
                     <div class="form-group">
                        <label for="school">Apply for Subjects :</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject or Course name for enrollment" required >
                      </div>
                        <div class="form-group">
                        <label for="class">Apply for class :</label>
                    <input type="text" class="form-control" id="class" name="class"  placeholder="Enter class for getting lacture" required >
                      </div>
                     
                     <div class="form-group">
                        <label for="marks">Total Marks of last Passing Class :</label>
                    <input type="text" class="form-control" id="marks" name="marks" placeholder="Enter Total Marks of last Passing class (as printed on Marksheet)"required>
                      </div>
                     <div class="form-group" >
                        <label for="school" >Passing School :</label>
                        <input type="text" class="form-control" id="school" name="school" placeholder="Enter School name where last class has passed" required>
                      </div>
                       </div>   
                     <div class="next-btn">
                         
                      <input type="submit" name="submit" class="btn btn-primary col-xl-12 next" value="Submit">
                      </div>   
                         
                         </form>
                 </div>
                 
                         
                     
       
             
            
      
                </div>
          
          <script>
              
              function change()
              {
                  document.getElementById('for_subject').style="display:block";
                  document.getElementById('for_course').style="display:none";
                  document.getElementById('qualification').removeAttribute('required');
                  document.getElementById('course').removeAttribute('required');
                 
              }
      
                function change2()
              {
                   document.getElementById('for_course').style="display:block";
                  document.getElementById('for_subject').style="display:none";
                  document.getElementById('subject').removeAttribute('required');
                  document.getElementById('class').removeAttribute('required');
                  document.getElementById('marks').removeAttribute('required');
                  document.getElementById('school').removeAttribute('required');
              }
      
      
            </script>
   
         
        
      
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.3.1.js"></script>
  </body>
</html>