
<!DOCTYPE HTML>
<html>
<head>
	<style type="text/css">
		.valid {
	border: 1px solid green
}

.error {
	color: red
}
#background-wrapper {
  background-color: #000000;
  background-position: left top;
  background-repeat: no-repeat;
  background-attachment: fixed;
  padding-bottom: 0;
 
}
.benches {
  background-image: url(../img/backgrounds/benches.png);
}
.ph2{
font-family: "Roboto", sans-serif;
}
	</style>
<title>Reset Password </title>
<link href="css/forgetpassword.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 

<!--google fonts-->
</head>
<body style="background-color: gray;" class="benches" id="background-wrapper">
<!--element start here-->
<div class="elelment">
	<h2 class="ph2">Reset Password</h2>
	<div class="element-main">
		
		<?php if(isset($_GET["error"]))
			{
				echo "<p style='color:red;'>$_GET[error]</p>";
			}
		?>
		<p>Enter an email to reset the password</p>
		<form action="../database/changepassword" method="post"
					class="px-3 pt-3 pb-0" name="forget" id="form">
			<input type="email" name="email" placeholder="Enter email" style="height: 39px;width: 350px;">
			<input type="submit" value="Reset my Password">
		</form>
	</div>
</div>
<!--element end here-->
<script src="jquery/jquery-2.1.3.min.js"></script>
	<script
		src="jquery/jquery.validate.min.js"></script>
	<script
		src="jquery/additional-methods.min.js"></script>
	<!-- <script type="text/javascript" src="js/registerValidate.js"></script> -->
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
				  
				    	  email:
				    		  {
				    		        required:true,
				    		        email:true,
				    		       
				    		  },
				    		
				  },
				  messages:
					  {
					  email: {
					        required: 'Please enter an email address.',
					        email: 'Please enter a <em>valid</em> email address.',

					      }
					  
					  }
		  });
	   });
	</script>
</body>
</html>