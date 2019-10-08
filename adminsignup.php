<?php
    require_once('header.php');
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg-light my-4 ">
                <div class="card-title text-white bg-primary mt-3 py-1">
                    <h3 class="text-center">Admin Signup Form</h3>
                </div>
                <div class="card-body">    
                <form action="" method="POST">
                <input type="text" name="firstname" placeholder="Firstname" class="form-control mb-2">
                <input type="text" name="lastname" placeholder="Lastname" class="form-control mb-2">
                <input type="email" name="Email" placeholder="Email: example@gmail.com" class="form-control mb-2">
                <input type="tel" name="phone" placeholder="Telephone" class="form-control mb-2">
                <input type="text" name="username" placeholder="Username" class="form-control mb-2">
                <input type="password" name="password" placeholder="Password" class="form-control mb-2">
                <button type="submit" value="Signup" name="Signup_A" class="btn btn-success btn-block">Sign Up</button> 
                </form>
               </div>
            </div>
        </div>
    </div>
</div>



<?php 
    require_once('footer.php');
?>