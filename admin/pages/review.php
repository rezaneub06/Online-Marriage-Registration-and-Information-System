<?php  
   session_start();
   $admin=$_SESSION["admin"] ;
   
   
  if($admin=='admin'){

  }
  else{
    echo '<script> location.replace("../../adminlogin.php"); </script>';
  }
   ?>
<?php
include 'header.php';
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin</a>
            </div>
            <!-- /.navbar-header -->

           
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        </br>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="addQazi.php"><i class="fa fa-table fa-fw"></i> Add Kazi </a>
                        </li>
                        <li>
                            <a href="qazitable.php"><i class="fa fa-table fa-fw"></i> Kazi List </a>
                        </li>
                        <li>
                            <a href="review.php"><i class="fa fa-table fa-fw"></i> Review Registration </a>
                        </li>
                        <li>
                            <a href="reviewUser.php"><i class="fa fa-table fa-fw"></i> Review user </a>
                        </li>
                        <li>
                            <a href="divorceList.php"><i class="fa fa-table fa-fw"></i> Divorce List </a>
                        </li>
                        
                        <li>
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i> LogOut </a>
                        </li>
                        
                      
                       
                    </ul>
                </div>
             
            </div>
         
        </nav>
    <div id="page-wrapper">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Review Registration</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success"></h3>
        <hr/>

        <input type="text" id="myInput"  placeholder="Search for names.."  class="form-control">

<br>
<table class="table table-bordered" >
  <thead class="text-center">
    <tr>
      <th>Reg. No:</th>
     <th>Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
 
 <?php 
include "connection.php";
$query=("select * from marriagelist ");
$result=mysqli_query($connection,$query);
if ($result) {
  while ($row = mysqli_fetch_array($result)) {
$Registration_id=$row['id'];

    echo "
    <tr>
      <td>".$row['RegNo']."</td>
      
      
      
      <td>
                <a href='marriageInfo.php?Registration_id=$Registration_id' class='btn btn-info' title='Qazi Details View'>
                    <span class='glyphicon glyphicon-eye-open'></span>
                </a>
                
                
            </td> 
    </tr>
  ";
  
  }
  
}
else{
  echo "<h6 >NO RECORD FOUND</h6>";
}

?>
      
 


  </tbody>
</table>

    </div>
</div>
            

                </div>






        
                    </div>
                   

    <!-- jQuery -->
    <?php
    include 'footer.php';
    ?>
</body>

</html>
