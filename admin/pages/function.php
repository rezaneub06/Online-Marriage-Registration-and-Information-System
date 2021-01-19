<?php

$con = mysqli_connect("localhost","root","","onlinemarriage");

function getkazi(){
	global $con;
	$get_kazi = "select * from qazilist";
	$run_kazi = mysqli_query($con,$get_kazi);
	while ($row_kazi=mysqli_fetch_array($run_kazi)){
	$kazi_id =$row_kazi['id'];
    $kazi_name =$row_kazi['name'];
    
    echo "<li><a href='details.php?kazi=$kazi_id'>$kazi_name</a></li>";
	
		
	}

}

?>