<?php
include 'connection.php';
include 'header2.php';


?>


<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-0 col-xs-0 ">
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 ">
      <?php
       $sel="SELECT*FROM studentsignup";
       $sel2=mysqli_query($con,$sel);


      ?>
<div >
      <table class="table bordered table-hover table-striped" border="1" style="border:1px solid black; border-style:dash; border-radius:5px;padding: 10px;">
      	
      <thead>
      	<th>SURNAME</th>
      	<th>FIRST NAME</th>
      	<th>LAST NAME</th>
      	<th>GENDER</th>
      	<th>EMAIL</th>
      	<th>PHONE</th>
      	<th>MATRIC NO</th>
      	<th>USERNAME</th>
      	<th>ACTION</th>
      	
      </thead>
      <tbody>


      <?php

      while($row=mysqli_fetch_assoc($sel2)){
      	echo "<tr class='warning'>";
      	echo "<td>".$row['surname']."</td>";
      	echo "<td>".$row['firstname']."</td>";
      	echo "<td>".$row[' lastname']."</td>";
      	echo "<td>".$row['  gender']."</td>";
      	echo "<td>".$row[' email']."</td>";
      	echo "<td>".$row[' phone']."</td>";
      	echo "<td>".$row[' matric']."</td>";
      	echo "<td>".$row['username']."</td>";
      	echo "<td><a href='add.php?user=".$row["username"]."'><button class='btn btn-primary'>Update Info</button></a></td>";


      	echo "</tr>";

      }



      ?>

</tbody>
      </table>
  </div>

</div>
</div>
</div>