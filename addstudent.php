<?php
include 'header2.php';



?>
<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-0 col-xs-0 ">
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12 ">
 <div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg-light my-4 ">
                <div class="card-title text-white bg-primary mt-3 py-1">
                    <h3 class="text-center">Add student</h3>
                </div>

                <div class="card-body">    
                <form action="validation/signupS.php" method="POST">
                <input type="text" name="surname" placeholder="Surname" class="form-control mb-2">
                <input type="text" name="firstname" placeholder="Firstname" class="form-control mb-2">
                <input type="text" name="lastname" placeholder="Lastname" class="form-control mb-2">
                <select name="gender" placeholder="Gender" class="form-control mb-2">
                    <option selected="selected" disabled="disabled">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                <input type="email" name="email" placeholder="Email: example@gmail.com" class="form-control mb-2">
                <input type="tel" name="phone" placeholder="Telephone" class="form-control mb-2">
                <input type="text" name="matric" placeholder="Matric Number" class="form-control mb-2">
                <input type="text" name="username" placeholder="Username" class="form-control mb-2">
                <input type="password" name="password" placeholder="Password" class="form-control mb-2">
                <button type="submit" value="Signup" name="Signup_S" class="btn btn-success btn-block">Sign Up</button> 
                </form>
               </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>