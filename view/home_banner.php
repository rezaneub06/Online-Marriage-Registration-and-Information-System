<?php 
    if($_SESSION["email"]==null)
    {
        header("location: login#login-popup");
    }

?>

<div class="banner">
  <div class="container">
    <div class="banner_info">
      <h3>Millions of verified Members</h3>
      <a href="profile" class="hvr-shutter-out-horizontal">view your Profile</a>
    </div>
  </div>
  <div class="profile_search">
  	<div class="container wrap_1">
	  <form action="findmatches.php" method="post">
	  	<div class="search_top">
		 
     </div>
	 <div class="inline-block">
	   <div class="age_box2" style="max-width: 220px;">
	   	<label class="gender_1">Age :</label>
	    <input class="transparent" placeholder="From:" style="width: 34%;" name="form" type="text" value="">&nbsp;-&nbsp;<input class="transparent" placeholder="To:" style="width: 34%;" type="text" value=""name="to">
	   </div>
	 </div>
		<div class="submit inline-block">
		   <input id="submit-btn" class="hvr-wobble-vertical" type="submit" value="Find Matches">
		</div>
     </form>
    </div>
  </div> 
</div> 
<div class="grid_1">
      <div class="container">
      	<h1>Featured Profiles</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
		<?php
            //require "database/mainDatabase.php";
            $conn=DataBaseConnection::getMysqlConnection();
            $sql1="select GENDER from users where profileid=:id";
            $pst1=$conn->prepare($sql1);
            $pst1->bindParam(":id",$_SESSION["id"]);
            if($pst1->execute())
            {
                if($row1=$pst1->fetch())
                {
					$sql="select NAME,profile,GENDER,profileid,RELIGION,COUNTRYLIVINGIN from users";
                    echo "<ul id='flexiselDemo3'>";
                    $profile="";
                    $pst=$conn->query($sql);
                        while($row=$pst->fetch())
                        {
                            if($row["GENDER"]!=$row1["GENDER"])
                            {
								$GLOBALS["profile"]=$row["profile"];
								echo "<li><div class='col_1'><a href='userprofile?userid=$row[profileid]'>";
								echo "<img src='$profile' alt='' class='hover-animation image-zoom-in img-responsive' style='height:200px;'/>";
								echo " <div class='layer m_1 hidden-link hover-animation delay1 fade-in'>";
								echo "<div class='center-middle'>About</div>";
								echo "</div>";
								echo "<h3><span class='m_3'>Profile ID :$row[profileid]</span><br>$row[NAME],$row[RELIGION],$row[COUNTRYLIVINGIN]</h3></a></div>";
								echo "</li>";
							}
						}
						echo "</ul>";
				}
			}
		?>						
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>

<a href="chat/index.php"><button class="open-button">Chat</button></a>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    