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

<!-- ======== body ======== -->

<body class="fullscreen-centered page-register">
  <!--Change the background class to alter background image, options are: benches, boots, buildings, city, metro -->
  <div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <!-- ======== @Region: #content ======== -->
    <div id="content">
      <div class="header">
        <div class="header-inner">
          <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
          <a class="navbar-brand center-block" href="index.html" title="Home">
            <h4><strong>Qazi Register</strong> </h4>

          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">
                Sign Up
              </h3>
            </div>
            <div class="panel-body">
              <form accept-charset="UTF-8" role="form" method="POST">
                <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Name" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                      <input type="text" name="RegID" class="form-control" placeholder="Reg. ID" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-lock"></i></span>
                      <input type="password" name="re-password" class="form-control" placeholder="Re-Password">
                    </div>
                  </div>
                  <div class="form-group">



                    <input class="btn btn-lg btn-primary btn-block" name="button" type="submit" value="Sign Me Up">
                  </fieldset>


                  <?php 

                  include "connection.php";

                  if(isset($_POST['button'])){
                    $name=$_POST['name'];
                    $email=$_POST['email'];
                    $RegID=$_POST['RegID'];
                    $password=$_POST['password'];
                    $Re_Password=$_POST['re-password'];
                    $Hashing=hash('sha256', $_POST['password']);


                    $query=("select * from qazi where RegID='$RegID' and email ='$email' ");
                    $result=mysqli_query($connection,$query);
                    $row = mysqli_fetch_array($result);
                    if($row['RegID']==$RegID && $row['email']==$email){


                      if($password<>$Re_Password ){

                        echo "<script>window.alert('Password Mismatch')</script>";


                      }
                      else{
                        $query="insert into qazilist
                        (name,RegID,email,password)
                        values('$name','$RegID','$email','$Hashing');";
                        $result = mysqli_query($connection,$query);
                        if($result){
                          echo "<script>window.alert('Your Account is ready please login')</script>";
                           echo '<script> location.replace("login.php"); </script>';
                        }
                        else{

                          echo "<script>window.alert('Problem')</script>";

                        }
                      }





                    }
                    else{


                     echo "<script>window.alert('you are not authorized user')</script>";

                   }









                 }

                 ?>



               </form>
               <p class="m-b-0 m-t">Already signed up? <a href="login.php">Login here</a>.</p>
               <div class="credits">

                Designed by <a href="#">Kutub uddin & sayem</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
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
