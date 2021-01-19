
<?php session_start();?> 
   <?php  
   
   $admin=$_SESSION["admin"] ;
   
   
   if($_SESSION["admin"]){


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
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <!-- /.navbar-header -->


            <!-----static sidebar--->

            <div class=" sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="addKazi.php"><i class="fa fa-table fa-fw"></i> Add Kazi </a>
                        </li>
                        <li>
                            <a href="kazitable.php"><i class="fa fa-table fa-fw"></i> Kazi List </a>
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
                                     $query=("SELECT COUNT(*) as total FROM qazilist;");
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
                            <span class="pull-left">Total Kazi</span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-list fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                    include "connection.php";
                                    $query=("SELECT COUNT(*) as total FROM marriagelist;");
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
                            <span class="pull-left">Total Marriage Registration</span>

                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class=" col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-list fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                    include "connection.php";
                                    $query=("SELECT COUNT(*) as total FROM users;");
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
                            <span class="pull-left">Total user</span>

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
                                    <?php
                                    include "connection.php";
                                    $query=("SELECT COUNT(*) as total FROM marriagelist;");
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
