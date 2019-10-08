<?php
    require_once('header.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-light mt-5 mb-3 ">
                    <div class="card-title text-white bg-primary mt-4 py-1">
                        <h3 class="text-center">Student Login Form</h3>
                    </div>
                   <div class="card-body">    
                    <form action="validation/slogin.php" method="POST" class="form">
                        <input type="text" name="username" placeholder="Enter Username" class="form-control" required="required"><br>
                        <input type="password" name="password" placeholder="Enter password" class="form-control" required="required"><br>
                        <button type="submit" value="Login"  name="Login_S" class="btn btn-success btn-block mb-2">Login</button> 
                        <h6 class="text-center text-uppercase">or</h6>
                        <button type="button" value="Signup" class="btn btn-primary btn-block"><a href="studentsignup.php" class="text-white text-link-style-none">Sign Up</a></button>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </div>


<?php
    require_once('footer.php');
?>