<?php
    
if(isset($_POST['submit']))
{
    

$server="localhost";
$user="root";
$password="";
$db="find_teacher";
$con=mysqli_connect($server,$user,$password,$db);

$username=mysqli_real_escape_string($con,$_POST['username']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

 $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

$email_query="select * from signup where email='$email'";
$email_check=mysqli_query($con,$email_query);
$email_result=mysqli_num_rows($email_check);

$phone_query="select * from signup where phone='$phone'";
$phone_check=mysqli_query($con,$phone_query);
$phone_result=mysqli_num_rows($phone_check);


if($email_result>0)
{
?>
<script>

alert("email address already exist");
</script>
<?php
  
}
else if($phone_result>0)
{
    ?>
<script>

alert("phone number already exist");
</script>
<?php
    
}
else if($password===$cpassword)
   {
    
    $q="insert into accounts (username,email,phone,password,cpassword)values('$username','$email','$phone','$pass','$cpass')";
$status=mysqli_query($con,$q);

if($status==1)
{
    ?>
    <script>
        alert("Account Created successfull");
        
    
    </script>
     <?php
    header('location:login.php');
}

else
{
    ?>
    <script>
        alert("Account Creation failed");
        

    </script>
     <?php
}



}

else
    
{
    
 ?>
    <script>
        alert("Password dosn't mached");
        conpass.focus();

    </script>
<?php   
    
}

  
}


?>