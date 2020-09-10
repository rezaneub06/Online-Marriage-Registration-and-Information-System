<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>BD Marriage Site</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- header start -->
   <div>

    <div id="background-wrapper" class="buildings">

          <div class="header">
            <div class="container">
                <div class="row">
              <div class="row">
                <div class="col-12 col-sm-2" >
                  <!--navbar-branding/logo - hidden image tag & site name so things-->
                 <a  class="pl-3" href="index.php" title="Home"> 
                      <span> <img src="img/bdlogo.png" alt="BD Govt"></span>

                  </a>
                 </div>
                </div>
                
                  <div class="col pt-3 pr-3 col-sm-6 col-md-6">
                    <h4>Online Marriage Registration</h4>
                 
                </div>
               
                <!--header rightside-->
                
                <div class="col-sm-4 col-md-4  pt-1 float-right">
                  <!--user menu-->

                  <ul class="list-inline user-menu d-inline">
                    <div class="col">
                    <li class="user-register"><i class="fa fa-edit text-primary "></i> <a href="register.php" class="text-uppercase">Register</a></li>
                     </div>
                    <div class="col">
                    <li class="user-login"><i class="fa fa-sign-in text-primary"></i> <a href="login.php" class="text-uppercase">Login</a></li>
                    </div>
                  </ul>
                 </div>
                   
                
              </div>
            </div>
          </div>
          <!--navbar-->
          <div class="container mb-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="icon-link pt-2 bg-light">
                    <a href="index.php"><i class="fa fa-home"></i></a>
           </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Public info
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-header">General Info</a>
              <a class="dropdown-item" href="instruction.php">Instruction</a>
              <a class="dropdown-item" href="requirement.php">Marriage Requirement</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="marriagefee.php">Marriage Fee</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="regadd.php">Registration Address</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="about.php">Contract Us</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="marriagecouple.php">Marriage Couple</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="dminlogin.php">kazi</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="adminlogin.php">Admin</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    </div>
    </div>
    </div>            



<footer style="background-image:url(img/bg_footer-map.png);">
 <div class="container">
 <div class="text-uppercase mt-2">
     <h4>information
     </h4>
     </div>
    <form>
      <fieldset>
          <div class="col-md-6">
         
                  <div class="form-group">
                     <div class="input-group input-group-lg">
                      <span class="input-group-addon bg-secondary"><i class="fa fa-fw fa-envelope pt-3"></i></span>
                      <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon bg-secondary"><i class="fa fa-address-card pt-3"></i></span>
                      <input type="text" name="RegID" class="form-control" placeholder="Marriage Reg. ID" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon bg-secondary"><i class="fa fa-fw fa-lock pt-3"></i></span>
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon bg-secondary"><i class="fa fa-fw fa-lock pt-3"></i></span>
                      <input type="password" name="re-password" class="form-control" placeholder="Re-Password">
                    </div>
                  </div>
                  <div class="form-group">



                    <input class="btn btn-lg btn-primary btn-block" name="button" type="submit" value="Sign Me Up">
                  
          </div>
              </div>

        </fieldset>
     </form>
     <p class="mb-0 m-t text-light">Already signed up? <a href="coupleLog.php">Login Here</a>.</p>

</div>
<div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p class="text-light">Copyright © BD govt</p>
          <div class="">
            
            <span class="text-light">Designed by</span> <a href="#">Kutub uddin & sayem</a>
          </div>
        </div>
        <div class="col-md-5">
          <ul class="list-inline pull-right list-group list-group-horizontal mr-5">
            <li class="pl-3"><a href="#">Terms</a></li>
            <li class="pl-3"><a href="#">Privacy</a></li>
            <li class="pl-3"><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    

</footer>
 <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  
</body>
</html>
      