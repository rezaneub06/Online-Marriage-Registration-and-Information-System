

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User</title>

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

   
</head>

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
                <a class="navbar-brand" href="index.php">User</a>
            </div>
            <!-- /.navbar-header -->

           
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" style="background-color: black; height: 600px;" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                         <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="Certificate.php"><i class="fa fa-table fa-fw"></i> Marrage Certificate</a>
                        </li>
                        <li>
                            <a href="divorce.php"><i class="fa fa-table fa-fw"></i> Marrage Certificate</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-table fa-fw"></i> Divorce </a>
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
                <div class=col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block"><h4><b> Apply For Divorce</b></h4></button>
                </div>
</form>
    


            
                       
             </div>
               
                </div>
               
         
          
       </div>
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->

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

</body>

</html>


