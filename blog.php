<?php
include_once('dbconfig.php');
?>

<section class=" ftco-section">
	<div class="container">
		<h1 class="">Our Recent Blogs</h1></br>

		<div class="row d-flex">
			<?php
          $sql="SELECT * FROM blogs ORDER BY id DESC LIMIT 9";
          $result=mysqli_query($conn,$sql);
          $queryResult= mysqli_num_rows($result);

          if ($queryResult >0) {
            while ($row=mysqli_fetch_assoc($result)) {
            echo '

			<div class="col-lg-4  d-flex ftco-animate">
				<div class="blog-entry align-self-stretch">
					<a href="blogsingle.php?title='.$row['id'].'" class="block-20" style="background-image: url(admin/'.$row['image'].');">
						
						<img src="admin/'.$row['image'].'" alt="BLOG IMAGE" class="img-thumbnail">
					</a>

					<div class="blog-info">

						<h4 class="title"><a href="#"><b>'.$row['title'].'</b></a></h4>
						<div><p><strong>Last Updated On:'.$row['date'].'</p></strong></div>
						<div><p><strong>Posted By:'.$row['author'].'</p></strong></div>
						
						<div><p>'.$row['b_short'].'</p></div>
						<div><a class="load-more-btn btn btn-sm col-md-12 btn-primary" href="error_login.php?title='.$row['id'].'"><b>READ MORE</b></a></div>
					</div>
				</div>
				
			</div>
			';}
		}
			?>
		</div>
		

	</div>
</section>

<script src="js/1/jquery-3.1.1.min.js"></script>

<script src="js/1/tether.min.js"></script>

<script src="js/1/bootstrap.js"></script>

<script src="js/1/scripts.js"></script>