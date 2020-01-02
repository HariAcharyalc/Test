<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update blogs set title='$n',author='$auth',image='$img',b_short='$short',b_long='$long' where id='".$_GET['id']."'");	

$err="<font color='green'>Blogs Details Updated</font>";

	}

$con=mysqli_query($conn,"select * from blogs where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Blogs</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Title:</label>
            	<input type="text" value="<?php echo @$res['title'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Author:</label>
            	<input type="text" value="<?php echo @$res['author'];?>" name="auth" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Image:</label>
          <input type="text" value="<?php echo @$res['image'];?>"  name="img" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Short Description:</label>
  <input type="text"  name="short" value="<?php echo @$res['b_short'];?>" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Long Description:</label>
  <input type="text"  name="long" value="<?php echo @$res['b_long'];?>" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Blog">
        </div>
  	</div>
	</form>


</div>