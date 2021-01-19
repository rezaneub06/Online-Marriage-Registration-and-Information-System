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

<style>
  .col-sm-10 button{
  margin-left: 73px;
margin-bottom: 19px;
}
</style>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default"role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
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

            <div class="sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                         <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="Certificate.php"><i class="fa fa-table fa-fw"></i> Marrage Certificate</a>
                        </li>
                        
                        <li>
                            <a href="divorce.php"><i class="fa fa-table fa-fw"></i> Divorce </a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i>logOut</a>
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
                    <h1 class="page-header">Divorce Application Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success"></h3>
        <hr/>
        <div class="well">
          
             <form method="POST"  enctype="multipart/form-data">
  
  
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>01.Name of the bridegroom </b></h4></label>
    <input type="text" class="form-control" name="bridegroom_name" id="exampleInputPassword1" placeholder=""  required="">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>02.The name of the bride :</b></h4> </label>
    <input type="text" class="form-control" name="bride_name" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>03.Marrage Date:</b></h4> </label>
    <input type="Date" class="form-control" name="mdate" id="exampleInputPassword1" placeholder=""  required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>04.Marrage Registration ID:</b></h4> </label>
    <input type="text" class="form-control" name="mrid" id="exampleInputPassword1" placeholder=""  required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>05.Couples Address:</b></h4> </label>
    <input type="text" class="form-control" name="caddress" id="exampleInputPassword1" placeholder=""  required="">
  </div>
  <div class="form-group">
                <div class="col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block"><h4><b> Apply For Divorce</b></h4></button>
                </div>
</form>
    


            
                       
             </div>
               
                </div>
               
         
          
       </div>
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->
    <?php
   include 'footer.php';
   ?>
<?php 
include "connection.php";

if(isset($_POST['btn'])){
    $bridegroom_name= $_POST['bridegroom_name'];
    $bride_name= $_POST['bride_name'];
    $mdate= $_POST['mdate'];
    $mrid= $_POST['mrid'];
    $caddress= $_POST['caddress'];

    $sql = "insert into divorce (bridegroom_name, bride_name,mdate,mrid,caddress)
values ('$bridegroom_name', '$bride_name', '$mdate','$mrid','$caddress');";
$result=mysqli_query($connection,$sql);
                        if($result){
                          echo "<script>window.alert('Data added')</script>";

                                   }
                        else{

                          echo "<script>window.alert('Problem')</script>";


                        }

}

               
?>
</body>

</html>


