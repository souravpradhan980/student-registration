<?php
include '../find_teacher_db.php';

$id=$_GET['info'];
$q="select * from students where id='$id'";
$query=mysqli_query($con,$q);

$result=mysqli_fetch_array($query);





?>
<!DOCTYPE html>
<html>
<head>
    <style>
    .main_div
        {
            width: 100%;
            height: 100%;
             background-color:#eee;
           
           display: flex;
            flex-wrap: wrap;
        }
    .left_div
        {
            width: 50%;
            height: 100%;
            font-size: 1.5em;
        }
        
        .right_div
        {
            width: 50%;
            height: 100%;
            left: 50%;
           
        }
        
        img
        {
            width: 50%;
            height: 250px;
            
        }
    @media (max-width:768px)
    {
       .left_div
        {
            width: 100%;
            height: 50%;
            font-size: 1.5em;
        }  
        
        .right_div
        {
            width: 100%;
            height: 50%;
           
        }
        img
        {
            width: 100%;
            height: 100%;
        }
    }
    </style>
</head>

<body>
    <div class="main_div">
    <div class="left_div">
      <?php
        
        echo "Id = ".$result['id']."<br>";
        echo "Email = ".$result['email']."<br>";
        echo "Contact = ".$result['phone']."<br>";
        echo "Gender = ".$result['gender']."<br>";
         echo "Subject = ".$result['subject']."<br>";
         echo "Apply Class for = ".$result['apply_class']."<br>";
         echo "Total Marks = ".$result['total_marks']."<br>";
        echo "Address = ".$result['address']."<br>";
        echo "Passing School = ".$result['passing_school']."<br>";
        
        
        ?>
    </div>
    <div class="right_div">
        <img src="../upload_file/<?php echo $result['photo'];?>" >
    </div>
    
    </div>
</body>

</html>