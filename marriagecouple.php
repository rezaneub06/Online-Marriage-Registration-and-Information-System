<?php
include 'header.php';
?>

 
 

  <!-- ======== #footer ======== -->
  <footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">
      <a href="#top" class="scrolltop">Top</a>
      <div class="row" id="contact">

		<div class="col-md-6"> 
			
					<h4 class="text-uppercase">
							Information
					</h4>
			
			<div class="panel-body">
              <form accept-charset="UTF-8" role="form" method="POST">
                <fieldset>
                 
                  
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                      <input type="text" name="RegID" class="form-control" placeholder="Marriage Reg. ID" required="">
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
                    $email=$_POST['email'];
                    $RegID=$_POST['RegID'];
                    $password=$_POST['password'];
                    $Re_Password=$_POST['re-password'];
                    $Hashing=hash('sha256', $_POST['password']);


                    $query=("select * from marriagelist where RegNo='$RegID'");
                    $result=mysqli_query($connection,$query);
                    $row = mysqli_fetch_array($result);
                    if($row['RegNo']==$RegID && $row['RegNo']!=null){


                      if($password<>$Re_Password ){

                        echo "<script>window.alert('Password Mismatch')</script>";


                      }
                      else{
                        $query="insert into couple
                        (RegID,email,password)
                        values('$RegID','$email','$Hashing');";
                        $result = mysqli_query($connection,$query);
                        if($result){
                          echo "<script>window.alert('Your Account is ready please login')</script>";
                           echo '<script> location.replace("coupleLog.php"); </script>';
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
               <p class="m-b-0 m-t">Already signed up? <a href="coupleLog.php">Login Here</a>.</p>
          </div>
		</div>
        
      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © BD govt</p>
          <div class="credits">
            
            Designed by <a href="#">Kutub Uddin & Sayem</a>
          </div>
        </div>
        <div class="col-md-5">
          <ul class="list-inline pull-right">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

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
