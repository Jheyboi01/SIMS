<?php
include 'connection.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
    <title>STUDENT DASHBOARD</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row center-lg">
                <div class="col-sm-6">
                    <img class="my-0 " src="images/logo1.png" alt="OOUC logo">
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        <div class="container">                      
        <a href="index.php" class="navbar navbar-brand btn btn-outline-light text-center">Home</a>
        <div class="collapse navbar-collapse">
                <ul class="nav navbar ml-auto">
                   <!-- <li class="nav-item"><a href="studentlogin.php" class="nav-link btn btn-outline-light text-center"></a></li>-->
                    <li class="nav-item"><a href="/Project/validation/alogout.php" class="nav-link btn btn-outline-light text-center ml-3">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav> 

<body style="background-color: #fff;">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 ">
      <?php
      $user=$_SESSION['username'];
      $password=$_SESSION['password'];
       $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);


      ?>
<div >
      <table class="table bordered table-hover table-striped mt-3" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        
      <thead style=" background-color: #234; color: white;">
        <th>SURNAME</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>GENDER</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>MATRIC NO</th>
        <th>USERNAME</th>
       
        
      </thead>
      <tbody>


      <?php
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>".$row['surname']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row[' lastname']."</td>";
        echo "<td>".$row['  gender']."</td>";
        echo "<td>".$row[' email']."</td>";
        echo "<td>".$row[' phone']."</td>";
        echo "<td>".$row[' matric']."</td>";
        echo "<td>".$row['username']."</td>";
        


        echo "</tr>";

      //}



      ?>

</tbody>
      </table>
  </div>

</div> 
</div>
<div class="row">   
<div class="col-md-12 col-sm-12 col-xs-12">
    <?php 
    $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
     $row=mysqli_fetch_assoc($sel2);
     
    echo "<img src='/Project/upload/".$row["pat"]."' height='200' width='200'>";?>
    

</div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
          <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        
      <thead style=" background-color: #234; color: white;">
        <th>Admission Year</th>
        <th>Graduation Year</th>
        <th>CGPA</th>
        <th>Department</th>
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>".$row['admission']."</td>";
        echo "<td>".$row['graduation']."</td>";
        echo "<td>".$row['cgpa']."</td>";
        echo "<td>".$row['dpt']."</td>";
        


        echo "</tr>";

      //}



      ?>

</tbody>
      </table>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #234;color:#fff;">100 Level Courses</h4></div>
      <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #fff;"> First Semester </h4></div>
        
      <thead>
        <!--<th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        <th>Course 4</th>-->
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>Course 1</td>";
        echo "<td>".$row['c1']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 2</td>";
        echo "<td>".$row['c2']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 3</td>";
        echo "<td>".$row['c3']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 4</td>";
        echo "<td>".$row['c4']."</td>";
         echo "<tr >";

        

      //}



      ?>

</tbody>
      </table>




            <table class="table bordered table-hover table-striped" border="1" style="border:1px solid #234; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #fff;"> Second Semester </h4></div>
        
      <thead>
        <!--<th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        <th>Course 4</th>-->
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>Course 1</td>";
        echo "<td>".$row['c5']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 2</td>";
        echo "<td>".$row['c6']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 3</td>";
        echo "<td>".$row['c7']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 4</td>";
        echo "<td>".$row['c8']."</td>";
         echo "<tr >";

        

      //}



      ?>

</tbody>
      </table>
</div>





<div class="col-md-12 col-sm-12 col-xs-12">
    <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #234;color:#fff;">200 Level Courses</h4></div>
      <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #fff;"> First Semester </h4></div>
        
      <thead>
        <!--<th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        <th>Course 4</th>-->
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>Course 1</td>";
        echo "<td>".$row['d1']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 2</td>";
        echo "<td>".$row['d2']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 3</td>";
        echo "<td>".$row['d3']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 4</td>";
        echo "<td>".$row['d4']."</td>";
         echo "<tr >";

        

      //}



      ?>

</tbody>
      </table>




            <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #fff;"> Second Semester </h4></div>
        
      <thead>
        <!--<th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        <th>Course 4</th>-->
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>Course 1</td>";
        echo "<td>".$row['d5']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 2</td>";
        echo "<td>".$row['d6']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 3</td>";
        echo "<td>".$row['d7']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 4</td>";
        echo "<td>".$row['d8']."</td>";
         echo "<tr >";

        

      //}



      ?>

</tbody>
      </table>
</div>




<div class="col-md-12 col-sm-12 col-xs-12">
    <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #234;color:#fff;">300 Level Courses</h4></div>
      <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #fff;"> First Semester </h4></div>
        
      <thead>
        <!--<th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        <th>Course 4</th>-->
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>Course 1</td>";
        echo "<td>".$row['e1']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 2</td>";
        echo "<td>".$row['e2']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 3</td>";
        echo "<td>".$row['e3']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 4</td>";
        echo "<td>".$row['e4']."</td>";
         echo "<tr >";

        

      //}



      ?>

</tbody>
      </table>




            <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #fff;"> Second Semester </h4></div>
        
      <thead>
        <!--<th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        <th>Course 4</th>-->
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>Course 1</td>";
        echo "<td>".$row['e5']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 2</td>";
        echo "<td>".$row['e6']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 3</td>";
        echo "<td>".$row['e7']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 4</td>";
        echo "<td>".$row['e8']."</td>";
         echo "<tr >";

        

      //}



      ?>

</tbody>
      </table>
</div>




<div class="col-md-12 col-sm-12 col-xs-12">
    <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #234;color:#fff;">400 Level Courses</h4></div>
      <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #fff;"> First Semester </h4></div>
        
      <thead>
        <!--<th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        <th>Course 4</th>-->
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>Course 1</td>";
        echo "<td>".$row['f1']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 2</td>";
        echo "<td>".$row['f2']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 3</td>";
        echo "<td>".$row['f3']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 4</td>";
        echo "<td>".$row['f4']."</td>";
         echo "<tr >";

        

      //}



      ?>

</tbody>
      </table>




            <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;background-color: #fff" width="100%">
        <div><h4 style="padding: 10px; border: 1px solid #234; border-style:dash; text-align: center;background-color: #fff;"> Second Semester </h4></div>
        
      <thead>
        <!--<th>Course 1</th>
        <th>Course 2</th>
        <th>Course 3</th>
        <th>Course 4</th>-->
        
       
        
      </thead>
      <tbody>


      <?php
      $sel=" SELECT * FROM `studentsignup` WHERE `username`='$user' AND ` password` ='$password'";
       $sel2=mysqli_query($con,$sel);
       $row=mysqli_fetch_assoc($sel2);
      //while($row=mysqli_fetch_assoc($sel2)){
        echo "<tr class='warning'>";
        echo "<td>Course 1</td>";
        echo "<td>".$row['f5']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 2</td>";
        echo "<td>".$row['f6']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 3</td>";
        echo "<td>".$row['f7']."</td>";
         echo "<tr >";

         echo "<tr class='warning'>";
        echo "<td>Course 4</td>";
        echo "<td>".$row['f8']."</td>";
         echo "<tr >";

        

      //}



      ?>

</tbody>
      </table>
</div>
</div>
</div>


</body>



<?php 
    require_once('footer.php');
?>








