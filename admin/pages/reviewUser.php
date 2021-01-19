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
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
<style>
  .user
{
    border: 1px solid black;
    padding:10px;
    background:green;
    color:black;
}
    table, th, td  {
  border: 1px solid black;
  text-align:center;
  padding:5px;
    }
td{
    padding:5px;
}
img{
    height:100px;
    width:100px;
}
.user
{
    border: 1px solid black;
    padding:10px;
    background:green;
    color:black;
}
.search{
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}
button {
    height: 42px;
    margin-top: auto;
}
</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default" style="background-color: black;" role="navigation" style="margin-bottom: 0">
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

            <div class="sidebar" style="background-color: black;" role="navigation">
                <div class=" sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        </br>
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
         
        </nav>
    <div id="page-wrapper">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header">Review User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
   <?php
        require"../database/mainDatabase.php";
        $conn=DataBaseConnection::getMysqlConnection();
        $sql="select img from user";
        $pst=$conn->prepare($sql);
        $profile="";
        if($pst->execute())
        {
          while($row=$GLOBALS["pst"]->fetch())
          {
            $GLOBALS["profile"]=$row["img"];
          }
        }
    ?>

        <?php
          $limit = 4;
          $sql1 = "SELECT count(*) FROM users";
          $pst1 = $conn->query($sql1);
          $total_results = $pst1->fetchColumn();
          $total_pages = ceil($total_results/$limit);
  
          if (!isset($_GET['page'])) {
              $page = 1;
          } else{
              $page = $_GET['page'];
          }
          $starting_limit = ($page-1)*$limit;
          $sql="select  PROFILEID,profile,NAME,RELIGION,COUNTRYLIVINGIN,MATRIMONYPROFILEFOR,MOTHERTONGUE,GENDER from users limit $starting_limit,$limit";
          $pst=$conn->query($sql);
          $pst->execute();
          echo "<div>";
            echo "<table style='border:2px solid black;'>";
                 echo "<tr>";
                      echo "<th>PROFILE ID</th>";
                      echo "<th>PROFILE </th>";
                      echo "<th>NAME </th>";
                      echo "<th>GENDER </th>";
                      echo "<th>COUNTRY ID</th>";
                      echo "<th>PROFILE FOR ID</th>";
                      echo "<th>MOTHERTONGUE</th>";
                      echo "<th>DELETE</th>";
                      echo "<th>MESSAGE</th>";
                 echo "</tr>";
          while($row=$pst->fetch())
          { 
            echo "<tr>";
                echo "<td>";
                    echo $row["PROFILEID"];
                echo "</td>";
                echo "<td>";
                    echo "<img src=$row[profile]>";
                echo "</td>";
                echo "<td>";
                    echo $row["NAME"];
                echo "</td>";
                echo "<td>";
                echo $row["GENDER"];
            echo "</td>";
                echo "<td>";
                    echo $row["COUNTRYLIVINGIN"];
                echo "</td>";
                echo "<td>";
                    echo $row["MATRIMONYPROFILEFOR"];
                echo "</td>";
                echo "<td>";
                    echo $row["MOTHERTONGUE"];
                echo "</td>";
                echo "<td>";
                echo "<a href='deleteuser?user=$row[PROFILEID]' class='user'>Delete</a>";
                echo "</td>";
                echo "<td>";
                    echo "<a href='message?user=$row[PROFILEID]#login-popup' class='user'>Message</a>";
                echo "</td>";
            echo "</tr>";
          }
          echo "</table>";
          echo "</div>";
        ?>
        <br>
        <?php  for ($page=1; $page <= $total_pages ; $page++):?>
<a href='<?php echo "?page=$page"; ?>' class="user"><?php  echo $page; ?>
 </a>

<?php endfor; ?>


      </div>
</div>


                
               
            
                       
             </div>
               
                </div>
               






        
                    </div>
                   

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
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
<?php
include 'footer.php';
?>          

</body>

</html>
