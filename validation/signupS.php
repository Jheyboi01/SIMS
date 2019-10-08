<?php
    include('connection.php');
    session_start();

  /* session_start();

    $username="";
    $email="";
    $errors = array(); 
	$_SESSION['success'] = "";*/
  $errors = array();

    if(isset($_POST['Signup_S']))
    {
       $surname= mysqli_real_escape_string($con,$_POST['surname']);
       $firstname= mysqli_real_escape_string($con,$_POST['firstname']);
       $lastname= mysqli_real_escape_string($con,$_POST['lastname']);
       $gender= mysqli_real_escape_string($con,$_POST['gender']);
       $email= mysqli_real_escape_string($con,$_POST['email']);
       $phone= mysqli_real_escape_string($con,$_POST['phone']);
       $matric= mysqli_real_escape_string($con,$_POST['matric']);
       $username= mysqli_real_escape_string($con,$_POST['username']);
       $password= mysqli_real_escape_string($con,$_POST['password']);

       /*if (empty($surname)) { array_push($errors, "Surname is required"); }
       if (empty($firstname)) { array_push($errors, "Firstname is required"); }
       if (empty($lastname)) { array_push($errors, "Lastname is required"); }
       if (empty($gender)) { array_push($errors, "Gender is required"); }
       if (empty($email)) { array_push($errors, "Email is required"); }
       if (empty($phone)) { array_push($errors, "Phone number is required"); }
       if (empty($matric)) { array_push($errors, "Matric numner is required"); }
       if (empty($username)) { array_push($errors, "Username is required"); }
       if (empty($password)) { array_push($errors, "Password is required"); }

       if (count($errors) == 0) {*/
        //$password = md5($password);//encrypt the password before saving in the database
        $query = "INSERT INTO `studentsignup`(`surname`, `firstname`, ` lastname`, `  gender`, ` email`, ` phone`, ` matric`, `username`, ` password`)  
        VALUES('$surname', '$firstname', '$lastname', '$gender', '$email', '$phone', '$matric', '$username', '$password')";
        $query2=mysqli_query($con, $query);
        
        if($query2){

       /* $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../index.php');*/

        //if(isset($_SESSION['ad'])){
        //  echo "<script>
        echo ('Student Added');
        //   location='/Project/main.php';
       // </script>";
       // }
        //else{
         echo "<script>
        alert('Registration Successful');
           location='/Project/';
        </script>";
        //}
        
        }
        else{
         
          echo mysqli_error($con);
        }
       }
      

    // }

?>