<?php session_start();
    if($_SESSION["email"]==null)
    {
        header("location: login#login-popup");
    }

?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>online marriage registration</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Wedding Organizer web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	
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
	</style>
</head>

<body>
<?php
		require "mainHeader.php";
		require "mainBody.php";
		require "mainFooter.php";
	?>
	<!-- popup for register -->
	<div id="register-popup" class="popup-effect"style="top: -120px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase">Register</h5>
			<div class="lregister-form">
				<form action="../database/register2.php" method="post" class="px-3 pt-3 pb-0" id="form">
				<div class="form-group">
						<label for="recipient-name" class="col-form-label">Date of
							birth </label> <input type="date" class="form-control"
							placeholder="DD-MM-YYYY" name="date" id="recipient-name5">
						<span id="datevalidate" style="color: red;"></span>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Mobile No
							</label> <input type="text" class="form-control" placeholder=""
							name="mobile" id="recipient-name7">
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Religion
							</label>
							<select class="form-control" id="recipient-name10" name="religion">
								<option value="" hidden="hidden"> Select Religion </option>
								
								<option value="muslim">Muslim - Shia</option>
								<option value="Muslim - Sunni">Muslim - Sunni</option>
								<option value="Muslim - Others">Muslim - Others</option>
								
							</select>
					</div>
					
					<div class="form-group">
						<label for="recipient-name1" class="col-form-label">Country living in</label>
						<input type="text" class="form-control" placeholder="Country"
							name="country" id="recipient-name150">
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control"value="Next">
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
	<script type="text/javascript" src="js/registerValidate.js"></script> -->
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
					gender:
					  {
					      required:true,
					  },
				      mobile:
				    	  {
							  required:true,
				    	       minlength:10,  
								maxlength:10   
				    	  },
				    	  religion:
				    		  {
				    		        required:true,
				    		  },
							  mothertongue:
				    		  {
				    		        required:true,
				    		  },
				    		  country:
				    			  {
				    			      required:true,
				    			  },
				  },
				  
		  });
	   });
	</script>
</body>
</html>