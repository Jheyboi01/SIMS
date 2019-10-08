<?php
include 'header2.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-0 col-xs-0 ">
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 ">
 <marquee><b><h1 style="padding-top: 100px; color: black;">Welcome Back, Admin:
<?php
if(isset($_SESSION['name'])){
	echo $_SESSION['name'];
}

?>

 </h1></b> </marquee>

<img src="/Project/images/ad.png" width="100%">

</div>
</div>
</div>