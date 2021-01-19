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
   
<style>
  .col-sm-10 button{
  margin-left: 73px;
margin-bottom: 19px;
}
</style>
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


            <!-- /.dropdown -->

            <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="sidebar" role="navigation">
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
                    <h1 class="page-header">Add Kazi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center text-success"></h3>
                    <hr/>
                    <div class="well">

                        <form method="POST" >
                          <div class="form-group text-center">
                            <label for="exampleInputPassword1"><h4><b>Kazi Name</b> </h4></label>
                            <input type="text" name="RegID" class="form-control" id="exampleInputPassword1" placeholder="Qazi Name" required="">
                        </div>
                          <div class="form-group text-center">
                            <label for="exampleInputPassword1"><h4><b>kazi Registration Number</b> </h4></label>
                            <input type="text" name="RegID" class="form-control" id="exampleInputPassword1" placeholder="Govt Registraion Number" required="">
                        </div>
                        <div class="form-group text-center">
                            <label for="exampleInputEmail1"><h4><b>Kazi Email address</b></h4> </label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email " required="">

                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <button type="submit" name="btn" class="btn btn-success btn-block"><h4><b> Save kazi  Information</b></h4></button>
                            </div>
                        </div>
                    </form>

<?php
include 'connection.php';

if(isset($_POST['btn'])){
  $RegID=$_POST['RegID'];
  $email=$_POST['email'];
  
  

  $date=date("Y/m/d");
  $query="insert into Qazi(RegID,email)
      values('$RegID','$email');";
        $result = mysqli_query($connection,$query);
  if($result){
    echo "<script>window.alert('Data Added')</script>";
    
    }
    else{
           echo "<script>window.alert('Data not Added')</script>";
    }
  }



?>





                </div>
            </div>
        </div>


    </div>







</div>


<?php
   include 'footer.php';
   ?>
</body>

</html>
