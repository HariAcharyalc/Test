<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['tourist'];

$sql=mysqli_query($conn,"select * from feedback where id='$user'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given feedback </h2>";
}
else
{
$query="INSERT INTO `feedback`(`tourist_id`, `Quality Of Photos`, `Attractiveness of foreground and background of the image`, `Proper Category of Photo`, `Reliable and relevant information of the destination`, `Proper location of the place`, `Main Speciality of the destination`, `Includement of main destinies to visit in Kaski District`, `What I liked about the content`, `Why I disliked about the content`) VALUES('$user','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9')";
mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}


?>
<form method="post">
<fieldset>
<center><u><strong>Tourist's Feedback Form</strong></u></center><br>
 
<fieldset>



<h3>Please give your answer about the following question by selecting the given grade on the scale:</h3>


<button type="button" class="btn btn-info btn-sm">Strongly Agree=5</button>
<button type="button" class="btn btn-dark btn-sm">Agree=4</button>
<button type="button" class="btn btn-success btn-sm">Normal=3</button>
<button type="button" class="btn btn-warning btn-sm">Disagree=2</button>
<button type="button" class="btn btn-danger btn-sm">Strongly Disagree=1</button><br>



<h3>1-Photos</h3>
<table class="table table-bordered">
<tr>
<td><b>a:</b> Quality of Photos:</td>  
<td><input type="radio" name="quest1" value="5" required> 5
  <input type="radio" name="quest1" value="4">4
  <input type="radio" name="quest1" value="3"> 3
<input type="radio" name=" quest1" value="2">2
<input type="radio" name="quest1" value="1">1
</td>
</tr>
  
<tr>
<td><b>b:</b>Attractiveness of foreground and background of the image:</td> 
<td><input type="radio" name="quest2" value="5" required>5
  <input type="radio" name="quest2" value="4">4
  <input type="radio" name="quest2" value="3">3
<input type="radio" name=" quest2" value="2">2
<input type="radio" name="quest2" value="1">1</td>
</tr>

<tr>
<td>
<b>c:</b>Proper Category of Photo:</td> 
<td>
<input type="radio" name="quest3" value="5" required> 5
  <input type="radio" name="quest3" value="4">4
  <input type="radio" name="quest3" value="3"> 3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1</td>
</tr>
</table>

<h3>2-Description</h3>
 <table  class="table table-bordered" >
<td><b>a:</b> Reliable and relevant information of the destination:</td>
<td> <input type="radio" name="quest4" value="5" required> 5
  <input type="radio" name="quest4" value="4">4
  <input type="radio" name="quest4" value="3"> 3
<input type="radio" name="quest4" value="2">2
<input type="radio" name="quest4" value="1">1
</td>

<tr>
<td>
<b>b:</b> Proper location of the place:</td>
<td> 
<input type="radio" name="quest5" value="5" required> 5
<input type="radio" name="quest5" value="4">4
  <input type="radio" name="quest5" value="3"> 3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1</td>
</tr>
<tr>
<td><b>c:</b> Main Speciality of the destination:</td>
<td>
 <input type="radio" name="quest6" value="5" required> 5
  <input type="radio" name="quest6" value="4">4
  <input type="radio" name="quest6" value="3"> 3
<input type="radio" name=" quest6" value="2">2
<input type="radio" name="quest6" value="1">1</td>
</tr>

<tr><td>
<b>d:</b> Includement of main destinies to visit in Kaski District:</td>
<td> <input type="radio" name="quest7" value="5" required> 5
  <input type="radio" name="quest7" value="4">4
  <input type="radio" name="quest7" value="3"> 3
<input type="radio" name="quest7" value="2">2
<input type="radio" name="quest7" value="1">1</td>
</tr>

</table>

<b>3:</b>What I liked about the content:<br><br>
<center>
<textarea name="quest8" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center><br><br>
<b>4:</b>Why I disliked about the content:<br><br>
<center>
<textarea name="quest9" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center>

<p align="center"><button type="submit" class="btn btn-primary btn-lg" name="sub">Submit</button></p>


</form>
</fieldset>


<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>