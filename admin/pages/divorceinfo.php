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
        <nav class="navbar navbar-default navbar-static-top" style="background-color: black;" role="navigation" style="margin-bottom: 0">
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

           
               
            
            <!-- /.navbar-top-links -->

            <div class="sidebar"  role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        </br>
                         <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="addKazi.php"><i class="fa fa-table fa-fw"></i> Add Kazi </a>
                        </li>
                        <li>
                            <a href="kazitable.php"><i class="fa fa-table fa-fw"></i> kazi List </a>
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
                    <h1 class="page-header">Divorce Application Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
<table class="table table-hover table-bordered">
  
  

  <?php

include "connection.php";

if(isset($_GET['divorce_id'])){
  $divorce_id = $_GET['divorce_id'];
  /*$_SESSION["bikeid"]=$product_id;*/
  /*echo $product_id;*/
  
  $get_devorce = "select * from divorce where id='$divorce_id'";
  
  $run = mysqli_query($connection, $get_devorce);
  
    
  while($row=mysqli_fetch_array($run)){
  
  $id=$row['id'];
  $mrid=$row['mrid'];
  $bridegroom_name=$row['bridegroom_name'];
  $bride_name=$row['bride_name'];
  $mdate=$row['mdate'];
 

  
  echo "
  <tbody>
    <tr>
      <th>ID: </th>
      <td>$id</td>
     
      
    </tr>
    <tr>
      <th>Marrage Reg. No: </th>
      <td> $mrid</td>
      
    </tr>
    <tr>
      <th>Bridegroom Name</th>
      
      <td>$bridegroom_name</td>
    </tr>
    <tr>
      <th>Bride Name</th>
      
      <td>$bride_name</td>
    </tr>

<tr>
      <th>Marrage Date</th>
      
      <td>$mdate</td>
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
                   

     <?php
   include 'footer.php';
   ?>
    <script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});

</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>

</html>