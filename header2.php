<?php

//session_start();

include('head.php');
/*if(!isset($_SESSION['email5'])){
  echo "<script>location='/examination/admin/'</script>";
}
include('conn.php'); 
$sss=$_SESSION['email']; */



?> 
<style type="text/css">
/*@keyframes example {
   0%   {background-image:url(bit1.jpg);}
    25%  {background-image:url(bit2.jpg);}
    50%  {background-image:url( bit3.jpg);}
    75%  {background-image:url(bit4.jpg);}
    100% {background-image:url(bit5.jpg);}
  }*/
/* The element to apply the animation to */
body{
    
    font-family: ubuntu;
    background-color: rgb(218,218,218);
}
.dropdown-menu{
  ::-webkit-scrollbar {
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: green; 
}
}
}

  
	.circle-tile {
    margin-bottom: 15px;
    text-align: center;
    background-color:  rgb(145,2,41);
}
.circle-tile-heading {
    border: 3px solid rgb(145,2,41);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;

}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
      background-color:  rgb(145,2,41);
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
    text-align: center;
}
.circle-tile-description {
    text-transform: uppercase;
     background-color:  rgb(145,2,41);
}
.circle-tile-footer {
    background-color: rgb(145,2,41);
    color: rgb(145,2,41);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
    color: #fff;
    text-align: center;
}

.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: rgb(145,2,41);
    text-align: center;
}
.green {
    background-color: rgb(145,2,41);
    text-align: center;
}
.blue {
    background-color:rgb(145,2,41)
    text-align: center;
}
.orange {
    background-color:rgb(145,2,41);
}
.red {
    background-color: rgb(145,2,41);
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

/****** User-Profile ******/

.navbar-side li.side-user {
    border-bottom: 1px solid #142638;
    border-top: medium none !important;
    display: block;
    padding: 15px;
    text-align: center;
    width: 100%;
}

.navbar-side .side-user img {
  display: block;
  margin-bottom: 15px;
  margin-left: 20px;
  width: 150px;
  height: 150px;
}

.navbar-side .side-user .welcome {
    color: #9AA4AF;
    font-style: italic;
    margin: 0;
}

.navbar-side .side-user .welcome .fa {
    padding-right: 0;
}

.navbar-side .side-user .name {
    color: #CCD1D7;
    font-family: "Ubuntu","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 20px;
    font-weight: 300;
    margin: 0;
    padding: 0px;
}
/****** End User-Profile ******/

.admin-content {
  padding: 20px;
}

/* Edit Below to Customize Widths > 768px */
@media (min-width:768px) {

.side-nav {
  margin-left: -225px;
  left: 225px;
  width: 225px;
  position: fixed;
  top: 50px;
  height: 100%;
  border-radius: 0;
  border: none;
  overflow: auto;
}
.img-circle,.side-user{
  width: 200px;
}

.side-nav >li .dropdown > ul .dropdown-menu {
  min-width: 225px;
  margin: 0;
  padding: 0;
  border: none;
  border-radius: 0;
  background-color: transparent;
  box-shadow: none;
  -webkit-box-shadow: none;
}

.side-nav>li>a {
  width: 225px;
}
                                                      


.navbar-collapse {
    padding-left: 15px !important;
    padding-right: 15px !important;
}

}

/* New */

.navbar-side .side-nav .panel {
 margin: 0px;
 padding: 0px;
}

.navbar-side ul.side-nav {
  background-color: #234;
  border-bottom: 1px solid #54677A;
  font-size: 13px;
  margin-bottom: 0;
  margin-top: 0;
  border-left: 1px solid #54677A;
}

.navbar-side .navbar-nav > li > a:hover {
  background-color:#123  !important;
}

.navbar-side .navbar-nav > li > a:focus {
  background-color:#fff !important;
}

.navbar-side .navbar-nav > li > a:active {
 background-color: #123 !important;
 color: #000;
 outline: medium none;
 text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1)
}

.navbar-side .navbar-nav > li > a {
 background-color: #234;
 outline: medium none;
 text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
}

.navbar-side .navbar-nav .sublink {
  color: #000 ;
}

.navbar-side .side-nav li, .navbar-side .side-nav li.panel {
 border-bottom: 1px solid #142638;
 border-top: 1px solid #54677A;
 border-left: 1px solid #54677A;
 border-right: 1px solid #54677A;
}
.navbar-side .side-nav li.panel ul li {
 border-bottom: medium none;
 border-top: medium none;
}

/* Top Menu Color */

.navbar-s1 {
  background-color: #234;
  margin-left: 0;
  border-bottom: 2px solid #2C3E50;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  z-index: 1030;
}
    
.navbar-s1 .navbar-brand {                                   #2C3E50
  display: inline-block;
  transition: all 0.3s ease-in-out 0s;
}

