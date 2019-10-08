<?php
include 'connection.php';
include 'header2.php';

/*if(isset($_POST['search'])){
	$se=$_POST['search'];

   echo "<a></a>";
    }*/

?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-0 col-xs-0 ">
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 ">
<form  action="result.php" method="post" style="height: 300px; border-top:5px solid #234; margin-top: 100px;border-radius: 10px;" >
	<center><b>Enter Username to Search</b></center>
<div class="form-group">
<input type="text" class="form-control" placeholder="Username" required="required"  name="name"><br>

</div>
<button type="submit" class="btn btn-lg btn-primary ddd" name="search">Search</button>

</form>
</div>
</div>
</div>