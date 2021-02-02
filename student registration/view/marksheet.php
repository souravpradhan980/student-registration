<?php
include '../find_teacher_db.php';
$id=$_GET['info'];

$q="select * from students where id='$id'";
$query=mysqli_query($con,$q);

$result=mysqli_fetch_array($query);

$marksheet=$result['marksheet'];

?>
<img src="../upload_file/<?php echo "$marksheet"?>" width="100%" height="500px">
<?php



?>