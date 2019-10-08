<?php
    require_once('header.php');
 /*   session_start(); 

 if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: adminlogin.php');
 }

 if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: adminlogin.php");

 }
*/


?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light my-5 ">
                    <div class="card-title text-white bg-primary mt-4 py-1">
                        <h3 class="text-center">Admin Login Form</h3>
                    </div>
                   <div class="card-body">    
                    <form action="validation/alogin.php" method="POST">
                        <input type="text" name="username" placeholder="Enter Username" class="form-control" required="required"><br>
                        <input type="password" name="password" placeholder="Enter password" class="form-control" required="required"><br>
                        <button type="submit" value="Login" name="Login_A" class="btn btn-success btn-block">Login</button> 
                        
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>


<?php
    require_once('footer.php');
?>