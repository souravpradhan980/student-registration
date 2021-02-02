<?php
session_start();

include '../find_teacher_db.php';
$username=$_SESSION['username'];
$q="select * from students";
$query=mysqli_query($con,$q);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registered Students</title>
    <!-- Bootstrap -->
	<link href="../css/bootstrap-4.3.1.css" rel="stylesheet">
     <link rel="stylesheet" id="fontawsome" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link href="../css/style.css" rel="stylesheet">
    
    <style>
        
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
       
    h6
    {
        
          font-size: 22px;
              font-family: Comic Sans MS;
            color: white;
          
        }
    th
        {
            font-size: 1em;
        }
      tbody
        {
           
            height: 200px;
        }
   
        
        
    #s_info
        {
            font-size: 1em;
            font-family: bold;
        }
   
    button
        {
            margin: 5px 0px;
          
        }
    .control_data
        {
            width: 100%;
            height: 100%;
            background-color: blueviolet;
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
   
  <nav class="navbar navbar-expand-xl bg-dark navbar-dark">
                        <i class="fa fa-2x fa-user" style="color:#eee; margin:0px 10px;"></i>
        <p class="navbar-brand logo"><?php echo "<h6 id='username'>$username</h6>";?></p>
                  <!-- Links -->
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="btn btn-primary" href="../logout.php">Log Out</a>
                    </li>

                  </ul>

                </nav>          
               
   </header>
                 
            
            
 <div class="container">           

  <h2>India WebClass</h2>
  <div class="row">
      <div class="col-lg-6 col-12">
      <div class="row">
         
        <button type="button" class="btn btn-primary" onclick="top_student()">Top 10 Marks</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
       </div>
          <div class="row">
        <div class="control_data" id="control">
          
            
        </div>
              </div>
      </div>
      <div class="col-lg-6 col-12">     
    <table class="table table-bordered">
    <thead class="text-center">
      <tr>
        <th>ID</th>
        <th>STUDENT</th>
   <!--
            <th>MARKS</th>
            <th>GENDER</th>
          <th>APPLY FOR CLASS</th>
          <th>SUBJECT</th>
          
          <th>PHOTO</th> 
      -->
          <th>FULL DETAILS</th>
          <th>MARKSHEET</th>
         
      </tr>
    </thead>
    <tbody>
    <?php 
        while($result=mysqli_fetch_array($query))
        {
            ?>
        
                <tr>
                    
                <td><?php echo $result['id'];?></td>
                <td><?php echo $result['student'];?></td>
                <!--
                    <td class="hidden_data"><?php echo $result['gender'];?></td>
                    <td><?php echo $result['apply_class'];?></td>
                    <td><?php echo $result['subject'];?></td>
                    <td><?php echo $result['total_marks'];?></td>
                    <td><img src="../upload_file/<?php echo $result['photo'];?>" width="120px" height="120px"></td>
                        -->
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" 
                        value="<?php echo $result['id']; ?>" onclick="data(this.value)">Details</button>
                    </td>
                    <td><button class="btn btn-primary"  data-toggle="modal" data-target="#myModal" 
                        value="<?php echo $result['id']; ?>" onclick="marksheet(this.value)">Marksheet</button></td>
                    
              </tr>
     <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header 
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>-->
        
        <!-- Modal body -->
        <div class="modal-body" id="s_info">
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
        

            <?php
        }
        
      
      ?>
    </tbody>
  </table>
    </div>
  </div>
</div>

    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="getData.js"></script>
	<script src="../js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/popper.min.js"></script> 
  <script src="../js/bootstrap-4.3.1.js"></script>
</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_table_striped&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Jun 2019 13:30:50 GMT -->
    
</html>
