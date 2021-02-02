<?php


if(isset($_POST['submit']))
{
$phone=$_POST['phone'];
  
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'find_teacher');

$q="select * from accounts where phone='$phone'";
$query=mysqli_query($con,$q);
$result=mysqli_num_rows($query);

if($result==1)
{
   
    $fatch_data=mysqli_fetch_array($query);
    
    $db_pass=$fatch_data['password'];
   $email=$fatch_data['email'];
    $reg=$fatch_data['registration'];
    $photo=$fatch_data['photo'];
    $account=$fatch_data['account'];
    
     $pass_decode=password_verify($password,$db_pass);
    if($pass_decode)
      {
                 
    $_SESSION['email']=$fatch_data['email'];
      $_SESSION['username']=$fatch_data['username']; 
        if($account=="admin")
        {
            header('location:view/m_view.php');
        }
        else if($reg=="registered")
        {
            $_SESSION['s_email']=$fatch_data['r_email'];
            if($photo=="submited")
            {
                header('location:view/s_view.php');
            }
            else
            {
                header('location:upload_file/upload_img.php');
            }
        }
        else
        {
           header('location:home.php'); 
        }
    
        
    }
    else
    {
        ?>
            <script> alert("password incorect");</script>
        <?php
    }
    
}
else
{
   ?> <script> alert("Phone incorrect");</script> <?php
    
}
    mysqli_close($con);
}

?>