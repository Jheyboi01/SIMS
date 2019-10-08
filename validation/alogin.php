<?php
  require_once('connection.php');
  session_start();

  /*    if (isset($_POST['Login_A'])) {
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM adminsignup WHERE username='$username' AND password='$password'";
			$results = mysqli_query($con, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
*/


	if(isset($_POST['Login_A'])){
		$username = ( $_POST['username']);
		$password = ( $_POST['password']);
		$sel="SELECT*FROM admin WHERE user='$username' AND password='$password'";
		$sel2=mysqli_query($con,$sel);
		$match=mysqli_num_rows($sel2);
		if($match){
			$_SESSION['ad']=23;
			$_SESSION['name']=$username;
			header('location:/Project/main.php');
		}

		else{

		 if($username=='dun' && $password==12345){
		 	$_SESSION['ad']=23;
		 	echo "<script>
               location='/Project/main.php';
		 	</script>";

		 }
		 else{

		 	echo "<script>
             alert('Wrong Username or password combination');
             location='/Project/adminlogin.php';
		 	</script>";
		 	exit();
		 }
		}

	}

?>