.navbar-s1 .navbar-brand:hover,
.navbar-s1 .navbar-brand:focus {
  color: #ffffff;
  background-color: transparent;
}

.navbar-s1 .navbar-text {
  color: #ffffff;
}

.navbar-s1 .navbar-nav > li > a {
  color: #ffffff;
}

.navbar-s1 .navbar-nav > li > a:hover,
.navbar-s1 .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}

.navbar-s1 .navbar-nav > .active > a,
.navbar-s1 .navbar-nav > .active > a:hover,
.navbar-s1 .navbar-nav > .active > a:focus {
  color: #000000;
  background-color: #ffffff;
}

.navbar-s1 .navbar-nav > .disabled > a,
.navbar-s1 .navbar-nav > .disabled > a:hover,
.navbar-s1 .navbar-nav > .disabled > a:focus {
  color: #444444;
  background-color: transparent;
}

.navbar-s1 .navbar-toggle {
  border-color: #333333;
}

.navbar-s1 .navbar-toggle:hover,
.navbar-s1 .navbar-toggle:focus {
  background-color: #333333;
}

.navbar-s1 .navbar-toggle .icon-bar {
  background-color: #ffffff;
}

.navbar-s1 .navbar-collapse,
.navbar-s1 .navbar-form {
  border-color: #101010;
}

.navbar-s1 .navbar-nav > .open > a,
.navbar-s1 .navbar-nav > .open > a:hover,
.navbar-s1 .navbar-nav > .open > a:focus {
  color: #ffffff;
  background-color: #080808;
}

@media (max-width: 767px) {
  .navbar-s1 .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu > li > a {
    color: #999999;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-s1 .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: transparent;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-s1 .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-s1 .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #080808;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-s1 .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-s1 .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444444;
    background-color: transparent;
  }
}

.navbar-s1 .navbar-link {
  color: #999999;
}

.navbar-s1 .navbar-link:hover { 
  color: #ffffff;
}

</style>

<body>
<nav class="navbar navbar-s1 navbar-side  navbar-fixed-top " role="navigation" >
  
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>


</div>

<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul id="side" class="nav navbar-nav side-nav">
  
<li class="side-user">
  <img src="/Project/images/ad.png" class="img-circle" style="background-color: #fff; height: 100px;width: 100px;margin-right:50px;">
    

</li>  
<li><a href="addstudent.php"><i class="fa fa-dashboard"></i><span class="glyphicon glyphicon-tasks"></span> Add Student</a></li>
<li><a href="addcourse.php"><i class="fa fa-dashboard"></i><span class="glyphicon glyphicon-tasks" style=""></span> Add Course</a></li>
<li><a href="addadmin.php"><i class="fa fa-dashboard"></i><span class="glyphicon glyphicon-tasks" style=""></span> Add Admin</a></li>
<li><a href="managestudent.php"><i class="fa fa-dashboard"></i><span class="glyphicon glyphicon-gift" style=""></span> Manage Student</a></li>
<li><a href="searchstudent.php"><i class="fa fa-dashboard"></i><span class="glyphicon glyphicon-gift" style=""></span> Search Student</a></li>
<li><a href="studentdetails.php"><i class="fa fa-dashboard"></i><span class="glyphicon glyphicon-gift" style=""></span> Add Students details</a></li>
<?php
 if(isset($_SESSION['name'])){
?>
<li><a href="changepassword.php"><i class="fa fa-dashboard"></i><span class="glyphicon glyphicon-gift" style=""></span>Change password</a></li>

<?php
}
?>




  
</ul>
<ul class="nav navbar-nav navbar-right  " >

<!--message session end here-->

<!--Notification session ends here-->
<li class="dropdown" style="font-size: 20px; font-family: 'ubuntu'" ><!--Profile session-->
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<span class="glyphicon glyphicon-user"></span>
 Admin 
<b class="caret"></b>
</a>
<ul class="dropdown-menu" ">
<li><a href="/Project/validation/alogout.php" style="text-align: center;" ><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
</ul>
</li><!--Profile session endes here-->
</ul>
</div>
</nav><!---
<ul class="nav navbar-nav navbar-right">
<li class="dropdown user-dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> logged in as<b class="caret"></b></a>
<ul class="dropdown-menu">
<li class="dropdown-header">Store <i class="fa fa-shopping-cart"></i></li>

<li><a href="" target="_blank">Your Demo Store</a></li>

<li class="divider"></li>
<li><a class="sublink" href="">Profile</a></li>
<li><a class="sublink" href="">Settings</a></li>
<li><a class="sublink" href="">logout</a></li>
</ul>
</li>
</ul>-->



</div>
</div>


</div>

  </div>







