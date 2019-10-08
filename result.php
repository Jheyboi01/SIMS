<?php

include 'connection.php';
include 'header2.php';
if(isset($_POST['search'])){
$se=$_POST['name'];


?>

<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-0 col-xs-0 ">
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 ">
      <?php
       $sel="SELECT*FROM studentsignup WHERE username='$se'";
       $sel2=mysqli_query($con,$sel);
       $match=mysqli_num_rows($sel2);
       if($match<1){
       	echo '<div  style="border:1px solid red; border-style:dotted; border-radius:5px;padding: 10px;" ><center><b>NO RESULT FOUND</b></center></div>';
       } 
       else{


      ?>
<div >
      <table class="table bordered table-hover table-striped" border="1" style="border:1px solid red; border-style:dotted; border-radius:5px;padding: 10px;">
      	
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
      	echo "<td><a href='delete.php?user=".$row["username"]."'><button class='btn btn-primary'>Delete</button></a></td>";
         echo "<td><a href='add.php?user=".$row["username"]."'><button class='btn btn-primary'>Update Info</button></a></td>";

      	echo "</tr>";

      }
      }

}

      ?>

</tbody>
      </table>
  </div>

</div>
</div>
</div>