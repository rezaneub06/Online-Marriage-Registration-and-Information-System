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
        <nav class="navbar navbar-default" role="navigation" id="navi" style="margin-bottom: 0">
            <div class="navbar-header" style="float: right;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: green;" href="index.php">kazi 
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

            <div class=" sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
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
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class=" col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                      
                                    <?php
                                     include "connection.php";
                                     $d26=$_SESSION["Qid"] ;
                                     $query=("SELECT COUNT(*) as total FROM marriagelist where d26='$d26';");
                                     $result=mysqli_query($connection,$query);
                                     $row = mysqli_fetch_array($result);
                                     echo $row['total'];
                                     ?> 


                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total Marrage Registration</span>
                                
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-list fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">



                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Total divorce</span>
                                
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                
                
            <!-- /.row -->
            
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
         
            <!-- /.row -->
       </div>
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->

    <!-- jQuery -->
   <?php
   include 'footer.php';
   ?>

</body>

</html>
