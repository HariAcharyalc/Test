
    <?php
    include_once('dbconfig.php');
    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Tourism Information System</title>
  
  <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
       <link rel="stylesheet" href="baguetteBox.css" />
    <link rel="stylesheet" href="compact-gallery.css">

</head>

<body>

<section style="background-color: #" class="ftco-section text-light ftco-degree-bg">
  <div class="container ">
            <?php
             $id=$_GET['title'];
              $sql="SELECT * FROM blogs WHERE id=".$id."";
              $result=mysqli_query($conn,$sql);
              $queryResult= mysqli_num_rows($result);

              if ($queryResult >0) {
                while ($row=mysqli_fetch_assoc($result)) {
                echo'
                  <div class="row text-center">
                  <div class="col-md-12 ftco-animate">
                  <h2 class="mb-3 text-center">'.$row['title'].'</h2>
                  <p>'.$row['b_short'].'</p>
                  <p>
                  <a href="admin/'.$row['image'].'"><img src="admin/'.$row['image'].'" alt="PHOTO PLACEHOLDER" class="img-fluid"></a>
                  </p>
                  <p>'.$row['b_long'].'</p>
                  </div>
                  </div>';
                }
              }
           ?>
 


<section>
  <div class="pt-5 mt-5">
    

<?php
    $sql1="SELECT * FROM comment WHERE blog_id=".$id."";
          $result1=mysqli_query($conn,$sql1);
          $queryResult1= mysqli_num_rows($result1);
          echo '<h3 class="mb-5 text-center">'.$queryResult1.' Comments</h3>
          <div class="row col-md-12">';

          if ($queryResult1 >0) {
            while ($row1=mysqli_fetch_assoc($result1)) {
            echo'<div class="col-md-3 d-flex ftco-animate">
            <strong>
            <div class="blog-entry align-self-stretch">
              <div class="text mt-3">
                <h3 class="heading">'.$row1['name'].'</h3>
                <div class="meta mb-2">
                  <div>'.$row1['date'].' </div>
                 
                </div>
               
               <p>'.$row1['comment'].'</p>
              </div>
            </div>
            </strong>
          </div>';
              }
            }
            echo "</div>";
      ?>
  </div>
</section>

             

<?php
echo'
<section>  
  <div class="comment-form-wrap pt-5">
    <h3 class="mb-5 text-center">Leave a comment</h3>
    <form action="comment.php?id='. $id.'" method="post" class="p-5 bg-light">
      <div class="form-group">
      
      <label class="text-dark">Name*</label>
      <input type="text" class="form-control" name="Name" required="">
      <label class="text-dark">Email*</label>
      <input type="email" class="form-control" name="mail" required=""></br>
       <label class="text-dark">message</label>
        <textarea name="message" id="message" cols="20" rows="4" class="form-control" placeholder ="Message Here..." required=""></textarea>
      </div>
      <div class="form-group text-center">
        <input type="submit" name="comment" value="Post Comment" class="btn py-3 px-4 btn-primary">
      </div>

    </form>
  </div>
</section>
 
</section>';
?>




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

<?php
include'footer.php';
?>
     

		