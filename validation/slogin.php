<?php
    include('connection.php');
    
    session_start();

    if (isset($_POST['Login_S'])) {
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		
			$query = "SELECT * FROM `studentsignup` WHERE `username`='$username' AND ` password` ='$password'";
			$results = mysqli_query($con, $query);
			$results2=mysqli_num_rows($results);

			if ($results2) {
				$_SESSION['username'] = $username;
				$_SESSION['password']=$password;
				 echo "<script>

                   location='/Project/dashboard.php';

				 </script>";
			}else {
				
				echo "<script>
                    alert('Wrong email or password');
                    location='/Project/studentlogin.php';
				</script>";

			}
		
	}



?>