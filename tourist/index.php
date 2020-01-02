<?php 
session_start();
include('../dbconfig.php');
$user= $_SESSION['tourist'];
if($user=="")
{header('location:../index.php');}
$sql=mysqli_query($conn,"select * from tourist where email='$user' ");
$users=mysqli_fetch_assoc($sql);
//print_r($users);
?>
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
 <link href="../1/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="../baguetteBox.css" />
    <link rel="stylesheet" href="../compact-gallery.css">


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

    <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#428bca">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color:#FFFFFF" href="#">Welcome <?php echo $users['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
          <ul class="nav navbar-nav navbar-right">
           <li class="m-2 p-2"><span class="m-0 p-0">                       
            <form class="form-inline" method="post" action='search.php'>
    <input class="form-control  mr-sm-2 " type="text" placeholder="Search" aria-label="Search" name='searchkey'>
    <button style='background-color:green'class="btn btn-success" type="submit" name='searchsubmit'>Search</button>
  </form></span></li>
            <li><a href="logout.php"  style="color:#FFFFFF"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
          </ul>
          
        </div>
      </div>
    </nav>



    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Dashboard <span class="sr-only">(current)</span></a></li>
      <!-- find users' image if image not found then show dummy image -->
      
      <!-- check users profile image -->
      <?php 
      $q=mysqli_query($conn,"select image from tourist where email='".$_SESSION['tourist']."'");
      $row=mysqli_fetch_assoc($q);
      if($row['image']=="")
      {
      ?>
            <li><a href="#"><img style="border-radius:50px" src="../images/person.jpg" width="100" height="100" alt="Not found"/></a></li>
      <?php 
      }
      else
      {
      ?>
      <li><a href="#"><img style="border-radius:50px" src="../images/<?php echo $_SESSION['tourist'];?>/<?php echo $row['image'];?>" width="100" height="100" alt="Not found"/></a></li>
      <?php 
      }
      ?>
      
      <li><a href="index.php?page=all_gallery"><span class="glyphicon glyphicon-book"></span> Show Gallery</a></li>
      <li><a href="index.php?page=add_gallery"><span class="glyphicon glyphicon-plus-sign"></span> Add Gallery</a></li>
      <li><a href="index.php?page=all_blog"><span class="glyphicon glyphicon-eye-open"></span> Show Blogs</a></li>
      <li><a href="index.php?page=add_blog"><span class="glyphicon glyphicon-plus"></span> Add Blog</a></li>
      <li><a href="index.php?page=update_password"><span class="glyphicon glyphicon-user"></span> Update Password</a></li>
            <li><a href="index.php?page=update_profile"><span class="glyphicon glyphicon-asterisk"></span> Update Profile</a></li>
       <li><a href="index.php?page=feedback"><span class="glyphicon glyphicon-thumbs-down"></span> Feedback</a></li>
            
          </ul>
         
         
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- container-->
      <?php 
    @$page=  $_GET['page'];
      if($page!="")
      {
        if($page=="update_password")
      {
        include('update_password.php');
      
      }
      if($page=="all_blog")
      {
        include('all_blog.php');
      }
        if($page=="add_blog")
      {
        include('add_blog.php');
      
      }
      
      if($page=="all_gallery")
      {
        include('all_gallery.php');
      }
        if($page=="add_gallery")
      {
        include('add_gallery.php');
      
      }
      
      
        if($page=="update_profile")
      {
        include('update_profile.php');
      
      }
      if($page=="feedback")
      {
        include('give_feedback.php');
      
      }
      }
      else
      {
      
      ?>
     
      
      
      
      <h1 class="page-header">Dashboard</h1>
      
      
      <h3>Welcome to User Dashboard</h3>
      
      
      <h4> Select the sidebar option which you are looking for!!!</h4>

          
          
            
            
            
          </div>
<?php } ?>
        
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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
        interval: 5000 //changes the spee
    })
    </script>
    <script src="../baguetteBox.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    </script>

  </body>
</html>
