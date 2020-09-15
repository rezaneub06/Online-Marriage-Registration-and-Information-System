
<?php
include 'connection.php';
?>

<footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="img/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">

      <div class="row" id="contact">

        <div class="col-md-3">
          <address>
              <strong>BD Mariage Govt</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> lama bazar,sylhet
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> 01765744899
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> info@gmail.com
              <br>
            </address>
        </div>

        <div class="col-md-6">
          <h4 class="text-uppercase">
              Contact Us
            </h4>
            <form accept-charset="UTF-8" role="form" method="POST">
                <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-addon"><i class="fa fa-fw fa-user"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Name" required="1">
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
                      <span class="input-group-addon"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="text" name="subject" class="form-control" placeholder="Subject" required="1">
                    </div>
                  </div>
                  
                  <div class="form-group">
                <textarea class="form-control" name="message"  placeholder="Message" required="1"></textarea>
                
                </div>
                    
                
                  
                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="button" value="Sent">
                </fieldset>
              </form>
        </div>
 <?php
include 'connection.php';

if(isset($_POST['button'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
 
  

  $date=date("Y/m/d");
  $query="insert into question(name,email, subject, message)
      values('$name','$email','$subject','$message');";
        $result = mysqli_query($connection,$query);
  if($result){
    echo "<script>window.alert('Data Added')</script>";
    
    }
    else{
           echo "<script>window.alert('Data not Added')</script>";
    }
  }



?>
        <div class="col-md-3">
          <h4 class="text-uppercase">
              Follow Us On:
            </h4>
          <!--social media icons-->
          <div class="social-media social-media-stacked">
            <!--@todo: replace with company social media details-->
            <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
            <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
          </div>
        </div>

      </div>

      <div class="row subfooter">
        <!--@todo: replace with company copyright details-->
        <div class="col-md-7">
          <p>Copyright © bangladesh govt</p>
          <div class="credits">
            
            Designed by <a href="https://www.facebook.com/km.ibrahim.arif">Kutub uddin & sayem</a>
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

      <a href="#top" class="scrolltop">Top</a>

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

  
  <!--Contactform script -->
  <script src="contactform/contactform.js"></script>
<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbard").style.top = "0";
  } else {
    document.getElementById("navbard").style.top = "-50px";
  }
}
</script>


</body>

</html>