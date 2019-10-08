<?php

include'connection.php';
$user=$_GET['user'];
$del="DELETE FROM studentsignup WHERE username='$user'";
$del2=mysqli_query($con,$del); 
if($del2){
	echo "<script>alert('Record Deleted')
    location='managestudent.php';

	</script>";




}


?>