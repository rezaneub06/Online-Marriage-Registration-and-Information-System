<?php  
   session_start();
   $d26=$_SESSION["Qid"] ;
   
   
  if($_SESSION["Qid"]){

  }
  else{
    echo '<script> location.replace("../../login.php"); </script>';
  }
?>
<?php
include 'header.php';
?>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="float: right;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: green;" href="qazi/index.php">Kazi
                                     <?php
                                     include "connection.php";
                                     $qid=$_SESSION["Qid"] ;
                                     $query=("select * from qazilist where RegID ='$qid'");
                                     $result=mysqli_query($connection,$query);
                                     $row = mysqli_fetch_array($result);
                                     echo $row['name'];
                                     ?>

                </a>
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
                            <a href="marrageRegistration.php"><i class="fa fa-table fa-fw"></i> Marriage Registration </a>
                        </li>
                        <li>
                            <a href="Registrationlist.php"><i class="fa fa-table fa-fw"></i> Registration List </a>
                        </li>
                        <li>
                            <a href="divorceinfo.php"><i class="fa fa-table fa-fw"></i> Divorce </a>
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
                    <h1 class="page-header">Registration Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success"></h3>
        <hr/>

       

<table class="table table-hover table-bordered">
  <?php

include "connection.php";

if(isset($_GET['marrage_id'])){
  $registration_id = $_GET['marrage_id'];
  /*$_SESSION["bikeid"]=$product_id;*/
  /*echo $product_id;*/
  
  $get_marrageinfo = "select * from marriagelist where id='$registration_id'";
  
  $run_marrageinfo = mysqli_query($connection, $get_marrageinfo);
  
    
  while($row=mysqli_fetch_array($run_marrageinfo)){
  
  $registration_id=$row['id'];
  $registration_sname=$row['GroomName'];
  $registration_dname=$row['nameB'];

  $registration_date=$row['date'];
  $registration_RegNo=$row['RegNo'];
  $registration_ages=$row['ageBgroom'];
  $registration_aged=$row['ageBi'];
  $registration_dower=$row['13'];
 
  

  
  echo "


 
  
  <tbody>
    <tr>
      <th>Marriage Registration Number </th>
      <td>$registration_RegNo</td>
     
      
    </tr>
    <tr>
      <th>Name of the groom </th>
      <td>$registration_sname</td>
     
      
    </tr>
    <tr>
      <th>The name of the bride </th>
      <td>$registration_dname</td>
     
      
    </tr>
    <tr>
      <th>Marrage Date</th>
      <td> $registration_date</td>
      
    </tr>
    <tr>
      <th>Age of Bridegroom</th>
      
      <td>$registration_ages</td>
    </tr>
    <tr>
      <th>Age of the Bride</th>
      
      <td>$registration_aged</td>
    </tr>
    
  </tbody>

  ";
    
  }
  }
  


?>

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
