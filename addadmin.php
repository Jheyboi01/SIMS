<?php
include'connection.php';
include 'header2.php';
if(isset($_POST['addd'])){

	$name=$_POST['name'];
	$user=$_POST['user'];
	$password=$_POST['pass'];
	$ins="INSERT INTO admin(name,user,password)VALUES('$name','$user','$password')";
	$ins2=mysqli_query($con,$ins);
	if($ins2){
      echo "<script>
        alert('Admin Added Successfully');
      </script>";
	}
	else{
		echo "<script>
        alert('Error Ocurred. Please try again later');
        window.history.go(-1);
      </script>";

	}
}

?>



<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-0 col-xs-0 ">
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 ">
<form  method="post" style="height: 300px; border-top:5px solid #234; margin-top: 100px;border-radius: 10px;" >
	<center><b>Add Admin</b></center>
<div class="form-group">
<input type="text" class="form-control" placeholder="Full Name" required="required"  name="name"><br>
<input type="text" class="form-control" placeholder="Username" required="required"  name="user"><br>
<input type="password" class="form-control" placeholder="Password" required="required"  name="pass">
</div>
<button type="submit" class="btn btn-lg btn-primary ddd" name="addd">Add Admin</button>

</form>

</div>
</div>
</div>