<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Tourism Information System</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>


<?php
include_once("../dbconfig.php");
?>
<section class="blog-area section">
  <div class="container"><h1 class="">Search Results.</h1></br>

    <div class="row">
      <?php



			if (isset($_POST['searchsubmit'])) {
			$usr_key= $_POST['searchkey'];
			$sql2="SELECT * FROM blogs WHERE title LIKE '%$usr_key%' OR location LIKE '%$usr_key%'";

			$usrsearchresult=mysqli_query($conn, $sql2);
			$usrsearchresultnum=mysqli_num_rows($usrsearchresult);

			if ($usrsearchresultnum >0) {
			while ($row=mysqli_fetch_assoc($usrsearchresult)) {
			echo '
      <div class="col-lg-4  d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blogsingle.php?title='.$row['id'].'" class="block-20" style="background-image: url(../admin/'.$row['image'].');">
            
            <img src="../admin/'.$row['image'].'" alt="BLOG IMAGE" class="img-thumbnail">
          </a>

          <div class="blog-info">

            <h4 class="title"><a href="#"><b>'.$row['title'].'</b></a></h4>
            <div><p><strong>Last Updated On:'.$row['date'].'</p></strong>
            </div>
            <div><p><strong>Posted By:'.$row['author'].'</p></strong>
            </div>
            <div><p><strong>Location:'.$row['location'].'</p></strong>
            </div>
            <div><p>'.$row['b_short'].'</p>
            </div>
            <div><a class="load-more-btn btn btn-sm col-md-12 btn-primary" href="blogsingle.php?title='.$row['id'].'"><b>READ MORE</b></a>
            </div>
            <div>
                     <strong>  <a href="https://www.google.com/maps/place/Kaski"> <i class="fa fa-arrow-right"></i>Find Route</a></strong>
            </div>
          </div>
        </div>
      </div>
    ';
				}
			}else echo "no result found";
			}
			?>
		</div>
</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
     <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
  </body>
</html>