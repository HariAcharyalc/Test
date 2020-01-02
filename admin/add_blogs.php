<?php
	include_once ('../dbconfig.php');
	?>


<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imglink").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
<div class="container">
	<div class="row">
	<form class="myform" action="add_blogs.php"method="post" enctype="multipart/form-data" >
		<div id="main-wrapper">
			<center class="col-md-12">
				<h2>Upload Blog Post</h2>
				<img id="uploadPreview" src="imgs/avatar.png" class="avatar img-fluid"/><br>
				<input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
			</center>
	
		<div class="col-md-12">
			<label><b>Blog Title:</b></label><br>
			<input name="blog_title" type="text" class="inputvalues" placeholder="Type your Blog Title" required/><br>
			
			<label><b>Author Name:</b></label><br>
			<input name="blog_author" type="text" class="inputvalues" placeholder="Type your Name" required/><br>
			<label><b>Location:</b></label><br>
			<input name="location" type="text" class="inputvalues" placeholder="Type Location" required/><br>
			<label><b>Short Description:</b></label><br>
			<input name="blog_short" type="textfield" class="inputvalues" placeholder="Short Description" required/><br>
			<label><b>Long Description:</b></label><br>
			<input name="blog_long" type="textfield" class="inputvalues" placeholder="Long Description" required/><br>
			<input name="submit_btn" type="submit" id="signup_btn" value="Add Blog"/><br>
			<a href="dashboard.php"><input type="button" id="back_btn" value="Back"/></a>
		</div>
		</form>
		</div>
		</div>
		<?php
			if(isset($_POST['submit_btn']))
			{
				
				$title =$_POST['blog_title'];
				$author = $_POST['blog_author'];
				$loc = $_POST['location'];
				$short = $_POST['blog_short'];
				$long = $_POST['blog_long'];
				
				$img_name = $_FILES['imglink']['name'];
				$img_size =$_FILES['imglink']['size'];
			    $img_tmp =$_FILES['imglink']['tmp_name'];
				
				$directory = 'upload_blog/';
				$target_file = $directory.$img_name;
				
					
					
					
					 if($img_size>2097152)
					{
						echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
					}
					
					else
					{
						move_uploaded_file($img_tmp,$target_file); 	
						$query= "INSERT INTO `blogs`(`title`, `author`, `location`, `image`, `b_short`, `b_long`) VALUES('$title', '$author', '$loc', '$target_file', '$short', '$long')";
						$query_run = mysqli_query($conn,$query);
						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Added Successed...") </script>';
						}
						else
						{
							echo '<script type="text/javascript"> alert("Error!") </script>';
						}
					}	
					
					
				}
		?>
	</div>
<?php
include('../footer.php');
?>