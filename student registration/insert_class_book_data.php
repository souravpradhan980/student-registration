<?php
include 'find_teacher_db.php';

if(isset($_POST['submit']))
{
    $student=$_POST['student'];
    $s_email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $gender=$_POST['gen'];
    $tution_for=$_POST['tution_for'];
    
    if($tution_for=="School_subject")
    {
       
        
        $subject=$_POST['subject'];
    $class=$_POST['class'];
    $marks=$_POST['marks'];
    $school=$_POST['school'];
    $l_email=$_SESSION['email'];
    
    $q="insert into students(student,email,phone,address,gender,class_for,subject,apply_class,total_marks,passing_school)value('$student','$s_email','$phone','$address','$gender','$tution_for','$subject','$class','$marks','$school')";
        $result=mysqli_query($con,$q); 
    }
    else if($tution_for=="Career_Course")
    {
        
        $course=$_POST['course'];
         $class=$_POST['qualification'];
         $l_email=$_SESSION['email'];
        
        
        $q="insert into students(student,email,phone,address,gender,class_for,subject,apply_class)value('$student','$s_email','$phone','$address','$gender','$tution_for','$course','$class')";
        $result=mysqli_query($con,$q); 
    }
   
if($result)
{
    $_SESSION['s_email']=$s_email;
    $q2="update accounts set registration='registered',r_email='$s_email' where email='$l_email'";
   $status=mysqli_query($con,$q2);
    if($status)
    {
       ?>
        <script>
            alert("Registered Successfully done");    
        </script>
    <?php 
    }
   
}
else
{
     ?>
        <script>
            alert("Registered Faild");    
        </script>
    <?php
}
}


?>