<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_blogs.php?id='+id;
     }
}
</script>	


<?php
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>S.No</th>";
	echo "<th>Title</th>";
	echo "<th>Author</th>";
	echo "<th>Location</th>";
	echo "<th>Image</th>";
	echo "<th>Short Description</th>";
	echo "<th>Long Description</th>";	
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from blogs");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['title']."</td>";
		echo "<td>".$row['author']."</td>";
		echo "<td>".$row['location']."</td>";
		echo "<td>".$row['image']."</td>";
		echo "<td>".$row['b_short']."</td>";
		echo "<td>".$row['b_long']."</td>";
		
		echo "<td class='text-center'><a href='dashboard.php?id=$row[id]&info=edit_blogs'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		echo "</tr>";
		$i++;
	}
	
?>