<?php
include '../find_teacher_db.php';
if(isset($_SESSION['s_email']))
{
    $email=$_SESSION['s_email'];
   $q="select * from students where email='$email'";
    $query=mysqli_query($con,$q);
    $result=mysqli_fetch_array($query);
    $id=$result['id'];
    $name=$result['student'];

         
        
  
if(isset($_POST['upload_photo']))
{
    $username=$_SESSION['username'];
    $user_photo=$_FILES['user_photo'];
    $user_photo['name']=$name."_".$id;
   
    $dest_photo="photo/".$user_photo['name'];
   
    
    
    if(file_exists("photo/".$user_photo['name']))
    {
        $_SESSION['upload_photo_status']="file already exits";
        
    }
    else if($user_photo['type']=="image/jpeg")
    {
        move_uploaded_file($user_photo['tmp_name'],"photo/".$user_photo['name']);
       
        $q="update students set photo='$dest_photo' where email='$email'";
        $result=mysqli_query($con,$q);
        
        if($result)
        {
           
            $_SESSION['upload_photo_status']="photo successfully updated";
        }
        else
        {
            $_SESSION['upload_photo_status']="photo not updated";
        }
        
    }
    
     else
    {
        $_SESSION['upload_photo_status']="file format not valid, Upload failed";
    }
  
}
 if(isset($_POST['upload_marksheet']))  
 {
   $marksheet=$_FILES['marksheet'];
$tmp_marksheet=$marksheet['tmp_name'];
     $marksheet['name']=$name."_".$id."_marksheet";
     
 $dest_marksheet="marksheet/".$marksheet['name'];  
 
    if(file_exists("marksheet/".$marksheet['name']))
    {
        $_SESSION['upload_marksheet_status']="file already exits";
        
        
    }
    else if($marksheet['type']=="image/jpeg")
    {
        move_uploaded_file($tmp_marksheet,$dest_marksheet);
        $q="update students set marksheet='$dest_marksheet' where email='$email'";
        $result=mysqli_query($con,$q);
        if($result)
        {
            
            
          $_SESSION['upload_marksheet_status']="Marksheet successfully updated";  
        }
        else
        {
            $_SESSION['upload_marksheet_status']="Marksheet not updated";
        }
    }
    else
    {
        $_SESSION['upload_marksheet_status']="file format not valid, Upload failed";
    }
    
}
}
else if(isset($_POST['verify_email']))
{
   
   
       $email=$_POST['student_email'];
       $q="select * from students where email='$email'";
       $status=mysqli_query($con,$q);
       $row=mysqli_num_rows($status);
       if($row>0)
       {
          $_SESSION['s_email']=$email; 
           
           ?>
        <script>
            alert("verified successfully");    
        </script>
        <?php
       }
       else
       {
           ?>
        <script>
            alert("No Student are registered on this email id \n Please register first...");    
        </script>
        <?php
       }
       
           
   
    
}
else if(!isset($_SESSION['s_email']))
    {
        $_SESSION['s_email']="none";
    }
if(isset($_POST['submit']))
{
    
    $l_email=$_SESSION['email'];
    if($_SESSION['upload_photo_status']=="photo successfully updated")
    {
        if($_SESSION['upload_marksheet_status']=="Marksheet successfully updated")
        {
          $q2="update accounts set photo='submited' where email='$l_email'";
            $status=mysqli_query($con,$q2);
            if($status)
            {
              header('location:../view/s_view.php');
            }
            else
            {
                ?>
                <script>
                    alert("unable to update");    
                </script>
            <?php 
            }
        }
        
        else
        {
           ?>
                <script>
                    alert("Please Update Marksheet");  
                    
                </script>
            <?php  
        }
    }
    else
    {
            ?>
                <script>
                    alert("Please Update Photo and Marksheet first.");    
                </script>
            <?php   
    }
}

?>