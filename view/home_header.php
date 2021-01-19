<?php 
    if($_SESSION["email"]==null)
    {
        header("location: login#login-popup");
    }

?>
<!DOCTYPE HTML>
<html>
<head>
<title>online marriage registration </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link href="css/home.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="bootstrap/bootstrap.css">
<link href="bootstrap/bootstrap.min.css">
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});

</script>
<style>

.buildings{
  background-image: url(../img/backgrounds/buildings.png);
}
img {
  border-radius: 50%;
  width: 30px;
  
}
.navbar-default .navbar-collapse li > a:not(.btn):hover .dropdown-menu {
  display: block;
}
.navbar-default .navbar-collapse li.icon-link a {
  text-align: left;
  font-size: 20px;
  color: #343331;
  padding-top: 20px;
  padding-bottom: 20px;
}
.navbar-default .navbar-collapse li.dropdown a {
  text-align: left;
  font-size: 20px;
  color: #343331;
  padding-top: 20px;
  padding-bottom: 20px;
}
.navbar-default .navbar-collapse li.dropdown a {
  text-align: left;
  font-size: 20px;
  color: #343331;
  padding-top: 20px;
  padding-bottom: 20px;
}
.navbar-default {
  background-image: -webkit-linear-gradient(top, #f3f3f3 0%, #e6e6e6 100%);
  background-image: -o-linear-gradient(top, #f3f3f3 0%, #e6e6e6 100%);
  background-image: linear-gradient(to bottom, #f3f3f3 0%, #e6e6e6 100%);
  background-color: #eeeeee;
  background-image: -moz-linear-gradient(top, #f3f3f3, #e6e6e6);
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f3f3f3), to(#e6e6e6));
  background-image: -webkit-linear-gradient(top, #f3f3f3, #e6e6e6);
  background-image: -o-linear-gradient(top, #f3f3f3, #e6e6e6);
  background-image: linear-gradient(to bottom, #f3f3f3, #e6e6e6);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff3f3f3', endColorstr='#ffe6e6e6', GradientType=0);
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 10px rgba(0, 0, 0, 0.1);
}
.navbar-default .navbar-collapse {
  padding-left: 0;
  padding-right: 0;
  clear: both;
}
@media (min-width: 768px) {
  .navbar-default .navbar-collapse {
    clear: none;
  }
}
.navbar-default .navbar-nav {
  margin: 0;
  padding: 0;
}
.navbar-default .navbar-nav li {
  margin: 0;
  border-bottom: 1px solid #D3D3D3;
}
@media (min-width: 768px) {
  .navbar-default .navbar-nav li {
    border-right: 1px solid #D3D3D3;
    border-bottom: none;
  }
}
.navbar-default .navbar-nav li > a:not(.btn) {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  padding: 20px 15px;
  font-size: 14.5px;
  font-weight: 600;
  text-transform: uppercase;
  color: #343331;
}
.navbar-default .navbar-nav li.open a.dropdown-toggle {
  border-bottom-color: transparent;
}
.navbar-default .navbar-nav .dropdown-menu {
  margin-top: 0px;
  padding: 15px;
  left: auto;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  border-top: 3px solid #ff5821;
  background: #f3f3f3;
  min-width: 200px;
}

.navbar-default .navbar-nav .dropdown-menu-right {
  right: 0;
  left: auto;
}
.navbar-default .navbar-nav .dropdown-mm {
  position: static;
}
.navbar-default .navbar-nav .dropdown-menu.dropdown-menu-mm {
  list-style: none;
}
@media (min-width: 768px) {
  .navbar-default .navbar-nav .dropdown-menu.dropdown-menu-mm {
    min-width: 480px;
    max-width: 620px;
    margin-left: auto;
    margin-right: auto;
  }
}
.navbar-default .dropdown li > a:not(.btn) {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    padding: 20px 15px;
    font-size: 14.5px;
    font-weight: 600;
    text-transform: uppercase;
    color:#ff5821;
}
body, html {
    font-family: "Roboto", sans-serif;
}

@media screen and (min-width: 1200px){
  .size{
   height: 60px;
  }
}

.block.block-bg-img {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  transition: 0s linear;
  transition-property: background-position;
}
@media screen and (min-width: 1200px) {
  .size{
    height: 60px;
  }
}
.header {
  padding: 20px 0 30px 0;
  position: relative;
  color: white;
}
.header a:not(.btn) {
  color: white;
}
.cl{
  color: #FF5821;
}
.text {
    margin-top: 40px;
    margin-left: 120px;
}

.block {
  padding: 4em 0;
}
.block:before,
.block:after {
  content: " ";
  display: table;
}
.block:after {
  clear: both;
}

.block.block-bg-grey-dark,
.block.block-bg-grey-dark:after {
  background-color: #212324;
  color: white;
}
.block.block-bg-img {
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  transition: 0s linear;
  transition-property: background-position;
}

@media screen and (min-width: 1200px) {
  .size{
    height: 60px;
  }
}


* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup{
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container{
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn{
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.social-media a {
  text-decoration: none;
  color: #ff5821;
  display: inline-block;
  line-height: 1;
  background: #ffffff;
  padding: 3px;
  text-align: center;
  -webkit-box-shadow: 0 1px 2px rgba(52, 51, 49, 0.2);
  -moz-box-shadow: 0 1px 2px rgba(52, 51, 49, 0.2);
  box-shadow: 0 1px 2px rgba(52, 51, 49, 0.2);
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
}
.social-media a i {
  border: 2px solid #ff5821;
  font-size: 14px;
  padding: 0;
  margin: 0;
  line-height: 24px;
  width: 24px;
  height: 24px;
  text-align: center;
  display: block;
}

.social-media a:hover {
  text-decoration: none;
  background: #ff5821;
  color: #ffffff;
}
.social-media a:hover i {
  border-color: #ffffff;
}
.social-media.social-media-stacked a {
  background: transparent !important;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  display: block;
  color: #ff5821;
  text-align: left;
  margin-bottom: 0.5em;
  font-weight: bold;
}
.social-media.social-media-stacked a:hover {
  color: white !important;
}
.social-media.social-media-stacked a i {
  display: inline-block;
  margin-right: 10px;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  color: white;
  border-color: white;
  border-width: 3px;
  line-height: 23px;
  width: 26px;
  height: 26px;
}
#footer h1,
#footer h2,
#footer h3,
#footer h4,
#footer h5,
#footer h6,
#footer strong {
  color: #ffffff;
}
#footer a:not(.btn) {
  color: #ffffff;
}
#footer .subfooter {
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  margin-top: 1em;
  padding-top: 1em;
}
.navbar .navbar-collapse .nav li a:hover{
  background-color: #ffffff;
  color: #ff5821;
}
</style>

</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 

		   <!-- Collect the nav links, forms, and other content for toggling -->
			<?php
					require "../database/mainDatabase.php";
					$conn=DataBaseConnection::getMysqlConnection();
					$sql="select count(gender) as c from users where gender!=:gender";
					$pst=$conn->prepare($sql);
					$pst->bindParam("gender",$_SESSION["gender"]);
					$pst->execute();
					$count="";
					while($row=$pst->fetch())
					{
						$GLOBALS["count"]=$row["c"];
					}
			?>
		    
		    
					<?php
						
						$sql="select profile from users where emailid=:email";
						$pst=$conn->prepare($sql);
						$pst->bindParam(":email",$_SESSION["email"]);
						$img="";
						if($result=$pst->execute())
						{
							function image()
							{
								if($row=$GLOBALS["pst"]->fetch())
								{
									$GLOBALS['img']=$row["profile"];
								}
							}
						}
						image();
						
					?>
		           
<!-- ============================  Navigation End ============================ -->
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

    <!-- ======== @Region: #navigation ======== -->
   <div class="wrapper">
      
      <!--Header & navbar-branding region-->
      <div class="header">
        <div class="header-inner container">
         
    </section>
     
            <div class="col-md-5 clearfix">
             
              <a class="navbar-brand" href="index.php" title="Home"> 
                   <img src="img/bdlogo.png" alt="BD Govt" style="height: 75px;width: 75px;">
                  
              </a>
              <div class="navbar-Brand col-md clearfix ml-5">
                  <h3 class="text-light text"> Online Marriage Registration and information system</h3>
              </div>
              </div>
              
            
            <!--header rightside-->
            
          
        </div>
      </div>
        </div>
      <div class="container" style="margin-bottom:0px;height: 69px;">
        <div class="navbar navbar-default" >
          <!--mobile collapse menu button-->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!--social media icons-->
          
          <!--everything within this div is collapsed on mobile-->
          <div class="navbar-collapse collapse" id="navbard">
            <ul class="nav navbar-nav" id="main-menu">
              <li class="icon-link">
                <a href="../index.php"><i class="fa fa-home"></i></a>
              </li>
              <li><a href="#">Contacts</a></li>
                    <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Public Info<b class="caret"></b></a>
                <!-- Dropdown Menu -->
                <ul class="dropdown-menu">
                  <li class="dropdown-header">General Info</li>
                  <li><a href="instruction.php" tabindex="-1" class="menu-item">Instruction</a></li>
          <li><a href="requirement.php" tabindex="-1" class="menu-item">Marriage Requirement</a></li>
         <li><a href="marriagefee.php" tabindex="-1" class="menu-item">Marriage Fee</a></li>
                  <li><a href="regadd.php" tabindex="-1" class="menu-item">Registration Address</a></li>
          <li><a href="about.php" tabindex="-1" class="menu-item">Contract Us</a></li>
                  
                  
                </ul>
              </li>
            <li class="dropdown">
        <a href="marriagecouple.php">Marriage Couple</a>    
      </li>
        
      <li><a href="home.php">Find bridegroom</a>  
      </li>
              
                
                  <li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="matches">Matches(<?php echo $count?>)</a></li>
		              </ul>
		            </li>
                  
                  
               
             
       
              <li  class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $img;?>" alt="Profile"><span class="caret"></span></a>
		            	<ul class="dropdown-menu" role="menu">
		            		<li><a href="profile">Profile</a></li>  
			                <li><a href="varifypassword">Change Password</a></li>
			                <li><a href="logout">LogOut</a></li>
		            	</ul>
		            </li>
               <li class="dropdown">
        <form class="form-inline md-form" style="margin-top:12px;">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn aqua-gradient btn-rounded btn-md " type="submit">Search</button>
    </form>
                </li>
            </ul>
          </div>
          <!--/.navbar-collapse -->
        </div>
      </div>
  </div>

    