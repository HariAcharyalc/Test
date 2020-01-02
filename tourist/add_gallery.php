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
    <form class="myform" action="add_gallery.php"method="post" enctype="multipart/form-data" >
        <div id="main-wrapper">
            <center class="col-md-12">
                <h2>Upload photo to Gallery</h2>
                <img id="uploadPreview" src="imgs/avatar.png" class="avatar img-fluid"/><br>
                <input type="file" id="imglink" name="imglink" accept=".jpg,.jpeg,.png" onchange="PreviewImage();"/>
            </center>
    
        <div class="col-md-12">
            <label><b>Photo Name:</b></label><br>
            <input name="photo_name" type="text" class="inputvalues" placeholder="Type your photo name here..." required/><br>
            
            
            <input name="submit_btn" type="submit" id="signup_btn" value="Insert Photo"/><br>
            <a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
        </div>
        </form>
        </div>
        </div>
        <?php
            if(isset($_POST['submit_btn']))
            {
                
                $name=$_POST['photo_name'];
                
                $img_name = $_FILES['imglink']['name'];
                $img_size =$_FILES['imglink']['size'];
                $img_tmp =$_FILES['imglink']['tmp_name'];
                
                $directory = '../admin/upload_gallery/';
                $target_file = $directory.$img_name;
                
                    
                    
                    
                     if($img_size>2097152)
                    {
                        echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
                    }
                    
                    else
                    {
                        move_uploaded_file($img_tmp,$target_file);  
                        $query= "INSERT INTO gallery (`name`, `image`) VALUES ('$name','$target_file')";
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
include_once ('../footer.php');
?>