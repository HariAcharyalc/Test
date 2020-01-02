
           <?php
         include_once('dbconfig.php');
            if (isset($_POST['comment'])) {
               
                        $name=$_POST['Name'];
                        $mail=$_POST['mail'];
                      
              $id=$_GET['id'] ;  
              $msg=$_POST['message'];

              $sqlcmt="INSERT INTO comment (name,email,blog_id,comment) VALUES('$name','$mail','$id','$msg')";
   if (mysqli_query($conn, $sqlcmt)){
    $msg='<script type="text/javascript"> alert("POSTED SUCCESSFULLY........") </script>';
     header("location:blogsingle.php?title=$id");
     }
     else {
      echo '<script type="text/javascript"> alert("failed to POST..please Try again") </script>';
     }

              
            }


            ?>