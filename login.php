<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>BD Marriage Site</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="img/icons/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png">
  <link rel="apple-touch-icon-precomposed" href="img/icons/default.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.theme.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
  <link href="#" id="colour-scheme" rel="stylesheet">



</head>


<body class="fullscreen-centered page-login">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ========#content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
          <a class="navbar-brand center-block" href="index.html" title="Home">

           <h3><strong>Qazi Login</strong> </h3>


         </a>
       </div>
     </div>
     <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              Login
            </h3>
          </div>
          <div class="panel-body">
            <form accept-charset="UTF-8" role="form" method="POST">
              <fieldset>
                <div class="form-group">
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                    <input type="text" name="RegID" class="form-control" placeholder="Registration ID">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-lg">
                    <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                </div>
                  
                </div>
                <input class="btn btn-lg btn-primary btn-block" name="button" type="submit" value="Login">
              </fieldset>


              <?php 
              session_start();
              include "connection.php";
              if(isset($_POST['button'])){
                $RegID=$_POST['RegID'];
                $password=hash('sha256', $_POST['password']);
                $query=("select * from qazilist where RegID ='$RegID' and password ='$password' ");
                $result=mysqli_query($connection,$query);
                $row = mysqli_fetch_array($result);
                if($row['RegID']==$RegID && $row['password']==$password && $row['RegID']!=null){
                  $_SESSION["Qid"] = $row['RegID'];
                  $_SESSION["Qemail"] = $row['email'];

                  
                  echo '<script> location.replace("qazi/pages"); </script>';
                }
                else{
                  echo "<script>window.alert('Password Mismatch Or You Account is not Created')</script>";

                }
              }
              ?>









            </form>
            <p class="m-b-0 m-t">Not signed up? <a href="register.php">Sign up here</a>.</p>
            <div class="credits">

              Designed by <a href="#">Kutub uddin &Sayem</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /row -->
  </div>
</div>
<!-- Required JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/stellar/stellar.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="contactform/contactform.js"></script>

<!-- Template Specisifc Custom Javascript File -->
<script src="js/custom.js"></script>

<!--Custom scripts demo background & colour switcher - OPTIONAL -->
<script src="js/color-switcher.js"></script>

<!--Contactform script -->
<script src="contactform/contactform.js"></script>

</body>

</html>
