<?php

include 'db_connect.php';
if(isset($_POST['submit']))
{
   
    $email=$_POST['email'];
    $q="select * from signup where email='$email'";
    $query=mysqli_query($con,$q);
    $token=bin2hex(random_bytes(3)); 
    $_SESSION['token']=$token;
    if($query)
    {
      $result=mysqli_fetch_array($query);
        $c_email=$result['email'];
        $_SESSION['email']=$c_email;
        $username=$result['username'];
       
         $user_subject="OTP from Indiawebclass "; 
    $user_msg="Hi $username here your OTP to create new password <b>'$token'</b>";
    $from="souravpradhan980@gmail.com";
    $header="From:$from";
    
     if(mail($c_email,$user_subject,$user_msg,$header))
    {
          $_SESSION['username']=$username;
       $_SESSION['msg']="OTP has been sent to your mail,please check...";
        header('location:verify_otp.php');
    }
     else
     {
         ?>
         <script>
                alert("Unable to send OTP ");
                    
            </script>
         <?php
     }
    }
    else
    {
        ?>
            <script>
                alert("You Don't have any account on this Email ID");
                    
            </script>

        <?php
        
    }
    
}

?>