<h1 align="center" style="text-decoration:underline"><a href="">Admin Dashboard</a></h1>
<?php 
//all blogs
$qq=mysqli_query($conn,"select * from blogs ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:green'>Total Number of Blogs : $rows</h2>";	

//all gallery
$q=mysqli_query($conn,"select * from gallery");
$r1=mysqli_num_rows($q);			
echo "<h2 style='color:orange'>Total Number of Gallery : $r1</h2>";	


//all users
$q2=mysqli_query($conn,"select * from tourist");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black'>Total Number of Tourist : $r2</h2>";	

//all feedback
$q3=mysqli_query($conn,"select * from feedback");
$r3=mysqli_num_rows($q3);			
echo "<h2 style='color:black'>Total Number of Feedback: $r3</h2>";
					

?>
