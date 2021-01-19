<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  

</body>
</html>

<?php 
    session_start();

    if($_SESSION['username']==null){
            if($_SESSION['password']==null){
                header("Location: login.php");
            }           
        }
    include("../classes/loginandlogout.php");
    use App\classes\AdminLogin;
    $adm=new AdminLogin();
    if(isset($_GET['logout'])){
        $adm->adminLogout();
    }
  ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mom & Child Healcare</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Page Wrapper --> 

  <div id="wrapper" > 
    <!-- sidebar Start -->
  <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionsidebar">
      <!-- sidebar Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-2">Mom & Child Healthcare</div>
      </a>
        <!-- section divider -->
        <hr class="sidebar-divider my-0">
        <!--  section heading -->
       <div class="sidebar-heading">Main</div>
        <!-- Nav item Deshbord -->
        <li class="nav-item active">
          <a href="index.php" class="nav-link ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
          <!-- section divider -->
            <hr class="sidebar-divider">
        </li>

         <li class="nav-item">
        <a class="nav-link" href="doctor.php">
          <i class="fas fa-user-md"></i>
          <span>Doctors</span>
        </a>
         <!-- section divider -->
            <hr class="sidebar-divider">
      </li>

       <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseutilities" aria-axpanded="true" aria-controls="collapseutilities">
           <i class="fas fa fa-video"></i>
           <span>Calls</span>
         </a>
         <div class="collapse" id="collapseutilities" aria-labelledby="headingutilities" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Calls:</h6>
            <a href="Uitilities-color.php" class="collapse-item"><i class="fas fa-microphone"></i> Voice Call</a>
            <a href="Uitilities-boder.php" class="collapse-item"><i class="fas fa fa-video"></i> Video Call</a>
            <a href="Uitilities-animation.php" class="collapse-item"><i class="fas fa-microphone"></i> Incoming Call</a>
          </div>
         </div>
         <!-- section divider -->
            <hr class="sidebar-divider">
       </li>

       <!--  section heading -->
       <div class="sidebar-heading">Emergencey Services</div>

        <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapsebloodbank" aria-axpanded="true" aria-controls="collapsebloodbank">
          <i class="fas fa-pager"></i>
           <span>Blood Bank Pages</span>
         </a>
         <div class="collapse" id="collapsebloodbank" aria-labelledby="headingbloodbank" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Blood Bank Pages:</h6>
            <a href="bloodrequest.php" class="collapse-item">Blood Request</a>
            <a href="bloodinfo.php" class="collapse-item">Blood Info</a>
          </div>
           
         </div>
       </li>

       <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapseambulance" aria-axpanded="true" aria-controls="collapseambulance">
           <i class="fas fa-ambulance"></i>
           <span>Ambulance Pages</span>
         </a>
         <div class="collapse" id="collapseambulance" aria-labelledby="headingambulance" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Ambulance Pages:</h6>
            <a href="ambulancebook.php" class="collapse-item">Ambulance Book</a>
            <a href="ambulancinfoview.php" class="collapse-item">Ambulance info</a>
          </div>
           
         </div>
         <!-- section divider -->
            <hr class="sidebar-divider">
       </li>

        <!--------------------------------- SITE OPTION PAGE START------------------------------------------->       

       <!--  section heading -->
       <div class="sidebar-heading">Site Option</div>
       <!-- Nav Item - Components collapse Menu --> 
       <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapsesiteoption" aria-axpanded="true" aria-controls="collapsesiteoption">
           <i class="fas fa-fw fa-cog"></i>
           <span>Site Option</span>
         </a>
         <div class="collapse" id="collapsesiteoption" aria-labelledby="headingsiteoption" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Site Option</h6>
            <a href="#" data-toggle="modal" data-target="#exampleModal" class="collapse-item">Title and Slogan</a>
            <a href="#" class="collapse-item"  data-toggle="modal" data-target="#socialModal">Social Media</a>
            <a href="#" class="collapse-item" data-toggle="modal" data-target="#copyrightModal">Copyright Text</a>
          </div>
         </div>
       </li>

                                       <!-- Title & Slogan Modal -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-warning">Update Website Title & Slogan</h4>
                      <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                  <form>
                    <div class="modal-body">
                        <div class="form-group row">
                          <label class="text-center col-lg-3 text-danger">Website Title :</label>
                          <input class="form-control col-lg-7" type="text" placeholder="Enter your website title...">
                        </div>
                       <div class="form-group row">
                          <label class="text-center col-lg-3 text-danger">Website Slogan :</label>
                          <input class="form-control col-lg-7" type="text" placeholder="Enter your website Slogan...">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input class="btn btn-warning" type="submit" name="submit" value="Update">
                    </div>
                  </form>
                </div>
                  </div>
                </div>

                                          <!-- Social Media Modal -->

                <div class="modal fade" id="socialModal" tabindex="-1" role="dialog" aria-labelledby="socialModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-warning">Update Social Media</h4>
                      <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                  <form>
                    <div class="modal-body">
                        <div class="form-group row">
                          <label class="text-center col-lg-3 text-danger">Facebook :</label>
                          <input class="form-control col-lg-7" type="text" placeholder="Facebook link...">
                        </div>
                       <div class="form-group row">
                          <label class="text-center col-lg-3 text-danger">Twitter :</label>
                          <input class="form-control col-lg-7" type="text" placeholder="Twitter link...">
                        </div>
                        <div class="form-group row">
                          <label class="text-center col-lg-3 text-danger">LinkedIn :</label>
                          <input class="form-control col-lg-7" type="text" placeholder="LinkedIn link...">
                        </div>
                        <div class="form-group row">
                          <label class="text-center col-lg-3 text-danger">Whatapp's :</label>
                          <input class="form-control col-lg-7" type="text" placeholder="Whatapp's link...">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input class="btn btn-warning" type="submit" name="submit" value="Update">
                    </div>
                  </form>
                </div>
                  </div>
                </div>


                                            <!--Copyright Modal -->

                <div class="modal fade" id="copyrightModal" tabindex="-1" role="dialog" aria-labelledby="copyrightModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title text-warning">Update Copyright Text</h4>
                      <button class="close" data-dismiss="modal">&times;</button>
                    </div>
                  <form>
                    <div class="modal-body">
                        <div class="form-group row">
                          <label class="text-center col-lg-3 text-danger">Copyright Text :</label>
                          <input class="form-control col-lg-7" type="text" placeholder="Enter Copyright text...">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <button class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input class="btn btn-warning" type="submit" name="submit" value="Update">
                    </div>
                  </form>
                </div>
                  </div>
                </div>





       <!------------------------------------ SITE OPTION PAGE END---------------------------------------> 


                    <!-- Nav Item - Components collapse Menu --> 
      

      

       <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa fa-comments"></i>
          <span>Blogs Comments</span>
        </a>
      </li>

       
       <!-- section divider -->
            <hr class="sidebar-divider">
        <!--  section heading -->    
        <div class="sidebar-heading">Interface</div>
       <!-- Nav Item - Addons collapse Menu --> 

       <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapselogin" aria-axpanded="true" aria-controls="collapselogin">
           <i class="fas fa-sign-in-alt"></i>
           <span>Login Screens</span>
         </a>
         <div class="collapse" id="collapselogin" aria-labelledby="headinglogin" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a href="buttons.php" class="collapse-item">Login Page</a>
            <a href="cards.php" class="collapse-item">Register Page</a>
            <a href="cards.php" class="collapse-item">Forget Password Page</a>
          </div>
           
         </div>
       </li>


       <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapsehospital" aria-axpanded="true" aria-controls="collapsehospital">
            <i class="fas fa-hospital"></i>
           <span>Hospital Pages</span>
         </a>
         <div class="collapse" id="collapsehospital" aria-labelledby="headinghospital" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Hospital Pages:</h6>
            <a href="buttons.php" class="collapse-item">Login Page</a>
            <a href="cards.php" class="collapse-item">Register Page</a>
            <a href="cards.php" class="collapse-item">Forget Password Page</a>
          </div>
           
         </div>
       </li>

      

       <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapsevaccine" aria-axpanded="true" aria-controls="collapsevaccine">
           <i class="fas fa-crutch"></i>
           <span>Vaccine Pages</span>
         </a>
         <div class="collapse" id="collapsevaccine" aria-labelledby="headingvaccine" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Vaccine Pages:</h6>
            <a href="vaccinereminder.php" class="collapse-item">Vaccine Reminder</a>
            <a href="mothervaccineview.php" class="collapse-item">Mother Vaccine info</a>
            <a href="childvaccineview.php" class="collapse-item">Children Vaccine info</a>
          </div>
           
         </div>
       </li>

       <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapsecontact" aria-axpanded="true" aria-controls="collapsecontact">
           <i class="fas fa-address-book"></i>
           <span>Contact Pages</span>
         </a>
         <div class="collapse" id="collapsecontact" aria-labelledby="headingcontact" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Contact Pages:</h6>
            <a href="contactinfoview.php" class="collapse-item">Contact Info</a>
            <a href="contactmessageview.php" class="collapse-item">Contact Message</a>
          </div>
           
         </div>
       </li>



                                           <!-- Other pages  Start-->

       <li class="nav-item">
         <a href="#" class="nav-link collapsed" data-toggle="collapse" data-target="#collapsepage" aria-axpanded="true" aria-controls="collapsepage">
           <i class="fas fa-fw fa-folder"></i>
           <span>Other Pages</span>
         </a>
         <div class="collapse" id="collapsepage" aria-labelledby="headingpage" data-parent="#accordionsidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">OtherPages:</h6>
            <a href="homeview.php" class="collapse-item"> Home Page</a>
            <a href="aboutview.php" class="collapse-item"> About Page</a>
            <a href="blogview.php" class="collapse-item"> Blog Page </a>
            <a href="guidelineview.php" class="collapse-item"> Guideline Page</a>
            <a href="foodhabitview.php" class="collapse-item"> Foodhabit Page</a>


          </div>
           
         </div>
       </li>



                                          <!-- Other pages  End-->

     
       <!-- section divider -->
            <hr class="sidebar-divider d-done d-md-block">

            <!-- sidebar - Toggler (sidebar) -->
            <div class="text-center d-done d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
    </ul>
    <!-- sidebar End -->


    <!-- Content - Wrapper Start -->
    <div id="content-wrapper" class="d-flex flex-column">
     <!--  Main Content -->
     <div id="content">
      <!-- Topbar -->
       <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow  ">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
     <!--    Top searchbar -->
      <form class="d-done d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input class="form-control bg-light border-0 small" placeholder="Search for......" aria-label="Search" aria-describedby="basic-addon2" type="" name="">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fs-sm"></i>
            </button>
          </div>
        </div>
      </form>
      <!-- Top navbar -->


      <ul class="navbar-nav ml-auto">
      <!--  Nav Item Search Dropdown (visible Only XSS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a href="" class="nav-link dropdown-toggle" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-search fa-sm"></i>
          </a>
          <!-- Dropdown Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
             <div class="input-group">
              <input class="form-control bg-light border-0 small" placeholder="Search for......" aria-label="Search" aria-describedby="basic-addon2" type="" name="">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fs-sm"></i>
                </button>
              </div>
            </div>
              
            </form>
          </div> 
        </li>


         <!-- Nav Item Alerts</ul> -->

        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter alerts -->
            <span class="badge badge-danger badge-counter">3+</span>
          </a>
          <!-- Dropdown alerts -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Alerts Center</h6>
            <a class="dropdown-item d-flex align-items-center" href="">
              <div class="mr-3">
                <div class="icon-circle bg-primary">
                  <i class="fa fa-file-alt text-white"></i>
                </div>
              </div>
              <div >
                <div class="small text-gray-500">December 12,2020</div>
                <span class="font-weight-bold">A new monthly report is ready to download!</span>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="">
              <div class="mr-3">
                <div class="icon-circle bg-success">
                  <i class="fa fa-file-alt text-white"></i>
                </div>
              </div>
              <div >
                <div class="small text-gray-500">December 12,2020</div>
                <span class="font-weight-bold">A new monthly report is ready to download!</span>
              </div>
            </a>
            <a class="dropdown-item d-flex align-items-center" href="">
              <div class="mr-3">
                <div class="icon-circle bg-warning">
                  <i class="fa fa-file-alt text-white"></i>
                </div>
              </div>
              <div >
                <div class="small text-gray-500">December 12,2020</div>
                <span class="font-weight-bold">A new monthly report is ready to download!</span>
              </div>
            </a>
            <a class="dropdown-item text-center small text-gray-500" href="">Show all alerts</a>
            
          </div>
        </li>

        <!--   Dropdown - message -->

        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter alerts -->
            <span class="badge badge-danger badge-counter">7</span>
          </a>
          <!--   Dropdown - message -->
          <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">Message Center</h6>
            <!-- first message -->
            <a class="dropdown-item d-flex align-items-center" href="">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="image">
                <div class="status-indicator bg bg-success"></div>
              </div>
              <div class="font-weight-bold">
                <div class="text-truncate">Hi there! i am wondering if you can help me with a problem i've been having.</div>
                <div class="small text-gray-500">Ruhul Amin . 30m</div>
              </div>
            </a> 
             <!-- second message -->
            <a class="dropdown-item d-flex align-items-center" href="">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="image">
                <div class="status-indicator "></div>
              </div>
              <div>
                <div class="text-truncate">Hi there! i am wondering if you can help me with a problem i've been having.</div>
                <div class="small text-gray-500">sayem . 30m</div>
              </div>
            </a> 
            <!-- third message -->
            <a class="dropdown-item d-flex align-items-center" href="">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="image">
                <div class="status-indicator bg-warning "></div>
              </div>
              <div>
                <div class="text-truncate">Hi there! i am wondering if you can help me with a problem i've been having.</div>
                <div class="small text-gray-500">abdul majed . 30m</div>
              </div>
            </a> 
            <!-- fourth message -->
            <a class="dropdown-item d-flex align-items-center" href="">
              <div class="dropdown-list-image mr-3">
                <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="image">
                <div class="status-indicator bg-success "></div>
              </div>
              <div>
                <div class="text-truncate">Hi there! i am wondering if you can help me with a problem i've been having.</div>
                <div class="small text-gray-500">palash barman . 30m</div>
              </div>
            </a> 
            <a class="dropdown-item text-center small text-gray-500" href="">Show all alerts</a>
        </li>
        <div class="topbar-divider d-done d-sm-block"></div>
       <!--  Nav item - Userinformation -->
       <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
           <span class="mr-2 d-done d-lg-inline text-gray-500 small">Ruhul Amin</span>
           <img class="img-profile rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60">
         </a>
         <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
           <a class="dropdown-item" href="#">
             <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-500"></i>
             Profile
           </a>
           <a class="dropdown-item" href="#">
             <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-500"></i>
             Settings
           </a>
           <a class="dropdown-item" href="#">
             <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-500"></i>
             Activity Log
           </a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
             <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-500"></i>
             Logout
           </a>
         </div>
       </li>
      </ul> 
    </nav>
        <!-- End of topbar -->

        <!-- Begin page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
         
          <!-- Row content -->
          <div>
            <div class="card mt-5 shadow">
              <?php
 
                  $mailto= $_POST['email'];
                  $mailsub= $_POST['sub'];
                  $mailmsg= $_POST['mgs'];
                  require 'PHPMailer/PHPMailerAutoload.php';
                  $mail = new PHPMailer();
                  $mail->isSMTP();    

                  $mail->Host = 'smtp.gmail.com';           
                  $mail->SMTPAuth = true;                    
                  $mail->Username = 'momandchildhealthcare@gmail.com';         
                  $mail->Password = 'ruhulmajed2020';
                  $mail->SMTPSecure = 'tls';              
                  $mail->Port = 587; 
                  //$mail->IsHTML(true);
                  $mail ->SetFrom("mom&childhealthcare@gmail.com");
                  $mail ->Subject = $mailsub ;
                  $mail ->Body =$mailmsg ;
                  $mail ->AddAddress($mailto);

                   if(!$mail->Send())
                   {
                       echo "Mail Not Sent Successfully";
                   }
                   else
                   {
                       echo "<h4 class='m-5 bg-primary text-white p-3'>Mail Successfully Sent</h4>"; 
                   }

                ?>
                <a href="bloodrequest.php" class=" m-5 mx-auto  col-lg-2 btn btn-warning btn-block">Go Back</a>

            </div>
          </div>
             
          </div>
        </div> 



     </div>
     <!-- Main Content -->
    </div>
    <!-- Content - Wrapper End -->
  </div>
    <!--  End of wrapper -->

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
