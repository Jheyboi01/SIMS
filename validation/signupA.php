<?php
    require_once('connection.php');

    session_start();
   
    $username="";
    $email="";
    $errors = array(); 
	$_SESSION['success'] = "";

    if(isset($_POST['Signup_A']))
    {
       $firstname= mysqli_real_escape_string($con,$_POST['firstname']);
       $lastname= mysqli_real_escape_string($con,$_POST['lastname']);
       $email= mysqli_real_escape_string($con,$_POST['email']);
       $phone= mysqli_real_escape_string($con,$_POST['phone']);
       $username= mysqli_real_escape_string($con,$_POST['username']);
       $password= mysqli_real_escape_string($con,$_POST['password']);

       if (empty($firstname)) { array_push($errors, "Firstname is required"); }
       if (empty($lastname)) { array_push($errors, "Lastname is required"); }
       if (empty($email)) { array_push($errors, "Email is required"); }
       if (empty($phone)) { array_push($errors, "Phone number is required"); }
       if (empty($username)) { array_push($errors, "Username is required"); }
       if (empty($password)) { array_push($errors, "Password is required"); }

       if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database
        $query = "INSERT * INTO adminsignup (firstname, lastname, email, phone, username, password) 
                  VALUES($firstname', '$lastname', '$email', '$phone', $username', '$password')";
        mysqli_query($db, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
       }
    }

?>