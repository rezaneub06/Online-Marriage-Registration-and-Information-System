
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kazi Page</title>

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
                <a class="navbar-brand" href="index.html">Kazi</a>
            </div>
            <!-- /.navbar-header -->

           
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar"  role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
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
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i> LogOut </a>
                        </li>
                        
                      
                       
                    </ul>
                </div>
             
            </div>
         
        </nav>
    <div id="page-wrapper">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header text-warning">Marage Registration Form</h1>
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
    <label for="exampleInputPassword1"><h4><b>01.Name of the Town/Union, Upazila/Thana, and District in which the marriage took place</b></h4> </label>
    <input type="text" class="form-control" name="d1" id="exampleInputPassword1" placeholder="" required="" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>02.Name of the bridegroom </b></h4> </label>
    <input type="text" class="form-control" name="d2" id="exampleInputPassword1" placeholder=""  required="">
  </div>


  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>03.Photo Bridegroom </b></h4> </label>
    <input type="file" class="custom-file-input" name="p1" id="exampleInputPassword1" placeholder=""  required="">

  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>04.Bridegroom  father’s name</b></h4> </label>
    <input type="text" class="form-control" name="f1" id="exampleInputPassword1" placeholder=""  required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>05.Address of Bridegroom:</b></h4> </label>
    <input type="text" class="form-control" name="a1" id="exampleInputPassword1" placeholder=""  required="">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>06.Age of bridegroom:</b></h4> </label>
    <input type="text" class="form-control" name="d3" id="exampleInputPassword1" placeholder="" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>07.The name of the bride :</b></h4> </label>
    <input type="text" class="form-control" name="d4" id="exampleInputPassword1" placeholder="" required="">
  </div>


  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>08.Photo Bride </b></h4> </label>
    <input type="file" class="custom-file-input" name="p2" id="exampleInputPassword1" placeholder=""  required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>09.Bride  father’s name :</b></h4> </label>
    <input type="text" class="form-control" name="f2" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>10.Address of Bride:</b></h4> </label>
    <input type="text" class="form-control" name="a2" id="exampleInputPassword1" placeholder="" required="">
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>11. Wheather the bride is a maiden, a window or a divorce:</b></h4> </label>
    <input type="text" class="form-control" name="d5" id="exampleInputPassword1" placeholder="" required>
  </div>

<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>12.Age of the bride:</b></h4> </label>
    <input type="text" class="form-control"  name="d6" id="exampleInputPassword1" placeholder="" required>
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>13.Name or the wakil ,if any, appointed of the bride, his father’s name and his residence</b></h4> </label>
    <input type="text" class="form-control" name="d7" id="exampleInputPassword1" placeholder="" required>
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>14.The names of the witness to the appointment of the bride’s Wakil with their father’s names, their residences and their relationship with bride:</b></h4> </label>
    <textarea type="text" class="form-control" name="d8" id="exampleInputPassword1" placeholder="" required></textarea>
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>15. Name of the wakil ,if any, appointed by the bridegroom, his father’s name and his residence :</b></h4> </label>
    <input type="text" class="form-control" name="d9" id="exampleInputPassword1" placeholder="" required>
  </div>



<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>16.The names of the witness to the appointment of the bridgrgroom’s wakil with their father’s names and their residence: </b></h4> </label>
    <textarea type="text" class="form-control" name="d10" id="exampleInputPassword1" placeholder="" required></textarea>
  </div>



<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>17.Names of the witness of the marriage ,their father’s names and their residence:</b></h4> </label>
    <textarea type="text" class="form-control" name="d11" id="exampleInputPassword1" placeholder="" required></textarea>
  </div>



<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>18.Date on which the marriage was contracted:</b></h4> </label>
    <input type="text" class="form-control" name="d12" id="exampleInputPassword1" placeholder="" required>
  </div>



<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>19.Amount of dower:</b></h4> </label>
    <input type="text" class="form-control" name="d13" id="exampleInputPassword1" placeholder="" required>
  </div>

<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>20.How much of the dower is muajjal (prompt) and how much muwajjal (deferred):</b></h4> </label>
    <input type="text" class="form-control" name="d14" id="exampleInputPassword1" placeholder="" required>
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>21.Whether any portion of the dower was paid at the time of marriage if so, How much?</b></h4> </label>
    <input type="text" class="form-control" name="d15" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>22.whether any property was given in lieu the whole or any portion of the dower with specification of the name & it's valuation agreed to between the parties?</b></h4> </label>
    <input type="text" class="form-control" name="d16" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>23.special condition if any:</b></h4> </label>
    <input type="text" class="form-control" name="d17" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>24.Whether the husband has delegated the power of divorce to the wife, if so, under what condition:</b></h4> </label>
    <input type="text" class="form-control" name="d18" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>25.Whether the husband's right of divorce is in any way curtailed?</b></h4> </label>
    <input type="text" class="form-control" name="d19" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>26.Whether any document was drawn up at the time marriage relating to dower, Maintenance etc. if so, contents there of in brief:</b></h4> </label>
    <input type="text" class="form-control" name="d20" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>27.Whether the bridegroom has any existing wife and if so whether he has secured the permission of the arbitration council under the Muslim famiy laws ordinance 1961,to contract another marriage?</b></h4> </label>
    <input type="text" class="form-control" name="d21" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>28.Number and date of the communication conveying to the bridegroom the permission of the arbitration council to contract another marriage:</b></h4> </label>
    <input type="text" class="form-control" name="d22" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>29.Name of the address of the person by whom the marriage was solemnized and his father & mother:</b></h4> </label>
    <input type="text" class="form-control" name="d23" id="exampleInputPassword1" placeholder="" required="">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>30.Date of registration of marriage: </b></h4> </label>
    <input type="text" class="form-control" name="d24" id="exampleInputPassword1" placeholder="" required="">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>31.Registration fees paid::</b></h4> </label>
    <input type="text" class="form-control" name="d25" id="exampleInputPassword1" placeholder="" required="">
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>32.Sign of Kazi </b></h4> </label>
    <input type="file" class="custom-file-input" name="p3" id="exampleInputPassword1" placeholder=""  required="">


  </div>



  <div class="form-group">
                <div class="col-sm-10">
                    <button type="submit" name="btn" class="btn btn-success btn-block"><h4><b> Register  Information</b></h4></button>
                </div>
            </div>
            

          </form>
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
      $(document).ready(function() {
  
  $(window).scroll(function () { 

    console.log($(window).scrollTop());

    if ($(window).scrollTop() > 550) {
      $('#nav_bar').addClass('navbar-fixed-top');
    }

    if ($(window).scrollTop() < 551) {
      $('#nav_bar').removeClass('navbar-fixed-top');
    }
  });
});
    </script>

</body>

</html>
