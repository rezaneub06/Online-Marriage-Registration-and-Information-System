<?php session_start();
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>online marriage registration </title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		
		

	 
	</script>
<!--// Meta tag Keywords -->

<!-- css files -->
<!-- "WebContent/register.jsp" -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.css">
<!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!--web font-->

<!--//web font-->
<style type="text/css">
body {
	background-image: url("images/banner.jpg");
}

.valid {
	border: 1px solid green
}

.error {
	color: red
}

#register-popup {
	overflow-y: scroll;
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
.navbar-default .navbar-nav .dropdown-menu li {
  border: none;
  list-style: none;
}
.navbar-default .navbar-nav .dropdown-menu li.dropdown-header {
  padding-left: 0;
  padding-right: 0;
  text-transform: uppercase;
  font-weight: 300;
}.navbar-default .navbar-nav .dropdown-menu li a:not(.btn) {
  margin: 0;
  padding: 8px;
  height: auto;
  line-height: 1.2;
  font-size: 13.5px;
  border: none;
  text-transform: none;
  position: relative;
  color: #343331;
  display: block;
}
.navbar-default .navbar-nav .dropdown-menu li a:not(.btn):before {
  content: "\f111";
  font-family: 'FontAwesome';
  font-size: 5px;
  color: #ff5821;
  margin: 0 6px 0 0;
  padding: 0;
  vertical-align: middle;
}
.navbar-default .navbar-nav .dropdown-menu li a:not(.btn):hover {
  color: #ffffff;
  background: #343331;
  text-decoration: none;
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
    color: #343331;
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
</style>

</head>

<body>
<?php
		require "mainHeader.php";
		require "mainBody.php";
		require "mainFooter.php";
	?>
	<!-- popup for register -->
	<div id="register-popup" class="popup-effect" style="top: -120px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase">Register</h5>
			<div class="lregister-form">
				<form enctype="multipart/form-data" action="../database/register.php" method="post"
					class="px-3 pt-3 pb-0" name="register" id="form" >
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Matrimony
							Profile for </label> <select name="profile" id="profile"
							class="form-control">
							<option value="">-select-</option>
							<option value="myself">Myself</option>
							<option value="son">Son</option>
							<option value="daughter">Daughter</option>
							<option value="brother">Brother</option>
							<option value="sister">Sister</option>
							<option value="relative">Relative</option>
							<option value="friend">Friend</option>
						</select> <span id="profilvalidate" style="color: red;"></span>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label"> Name</label> <input
							type="text" class="form-control" placeholder="" name="name"
							id="recipient-name3"> 
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label"> Choose Profile</label> <input
							type="file" class="form-control" placeholder="" name="img"
							id="recipient-name100">  
							<div class="result" style="color:red;"><?php
								if(isset($_SESSION["msg"]))
								{
									echo $_SESSION["msg"];
									unset($_SESSION["msg"]);
								}
							?></div>
					</div>
					<div class="form-group search-box">
						<label for="recipient-name" class="col-form-label">Email
							id</label> <input type="email" class="form-control" placeholder=""
							name="email" id="recipient-name4"> 
							<div class="result" style="color:red;">
							<?php
								if(isset($_SESSION["msge"]))
								{
									echo $_SESSION["msge"];
									unset($_SESSION["msge"]);
								}
							?>
							</div>
					</div>
					<div class="form-group">
						<label for="recipient-name7" class="col-form-label">Gender
							</label>
							<select name="gender" class="form-control" placeholder=""
							name="gender" id="recipient-name8" required="">
								<option value="">-Select-</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
							
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder=""
							name="password" id="recipient-name6"> <span
							id="passwordvalidate" style="color: red;"></span>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Conform
							Password</label> <input type="password" class="form-control"
							placeholder="" name="conformpassword" id="recipient-name0">
						<span id="conpasswordvalidate" style="color: green;"></span>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Next">
					</div>
				</form>
			</div>
			<a class="close" href="../">&times;</a>
		</div>
	</div>
	<!-- popup for register -->
	<script src="jquery/jquery-2.1.3.min.js"></script>
	<script
		src="jquery/jquery.validate.min.js"></script>
	<script
		src="jquery/additional-methods.min.js"></script>
	 <script type="text/javascript">
	   $(document).ready(function(){
		   $.validator.addMethod('strongPassword', function(value, element) {
			    return this.optional(element) 
			      || value.length >= 6
			      && /\d/.test(value)
			      && /[a-z]/i.test(value);
			  }, 'Your password must be at least 6 characters long and contain at least one number and one char\'.')

		  $("#form") .validate({
			  rules:
				  {
				  profile:
					  {
					      required:true
					  },
				      name:
				    	  {
				    	          required:true,
				    	          minlength:4       
				    	  },
				    	  email:
				    		  {
				    		        required:true,
				    		        email:true,
									maxlength:50,
				    		  },
							  img:
				    		  {
				    		        required:true,
							  },
				    		  date:
				    			  {
				    			      required:true
				    			  },
				    		  password:
				    			  {
				    			         required:true,
				    			         strongPassword: true,
				    			         minlength:8
				    			  },
				    			  conformpassword:
				    				  {
				    				      required:true,
				    				      equalTo:"#recipient-name6"
				    				  }
				    			 
				  },
				  messages:
					  {
					  email: {
					        required: 'Please enter an email address.',
					        email: 'Please enter a <em>valid</em> email address.',

					      },
						  img: {
					        required: 'Please upload valid image.',
					      },
					  }
		  });
	   });
	</script>
</body>
</html>