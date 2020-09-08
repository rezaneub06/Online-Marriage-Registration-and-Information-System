
<?php
include 'connection.php';
?>

<footer id="footer" class="block block-bg-grey-dark" style=" 
    background-image: url(img/bg_footer-map.png);
    background-position: 0px -60.925px;">
    <div class="container">

      <div class="row" id="contact">

        <div class="col-md-3 text-light">
          <address>
              <strong>BD Mariage Govt</strong>
              <br>
              <i class="fa fa-map-pin fa-fw text-primary"></i> Lama bazar,sylhet
              <br>
              <i class="fa fa-phone fa-fw text-primary"></i> 01765744899
              <br>
              <i class="fa fa-envelope-o fa-fw text-primary"></i> info@gmail.com
              <br>
            </address>
        </div>

        <div class="col-sm-5">
          <div>
          <h4 class="text-uppercase text-light">
              Contact Us
            </h4>
            <form accept-charset="UTF-8" role="form" method="POST">
                <fieldset>
                  <div class="form-group">
                    <div class="input-group input-group-lg text-primary bg-light ">
                      <span class="input-group-addon text-primary"><i class="fa fa-fw fa-user"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Name" required="1">
                    </div>
                  </div>
                  <div class="form-group text-primary">
                    <div class="input-group input-group-lg bg-light">
                      <span class="input-group-addon text-primary"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="input-group input-group-lg bg-light">
                      <span class="input-group-addon text-primary"><i class="fa fa-fw fa-envelope"></i></span>
                      <input type="text" name="subject" class="form-control" placeholder="Subject" required="1">
                    </div>
                  </div>
                  
                  <div class="form-group">
                <textarea class="form-control" name="message"  placeholder="Message" required="1"></textarea>
                
                </div>
              
                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="button" value="Sent">
                </fieldset>
              </form>

 
        <div class="col-md- float-right mt-2">
          <h5 class="text-uppercase text-light ">
              Follow Us On:
            </h5>
          <!--social media icons-->
          <div class="social-media social-media-stacked">
            <!-- replace with company social media details-->
            <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
            <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
            <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
            <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
          </div>
        </div>
      </div>

      </div>
      </div>

      <div class="row subfooter">
        <!-- replace with company copyright details-->
        <div class="col-md-7">
          <p class="text-light">Copyright © bangladesh govt</p>
          <div class="text-light">
            
            Designed by <a href="https://www.facebook.com/skwahabreza">Kutub uddin & Sayem</a>
          </div>
        </div>
        <div class="col-md-5 float-right">
          <ul class="list-group list-group-horizontal ml-5">
            <li class="pl-3"><a href="#">Terms</a></li>
            <li class="pl-3"><a href="#">Privacy</a></li>
            <li class="pl-3"><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>

      <a href="#top" class="scrolltop">Top</a>

    
  </div>
</div>
  </footer>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  
</body>

</html>