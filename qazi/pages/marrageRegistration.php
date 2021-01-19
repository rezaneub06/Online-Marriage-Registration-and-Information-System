<?php  
   session_start();
   $Qid=$_SESSION["Qid"] ;
   
   
  if($_SESSION["Qid"]){

  }
  else{
    echo '<script> location.replace("../../login.php"); </script>';
  }
   ?>
<?php
include 'header.php';
?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"style="float: right;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color: green;" href="index.html">Kazi
                                     <?php
                                     include "connection.php";
                                     $qid=$_SESSION["Qid"] ;
                                     $query=("select * from qazilist where RegID ='$qid'");
                                     $result=mysqli_query($connection,$query);
                                     $row = mysqli_fetch_array($result);
                                     echo $row['name'];
                                     ?>
                </a>
            </div>
            <!-- /.navbar-header -->

           
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
            
            <!-- /.navbar-top-links -->

            <div class="sidebar"  role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                          <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="marrageRegistration.php"><i class="fa fa-table fa-fw"></i> Marriage Registration </a>
                        </li>
                        <li>
                            <a href="Registrationlist.php"><i class="fa fa-table fa-fw"></i> Registration List </a>
                        </li>
                       <li>
                            <a href="divorceinfo.php"><i class="fa fa-table fa-fw"></i> Divorce </a>
                        </li>
                        
                         <li>
                            <a href="logout.php"><i class="fa fa-table fa-fw"></i> LogOut </a>
                        </li>
                        
                      
                       
                    </ul>
                </div>
             
            </div>
         
        </nav>
    <div id="page-wrapper">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="page-header text-warning">Marriage Registration Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
    <div class="col-lg-12">
        <h3 class="text-center text-success"></h3>
        <hr/>
        <div class="well">
          
             <form method="POST"  enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>01.Name of the Town/Union, Upazila/Thana, and District in which the marriage took place</b></h4> </label>
    <input type="text" class="form-control" name="MarriageArea" id="exampleInputPassword1" placeholder="" required="" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>02.Name of the groom </b></h4> </label>
    <input type="text" class="form-control" name="GroomName" id="exampleInputPassword1" placeholder=""  required="">
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>03.Photo groom </b></h4> </label>
    <input type="file" class="custom-file-input" name="p1" id="exampleInputPassword1" placeholder=""  required="">

  </div>
  
  

      <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>04.Email of groom:</b></h4> </label>
    <input type="text" class="form-control" name="Gemail" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>05.groom  father’s name</b></h4> </label>
    <input type="text" class="form-control" name="f1" id="exampleInputPassword1" placeholder=""  required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>06.Address of groom:</b></h4> </label>
    <input type="text" class="form-control" name="a1" id="exampleInputPassword1" placeholder=""  required="">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>07.Age of groom:</b></h4> </label>
    <input type="text" class="form-control" name="ageBgroom" id="exampleInputPassword1" placeholder="" required="">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>08.The name of the bride :</b></h4> </label>
    <input type="text" class="form-control" name="nameB" id="exampleInputPassword1" placeholder="" required="">
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>09.Photo of bride </b></h4> </label>
    <input type="file" class="custom-file-input" name="p2" id="exampleInputPassword1" placeholder=""  required="">

  </div>


    <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>10.Email of bride:</b></h4> </label>
    <input type="text" class="form-control" name="Bemail" id="exampleInputPassword1" placeholder="" required="">
     </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>11.Bride  father’s name :</b></h4> </label>
    <input type="text" class="form-control" name="f2" id="exampleInputPassword1" placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>12.Address of Bride:</b></h4> </label>
    <input type="text" class="form-control" name="a2" id="exampleInputPassword1" placeholder="" required="">
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>13. Wheather the bride is a maiden, a window or a divorce:</b></h4> </label>
    <input type="text" class="form-control" name="MaindenDivorce" id="exampleInputPassword1" placeholder="" required>
  </div>

