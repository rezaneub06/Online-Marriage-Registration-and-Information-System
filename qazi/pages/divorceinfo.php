<?php  
   session_start();
   $admin=$_SESSION["Qid"] ;
   
   
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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Kazi
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
                            <a href="marrageRegistration.php"><i class="fa fa-table fa-fw"></i> Marrage Registration </a>
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
                    <h1 class="page-header">divorce info</h1>
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
       <th>Date</th>
        <th>Bridegroom's info</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody id="myTable">
 

    <tr>
      <td>RegNo</td>
      <td>Date</td>
      <td>BradegroomInfo</td>
      
      
      <td>
                <a href='marrageinfo.php?marrage_id=$registration_id' class='btn btn-info' title='Registration Details View'>
                    <span class='glyphicon glyphicon-eye-open'></span>
                </a>
                
                
            </td> 
    </tr>
  

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
