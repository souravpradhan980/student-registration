<?php
session_start();
include '../find_teacher_db.php';
 $username=$_SESSION['username'];
if(isset($_SESSION['s_email']))
{
   
    $r_email=$_SESSION['s_email'];
    $q="select * from students where email='$r_email'";
    $query=mysqli_query($con,$q);


$result=mysqli_fetch_array($query);
if($result)
{
 $name=$result['student'];
$email=$result['email'];
$gender=$result['gender'];
$phone=$result['phone'];
$address=$result['address'];
$class_for=$result['class_for'];
$subject=$result['subject'];
$apply_class=$result['apply_class'];
$total_marks=$result['total_marks'];
$passing_school=$result['passing_school'];
$photo=$result['photo'];
$marksheet=$result['marksheet'];  
  
}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registered Document</title>
    <!-- Bootstrap -->
	<link href="../css/bootstrap-4.3.1.css" rel="stylesheet">
     <link rel="stylesheet" id="fontawsome" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link href="../css/style.css" rel="stylesheet">
    <link href="print.css" rel="stylesheet">
    
    <style>
    .photo
        {
          
            height: 190px;
            border: 2px solid black;
            padding: 0;
        }
        
       h6
        {
        
          font-size: 22px;
              font-family: Comic Sans MS;
            color: white;
          
        }
        img
        {
            width: 100%;
            height: 188px;
            margin: 0;
        }
        
    @media (max-width:768px)
    {
        .photo
        {
            margin: auto;
        }
    }
    </style>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
                        <i class="fa fa-2x fa-user" style="color:#eee; margin:0px 10px;"></i>
                         <p class="navbar-brand logo" ><?php echo "<h6 id='username'>$username</h6>";?></p>
                  <!-- Links -->
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="btn btn-primary" href="../logout.php">Log Out</a>
                    </li>

                  </ul>

                </nav>          
           
                
                
                 
            
            
          </header>    
<div class="container col-xl-9">
  <h2>India Webclass</h2>
  
    <div class="row">
      <div class="photo col-xl-2 col-lg-2 col-md-2 col-sm-3 col-6 " >
        <img src="../upload_file/<?php echo $result['photo'];?>">
    </div>  
     <div class="table col-xl-10 col-lg-10">
       <table class="table table-striped">
    
      <tr>
        <th>Student Name</th>
        <td> <?php echo "$name";?></td>
        
      </tr>
    
    
      <tr>
        <th>Email</th>
        <td><?php echo "$email";?> </td>
   
      </tr>
        <tr>
        <th>Gender</th>
        <td><?php echo "$gender";?> </td>
      </tr>
      <tr>
        <th>Phone number</th>
        <td> <?php echo "$phone";?></td>
      </tr>
      <tr>
        <th>Address</th>
        <td> <?php echo "$address";?></td>
      </tr>
    <tr>
        <th>Class for</th>
        <td> <?php echo "$class_for";?></td>
      </tr>
    <tr>
        <th>Subject</th>
        <td> <?php echo "$subject";?></td>
      </tr>
           
    <tr>
        <th>Apply for Class</th>
        <td><?php echo "$apply_class";?> </td>
      </tr>
    <tr>
        <th>Total Marks</th>
        <td> <?php echo "$total_marks";?></td>
      </tr>
           
    <tr>
        <th>Passing School</th>
        <td> <?php echo "$passing_school";?></td>
      </tr>
   
  </table> 
    </div>   
    
    </div>
  <div class="text-center">
        <button class="btn btn-primary" onclick="window.print();" id="print-btn">Print</button>
    </div>
</div>

    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/popper.min.js"></script> 
  <script src="../js/bootstrap-4.3.1.js"></script>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_table_striped&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jun 2019 13:30:50 GMT -->
    
</html>