<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>14.Age of the bride:</b></h4> </label>
    <input type="text" class="form-control"  name="ageBi" id="exampleInputPassword1" placeholder="" required>
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>15.Name or the wakil ,if any, appointed of the bride, his father’s name and his residence</b></h4> </label>
    <input type="text" class="form-control" name="d9" id="exampleInputPassword1" placeholder="" required>
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>16.The names of the witness to the appointment of the bride’s Wakil with their father’s names, their residences and their relationship with bride:</b></h4> </label>
    <textarea type="text" class="form-control" name="d10" id="exampleInputPassword1" placeholder="" required></textarea>
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>17. Name of the wakil ,if any, appointed by the bridegroom, his father’s name and his residence :</b></h4> </label>
    <input type="text" class="form-control" name="d11" id="exampleInputPassword1" placeholder="" required>
  </div>



<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>18.The names of the witness to the appointment of the bridgrgroom’s wakil with their father’s names and their residence: </b></h4> </label>
    <textarea type="text" class="form-control" name="d12" id="exampleInputPassword1" placeholder="" required></textarea>
  </div>



<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>19.Names of the witness of the marriage ,their father’s names and their residence:</b></h4> </label>
    <textarea type="text" class="form-control" name="d13" id="exampleInputPassword1" placeholder="" required></textarea>
  </div>



<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>20.Date on which the marriage was contracted:</b></h4> </label>
    <input type="text" class="form-control" name="d14" id="exampleInputPassword1" placeholder="" required>
  </div>



<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>21.Amount of dower:</b></h4> </label>
    <input type="text" class="form-control" name="d15" id="exampleInputPassword1" placeholder="" required>
  </div>

<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>22.How much of the dower is muajjal (prompt) and how much muwajjal (deferred):</b></h4> </label>
    <input type="text" class="form-control" name="d16" id="exampleInputPassword1" placeholder="" required>
  </div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4><b>23.Whether any portion of the dower was paid at the time of marriage if so, How much?</b></h4> </label>
    <input type="text" class="form-control" name="d17" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>24.whether any property was given in lieu the whole or any portion of the dower with specification of the name & it's valuation agreed to between the parties?</b></h4> </label>
    <input type="text" class="form-control" name="d18" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>25.special condition if any:</b></h4> </label>
    <input type="text" class="form-control" name="d19" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>26.Whether the husband has delegated the power of divorce to the wife, if so, under what condition:</b></h4> </label>
    <input type="text" class="form-control" name="d20" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>27.Whether the husband's right of divorce is in any way curtailed?</b></h4> </label>
    <input type="text" class="form-control" name="d21" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>28.Whether any document was drawn up at the time marriage relating to dower, Maintenance etc. if so, contents there of in brief:</b></h4> </label>
    <input type="text" class="form-control" name="d22" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>29.Whether the bridegroom has any existing wife and if so whether he has secured the permission of the arbitration council under the Muslim famiy laws ordinance 1961,to contract another marriage?</b></h4> </label>
    <input type="text" class="form-control" name="d23" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>30.Number and date of the communication conveying to the bridegroom the permission of the arbitration council to contract another marriage:</b></h4> </label>
    <input type="text" class="form-control" name="d24" id="exampleInputPassword1" placeholder="" required>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>31.Name of the address of the person by whom the marriage was solemnized and his father & mother:</b></h4> </label>
    <input type="text" class="form-control" name="d24" id="exampleInputPassword1" placeholder="" required="">
  </div>


  
