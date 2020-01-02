<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update gallery set name='$n',imager='$img' where id='".$_GET['id']."'");	

$err="<font color='green'>Gallery Details Updated</font>";

	}

$con=mysqli_query($conn,"select * from gallery where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update   Gallery</h1>
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
            	<input type="text" value="<?php echo @$res['name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Author:</label>
            	<input type="text" value="<?php echo @$res['image'];?>" name="img" class="form-control" required>
        </div>
   	</div>
	
	
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Gallery">
        </div>
  	</div>
	</form>


</div>