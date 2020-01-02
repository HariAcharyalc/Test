<?php 
extract($_POST);
if(isset($update))
{
//dob
$dob=$yy."-".$mm."-".$dd;

$query="update tourist set name='$n',mobile='$mob',gender='$gen',dob='$dob' where email='".$_SESSION['tourist']."'";

//$query="insert into user values('','$n','$e','$pass','$mob','$gen','$imageName','$dob')";
mysqli_query($conn,$query);



$err="<font color='blue'>Profie Updated Successfully !!</font>";


}


//select old data
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from tourist where email='".$_SESSION['tourist']."'");
$res=mysqli_fetch_assoc($sql);

?>
<h2 align="center">Update Your Profile</h2>

		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input class="form-control" value="<?php echo $res['name'];?>"  type="text" name="n"/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input class="form-control" type="email" readonly="true" value="<?php echo $res['email'];?>"  name="e"/></td>
				</tr>
				
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input class="form-control" type="text" value="<?php echo $res['mobile'];?>"  name="mob"/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" <?php if($res['gender']=="m"){echo "checked";} ?> name="gen" value="m"/>
				Female<input type="radio" <?php if($res['gender']=="f"){echo "checked";} ?> name="gen" value="f"/>	
					</td>
				</tr>
				
				
				
				<tr>
					<td>Enter Your DOB</td>
					<?php 
					$arrr1=explode("-",$res['dob']);
					?>
					<Td>
					<select class="form-control" style="width:100px;float:left" name="yy">
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2019;$i++)
					{
					?>
					<option <?php if($arrr1[0]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					
					</select>
					
					<select class="form-control" style="width:100px;float:left" name="mm">
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					?>
					<option <?php if($arrr1[1]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					
					</select>
					
 					
					<select class="form-control" style="width:100px;float:left" name="dd">
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					?>
					<option <?php if($arrr1[2]==$i){echo "selected";} ?>><?php echo $i; ?></option>
					<?php }					
					?>
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-default" value="Update My Profile" name="update"/>
<input type="reset" class="btn btn-default" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	