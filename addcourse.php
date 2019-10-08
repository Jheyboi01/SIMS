<?php
include 'header2.php';
include 'connection.php';

if(isset($_POST['addc'])){

$ct=$_POST['ct'];
$cd=$_POST['cd'];

$ins="INSERT INTO course (coursetitle,code) VALUES ('$ct','$cd') ";
$ins2=mysqli_query($con,$ins);
if($ins2){
	echo "<script>
     alert('Course Added Successfully');
	</script>";
}
else{
	echo"<script>

     alert('Error occurred. Please try agin later');
     

	</script>";
	echo mysqli_error($con);
}





}



?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-0 col-xs-0 ">
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 ">
<form  method="post" style="height: 300px; border-top:5px solid #234; margin-top: 100px;border-radius: 10px;" >
	<center><b>Add Course</b></center>
<div class="form-group">
<input type="text" class="form-control" placeholder="Course Title" required="required"  name="ct"><br>
<input type="text" class="form-control" placeholder="Course Code" required="required"  name="cd">
</div>
<button type="submit" class="btn btn-lg btn-primary ddd" name="addc">Add</button>

</form>

</div>
</div>
</div>