<?php
include 'header2.php';
include 'connection.php';

if(isset($_POST['pass'])){
	$user=$_POST['user'];
	$op=$_POST['op'];
	$np=$_POST['np'];
	$sel="SELECT*FROM admin WHERE user='$user' AND password='$op'";
	$sel2=mysqli_query($con,$sel);
	$match=mysqli_num_rows($sel2);
	if($match){
		$update="UPDATE admin SET password='$np' WHERE user='$user' AND password='$op'";
		$update2=mysqli_query($con,$update);
		if($update2){
           echo "<script>

        alert('Password Updated');
           </script>";
		}
		else{
			echo "<script>

        alert('Error Occured. Please try again laters');
           </script>";

		}
	}
	else{
		echo "<script>
          alert('Wrong username or old password entered. Try again');
          location='/Project/changepassword.php';

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
	<center><b>Password Change</b></center>
<div class="form-group">
<input type="text" class="form-control" placeholder="Username" required="required"  name="user"><br>	
<input type="password" class="form-control" placeholder="Old Password" required="required"  name="op"><br>
<input type="password" class="form-control" placeholder="New password" required="required"  name="np">
</div>
<button type="submit" class="btn btn-lg btn-primary ddd" name="pass">Change Password</button>

</form>
</div>
</div>
</div>

