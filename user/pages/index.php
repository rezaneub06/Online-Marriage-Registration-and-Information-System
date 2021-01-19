 
<?php  
   session_start();
   $Qid=$_SESSION["Cid"] ;
   
   
  if($_SESSION["Cid"]){

  }
  else{
    echo '<script> location.replace("../../coupleLog.php"); </script>';
  }
   ?>
<?php
include 'header.php';
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header hed1">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">User</a>
            </div>
            <!-- /.navbar-header -->

           
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->
            
            <div class="sidebar" role="navigation" >
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                         <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="Certificate.php"><i class="fa fa-table fa-fw"></i> Marrage Certificate</a>
                        </li>
                        <li>
                            <a href="divorce.php"><i class="fa fa-table fa-fw"></i> Application For Divorce</a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i> LogOut</a>
                        </li>
                        
                        
                        
                        
                      
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Couple Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              
    <table class="table table-hover table-bordered table-dark">
  
  <tbody>

  <?php 
include "connection.php";
$RegID=$_SESSION["Cid"] ;
$query=("select * from marriagelist where RegNo ='$RegID'");
$result=mysqli_query($connection,$query);
if ($result) {
  while ($row = mysqli_fetch_array($result)) {


    echo "
    <tr>
      <th> Photo of the bridegroom: </th>
    
      <td><img src='../../qazi/pages/".$row['photoH']."'width='100' height='100'/></td>
     
      
    </tr>
    <tr>
      <th> Photo of the bridegroom: </th>
      <td><img src='../../qazi/pages/".$row['photoW']."'width='100' height='100'/></td>
     
      
    </tr>
    <tr>
      <th> Name of the groom: </th>
      <td>".$row['GroomName']."</td>
     
      
    </tr>
    <tr>
      <th> The name of the bride: </th>
      <td>".$row['nameB']."</td>
     
      
    </tr>
    <tr>
      <th>Date of Marriage:</th>
      <td>".$row['date']."</td>
      
    </tr>
    <tr>
      <th>Marriage Registrar’s Id</th>
      
      <td>".$row['RegNo']."</td>
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
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->

   <?php
   include 'footer.php';
   ?>
</body>

</html>
