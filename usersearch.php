
<div>
	<?php
	include_once'dbconfig.php';
	?>

</div>


<div>
	<?php
	include'header.php';
	include'nav.php';
	?>

</div>

<div>
	<?php
	#include'search_bar.php';
	?>
</div>

<div class="  mt-auto p-4" style="background-color: #575757">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
      			<div class="col-md-7 heading-section text-center ftco-animate">
          			<span class="subheading"> </span>
            		<h2 class="mb-4 text-info"><span>Search</span> Results</h2>
      			</div>
    		</div>
			<?php



			if (isset($_POST['blogsearchsubmit'])) {
			$usr_key=mysqli_real_escape_string($conn, $_POST['usr_key']);
			
			$usr_location=mysqli_real_escape_string($conn, $_POST['usr_location']);
			$sql2="SELECT * FROM blogs WHERE title LIKE '%usr_key%' OR location LIKE '%usr_key%'  ";

			$usrsearchresult=mysqli_query($conn, $sql2);
			$usrsearchresultnum=mysqli_num_rows($usrsearchresult);

			if ($usrsearchresultnum >0) {
			while ($row2=mysqli_fetch_assoc($usrsearchresult)) {
			echo '<div class="col-md-12 ftco-animate">

            		<div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

             		 	<div class="mb-4 mb-md-0 mr-5">
                			<div class="job-post-item-header d-flex align-items-center">
                  				<h2 class="mr-3 text-black h3">'.$row2['user_name'].'</h2>
                  				<div class="job-post-item-body d-block d-md-flex">
                   					<a href="mailto:'.$row2['user_email'].'"><span class="bg-primary text-white badge py-2 px-3">'.$row2['user_email'].'</span></a>
                  				</div>
                  				<div class="job-post-item-body d-block d-md-flex">
                   					<a href="tel://'.$row2['user_contact'].'"><span class="bg-primary text-white badge py-2 px-3">'.$row2['user_contact'].'</span></a>
                  				</div>
                			</div>
                			<div class="job-post-item-body d-block d-md-flex">
                  				
                  				<div><span class=""></span> <span>'.$row2['user_skills'].'</span>
                  				</div>
                			</div>
                			<div class="job-post-item-body d-block d-md-flex">
                   					<a ><span class="bg-warning text-white badge py-2 px-3">'.$row2['user_address'].'</span></a>
                  				</div>
              			</div>

              			<div class="ml-auto d-flex">
                			<a href="mailto:'.$row2['user_email'].'" class="btn btn-primary py-2 mr-1">Contact Now</a>
                		
              			</div>
           			</div>
          		</div>';
				}
			}else echo "no result found";
			}
			?>
		</div>
	</section>
</div>
<div>
	<?php
	include'footer.php';
	?>
</div>