<div class="form-group">
            <label for="recipient-name" class="col-form-label">32.Date of registration of  </label> <input type="date" class="form-control" style="padding-bottom:37px;" 
              placeholder="DD-MM-YYYY" name="date" id="recipient-name5" required="">
            <span id="datevalidate" style="color: red;"></span>


  <div class="form-group">
    <label for="exampleInputPassword1"><h4><b>33.Registration fees paid::</b></h4> </label>
    <input type="text" class="form-control" name="d25" id="exampleInputPassword1" placeholder="" required="">
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>34.Sign of Kazi </b></h4> </label>
    <input type="file" class="custom-file-input" name="p3" id="exampleInputPassword1" placeholder=""  required="">


  </div>
     <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>35.Sign of groom  </b></h4> </label>
    <input type="file" class="custom-file-input" name="p4" id="exampleInputPassword1" placeholder=""  required="">


  </div>
      <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>36.Sign of bride </b></h4> </label>
    <input type="file" class="custom-file-input" name="p5" id="exampleInputPassword1" placeholder=""  required="">


  </div>


    <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>37.Sign of groom witness </b></h4> </label>
    <input type="file" class="custom-file-input" name="p6" id="exampleInputPassword1" placeholder=""  required="">


  </div>
      <div class="form-group">
  <label for="exampleInputPassword1"><h4><b>38.Sign of bride witness </b></h4> </label>
    <input type="file" class="custom-file-input" name="p7" id="exampleInputPassword1" placeholder=""  required="">


  </div>
  </div>



  <div class="form-group">
                <div class="col-sm-10" style="margin-left:100px;margin-bottom:15px;">
                    <button type="submit" name="btn" class="btn btn-success btn-block"><h4><b> Register  Information</b></h4></button>
                </div>
            </div>
