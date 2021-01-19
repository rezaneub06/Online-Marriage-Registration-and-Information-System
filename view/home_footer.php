<?php 
    if($_SESSION["email"]==null)
    {
        header("location: login#login-popup");
    }

?>
	<footer id="footer" class="block block-bg-grey-dark" style="background-image: url('bg_footer-map.png');" data-stellar-background-ratio="0.4">
    <div class="container">

      <div class="row" id="contact">

        <div class="col-md-3">
          <address>
              <strong>Need TO </strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> lama bazar,sylhet
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> 01765744899
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> info@gmail.com
              <br>
            </address>
        </div>
 <div class="col-md-3" style="float: right;" >
          <h4 class="text-uppercase">
              Follow Us On:
            </h4>
          <!--social media icons-->
          <div class="social-media social-media-stacked" style="">
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
          <p>Copyright ©North East University</p>
          <div class="credits">
            
            Designed by <a href="https://www.facebook.com/km.ibrahim.arif">Kutub uddin & sayem</a>
          </div>
        </div>
        <div class="col-md-5 d-inline">
          <ul class="list-inline pull-right">
            <li class="d-inline ml-2"><a href="#">Terms</a></li>
            <li class="d-inline ml-2"><a href="#">Privacy</a></li>
            <li class="d-inline ml-2"><a href="#">Contact Us</a></li>
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



</body>

</html>