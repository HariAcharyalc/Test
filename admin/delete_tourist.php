<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from tourist where id='$info'");
	header('location:dashboard.php?info=display_tourist');
?>