<?php 




                  include "connection.php";
                  $Qid=$_SESSION["Qid"] ;

                  if(isset($_POST['btn'])){


////file upload

$target_dir = "uploads/";
$target_file1 = $target_dir . basename($_FILES["p1"]["name"]);
$target_file2 = $target_dir . basename($_FILES["p2"]["name"]);
$target_file3 = $target_dir . basename($_FILES["p3"]["name"]);
$target_file4 = $target_dir . basename($_FILES["p4"]["name"]);
$target_file5 = $target_dir . basename($_FILES["p5"]["name"]);
$target_file6 = $target_dir . basename($_FILES["p6"]["name"]);
$target_file7 = $target_dir . basename($_FILES["p7"]["name"]);

$uploadOk = 1;
$imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
$imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
$imageFileType5 = strtolower(pathinfo($target_file5,PATHINFO_EXTENSION));
$imageFileType6 = strtolower(pathinfo($target_file6,PATHINFO_EXTENSION));
$imageFileType7 = strtolower(pathinfo($target_file7,PATHINFO_EXTENSION));

     $check1 = getimagesize($_FILES["p1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["p2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["p3"]["tmp_name"]);
    $check4 = getimagesize($_FILES["p4"]["tmp_name"]);
    $check5 = getimagesize($_FILES["p5"]["tmp_name"]);
    $check6 = getimagesize($_FILES["p6"]["tmp_name"]);
    $check7 = getimagesize($_FILES["p7"]["tmp_name"]);

    if($check1 !== false && $check2 !== false && $check3 !== false && $check4 !== false && $check5 !== false && $check6 !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<script>window.alert('File is not Image ')</script>";
        $uploadOk = 0;
    }
if (file_exists($target_file1)&&file_exists($target_file2)&&file_exists($target_file3)&&file_exists($target_file4)&&file_exists($target_file5)&&file_exists($target_file6)) {
    
    echo "<script>window.alert('Sorry, file already exists rename your image. ')</script>";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
&& $imageFileType1 != "gif" ) {
    
  echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
&& $imageFileType2 != "gif" ) {
    echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
if($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
&& $imageFileType3 != "gif" ) {
    echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
if($imageFileType4 != "jpg" && $imageFileType4 != "png" && $imageFileType4 != "jpeg"
&& $imageFileType4 != "gif" ) {
    echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
if($imageFileType5 != "jpg" && $imageFileType5 != "png" && $imageFileType5 != "jpeg"
&& $imageFileType5 != "gif" ) {
    echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
if($imageFileType6 != "jpg" && $imageFileType6 != "png" && $imageFileType6 != "jpeg"
&& $imageFileType6 != "gif" ) {
    echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
if($imageFileType7 != "jpg" && $imageFileType7 != "png" && $imageFileType7 != "jpeg"
&& $imageFileType7 != "gif" ) {
    echo "<script>window.alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed. ')</script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["p1"]["tmp_name"], $target_file1)) {
        echo "The file ". basename( $_FILES["p1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["p2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["p2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["p3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["p3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["p4"]["tmp_name"], $target_file4)) {
        echo "The file ". basename( $_FILES["p4"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["p5"]["tmp_name"], $target_file5)) {
        echo "The file ". basename( $_FILES["p5"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    if (move_uploaded_file($_FILES["p6"]["tmp_name"], $target_file6)) {
        echo "The file ". basename( $_FILES["p6"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
        if (move_uploaded_file($_FILES["p7"]["tmp_name"], $target_file7)) {
        echo "The file ". basename( $_FILES["p7"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
       

       /////end file upload           


                    $date=date("Y/m/d");
                    $RegNo=rand(11111111,99999999);
                    
                    $f1= $_POST['f1']; 
                    $f2= $_POST['f2']; 
                    $a1= $_POST['a1'];
                    $a2= $_POST['a2'];
                     


                    $d1=$_POST['MarriageArea'];
                    $d2=$_POST['GroomName'];
                    $d3=$_POST['Bemail'];
                    $d4=$_POST['Gemail'];
                    $d5=$_POST['ageBgroom'];
                    $d6=$_POST['nameB'];
                    $d7=$_POST['MaindenDivorce'];
                    $d8=$_POST['ageBi'];
                    $d9=$_POST['d9'];
                    $d10=$_POST['d10'];
                    $d11=$_POST['d11'];
                    $d12=$_POST['d12'];
                    $d13=$_POST['d13'];
                    $d14=$_POST['d14'];
                    $d15=$_POST['d15'];
                    $d16=$_POST['d16'];
                    $d17=$_POST['d17'];
                    $d18=$_POST['d18'];
                    $d19=$_POST['d19'];
                    $d20=$_POST['d20'];
                    $d21=$_POST['d21'];
                    $d22=$_POST['d22'];
                    $d23=$_POST['d23'];
                    $d24=$_POST['d24'];
                    $d25=$_POST['d25'];
                    $d26=$Qid;
                    $sign=$target_file3;
                    $photoW=$target_file2;
                    $photoH=$target_file1;
                    $signGroom=$target_file4;
                    $signBide=$target_file5;
                    $signBrideWitness=$target_file6;
                    $signGroomWitness=$target_file7;


                  


$query="insert into marriagelist(date,RegNo,MarriageArea,GroomName,f1,a1,Bemail,Gemail,f2,a2,ageBgroom,nameB,MaindenDivorce,ageBi,d9,d10,d11,d12,d13,d14,d15,d16,d17,d18,d19,d20,d21,d22,d23,d24,d25,d26,sign,photoW,photoH,signGroom,signBide,signBrideWitness,signGroomWitness)
values('$date','$RegNo','$d1','$d2','$f1','$a1','$d3','$d4','$f2','$a2','$d5','$d6','$d7','$d8','$d9','$d10','$d11','$d12','$d13',
'$d14','$d15','$d16','$d17','$d18','$d19','$d20','$d21','$d22','$d23','$d24','$d25','$d26','$sign','$photoW','$photoH','$signGroom','$signBide','$signBrideWitness','$signGroomWitness');";
                        $result = mysqli_query($connection,$query);
                        if($result){
                          echo "<script>window.alert('Data added')</script>";
                                   }
                        else{

                          echo "<script>window.alert('Problem')</script>";

                        }


                echo '<script> location.replace("index.php"); </script>';
    
}


                 ?>            

          </form>
        </div>
    </div>
</div>
            

                </div>






        
                    </div>
                   

    <!-- jQuery -->
    <?php
   include 'footer.php';
   ?>
</body>

</html>
