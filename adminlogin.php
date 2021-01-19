

<?php session_start();?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>online Marriage registration</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  

  
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

  <link href="#" id="colour-scheme" rel="stylesheet">
<style>
  .fullscreen-centered #content {
  background: transparent;
  position: absolute;
  top: 30%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  width: 80%;
}
</style>>


</head>


<body class="fullscreen-centered">

  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== : #content ======== -->
    <div id="content" style="margin-top:0px;">
      <div class="header">
        <div class="header-inner">
          <a class="navbar-brand center-block" href="index.html" title="Home">
            
             <h3><strong>Admin Login</strong> </h3>
               
            
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
                      <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                      <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                  </div>
                  <div class="checkbox">
                    
                  </div>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="button" value="Login">
                </fieldset>
              </form>
<?php

if(isset($_POST['button'])){
  $user=$_POST['username'];
  $pass=$_POST['password'];

  if($user=='admin'&&$pass=='admin'){
     
    $_SESSION["admin"] = $user;
    
    echo '<script> location.replace("admin/pages/index.php"); </script>';

  }
  else{
    echo "<script>window.alert('Password Mismatch Or You Account is not Created')</script>";
  
    }
}


?>
              
              <div class="credits">
           
            Designed by <a href="#">Kutub uddin & Sayem</a>
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
