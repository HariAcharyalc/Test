<?php
session_start();
if(!isset($_SESSION['user']))
{
header('location:index.php');
}
include('../dbconfig.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <link href="../1/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
        <link rel="stylesheet" href="../baguetteBox.css" />
    <link rel="stylesheet" href="../compact-gallery.css">


    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Tourism Information System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="dashboard.php?info=update_password"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-folder fa-fw"></i>Blogs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard.php?info=all_blog"><i class="fa fa-eye"></i> Show Blogs</a>
                                </li> 
                                <li>
                                    <a href="dashboard.php?info=add_blogs"><i class="fa fa-plus fa-fw"></i> Add Blogs</a>
                                </li>
                                 <li>
                                    <a href="dashboard.php?info=show_blogs"><i class="fa fa-gears"></i> Manage Blogs</a>
                                </li>                           
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-image fa-fw"></i> Gallery<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="dashboard.php?info=all_gallery"><i class="fa fa-eye"></i> Show Gallery</a>
                                </li> 
                                <li>
                                    <a href="dashboard.php?info=add_gallery"><i class="fa fa-plus fa-fw"></i> Add Gallery</a>
                                </li>
                                 <li>
                                    <a href="dashboard.php?info=show_gallery"><i class="fa fa-gears"></i> Manage Gallery</a>
                                </li>                           
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Tourist<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                 <li>
                                    <a href="dashboard.php?info=display_tourist"><i class="fa fa-eye"></i> Manage Tourist</a>
                                </li> 
                                         
                            </ul>
                        </li>
                        
                        
        
        <!-- feedback-->
        <li>
         <a href="#"><i class="fa fa-envelope"></i> Feedback<span class="fa arrow"></span></a>
           <ul class="nav nav-second-level">
                             
<li><a href="dashboard.php?info=feedback"><i class="fa fa-eye"></i> Display Feedback</a></li>
     
                                         
                            </ul>
                        </li>
        <!--feedback end-->
                        
                    
                        
                        
        <li>
            <a href="dashboard.php?info=contact"><i class="fa fa-tty"></i> Contact Us</a>
        </li>
               
                   
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   
                    <?php 
                                @$id=$_GET['id'];
                                @$info=$_GET['info'];
                                if($info!="")
                                {
                                    if($info=="add_blogs")
                                        {
                                            include('add_blogs.php');
                                        }
                                        
                                    elseif($info=="show_blogs")
                                        {
                                            include('show_blogs.php');
                                        }
                                     elseif($info=="all_blog")
                                        {
                                            include('all_blog.php');
                                        }
                                     elseif($info=="all_gallery")
                                        {
                                            include('all_gallery.php');
                                        }
                                        
                                        
                                    elseif($info=="edit_blogs")
                                        {
                                            include('edit_blogs.php');
                                        }   
                                        
                                        if($info=="add_gallery")
                                        {
                                            include('add_gallery.php');
                                        }
                                        
                                    elseif($info=="show_gallery")
                                        {
                                            include('show_gallery.php');
                                        }
                                        
                                        
                                    elseif($info=="edit_gallery")
                                        {
                                            include('edit_gallery.php');
                                        }   
                                    elseif($info=="display_tourist")
                                        {
                                            include('display_tourist.php');
                                        }
                                    
                                        
                                        
                                    elseif($info=="contact")
                                        {
                                            include('contact.php');
                                        }   
                                    elseif($info=="feedback")
                                        {
                                            include('feedback.php');
                                        }  
                                        else if($info=="update_password")
                                        {
                                        include('update_password.php');
                                        }
                                    
                                }
                                else
                                {
                                include('dashboard_home.php');
                                }
                            
                            
                            ?>
                
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/metisMenu.min.js"></script>

  
    <!-- Custom Theme JavaScript -->
    <script src="../css/sb-admin-2.js"></script>
      <script src="../baguetteBox.js"></script>
    <script>
        baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
    </script>

</body>

</html>
