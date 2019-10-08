<?php
include 'connection.php';
include 'header2.php';
$user=$_GET['user'];



if(isset($_FILES['filefield']) && isset($_POST['upload'])){
	$ady=$_POST['ady'];
	$gy=$_POST['gy'];
	$cgpa=$_POST['cgpa'];
	$dpt=$_POST['dpt'];
	$c1=$_POST['c1'];
	$c2=$_POST['c2'];
	$c3=$_POST['c3'];
	$c4=$_POST['c4'];
	$c5=$_POST['c5'];
	$c6=$_POST['c6'];
	$c7=$_POST['c7'];
	$c8=$_POST['c8'];
	$d1=$_POST['d1'];
	$d2=$_POST['d2'];
	$d3=$_POST['d3'];
	$d4=$_POST['d4'];
	$d5=$_POST['d5'];
	$d6=$_POST['d6'];
	$d7=$_POST['d7'];
	$d8=$_POST['d8'];
	$e1=$_POST['e1'];
	$e2=$_POST['e2'];
	$e3=$_POST['e3'];
	$e4=$_POST['e4'];
	$e5=$_POST['e5'];
	$e6=$_POST['e6'];
	$e7=$_POST['e7'];
	$e8=$_POST['e8'];
	$f1=$_POST['f1'];
	$f2=$_POST['f2'];
	$f3=$_POST['f3'];
	$f4=$_POST['f4'];
	$f5=$_POST['f5'];
	$f6=$_POST['f6'];
	$f7=$_POST['f7'];
	$f8=$_POST['f8'];

	
	

$file=$_FILES['filefield'];

$upload_directory='upload/';

$ext_str = "gif,jpg,jpeg,mp3,tiff,bmp,doc,docx,ppt,pptx,txt,pdf,png";

$allowed_extensions=explode(',',$ext_str);

$max_file_size = 10000485760;//10 mb remember 1024bytes =1kbytes /* check allowed extensions here */

$ext = substr($file['name'], strrpos($file['name'], '.') + 1); //get file extension from last sub string from last . character

if (!in_array($ext, $allowed_extensions) ) {

echo "only".$ext_str." files allowed to upload"; // exit the script by warning

 

} /* check file size of the file if it exceeds the specified size warn user */

 

if($file['size']>=$max_file_size){

 

echo "only the file less than ".$max_file_size."mb  allowed to upload"; // exit the script by warning

}

//if(!move_uploaded_file($file['tmp_name'],$upload_directory.$file['name'])){md5(microtime()).'.'.$ext

$path= $file['name'];
$path= sha1($path).'.png';

if(move_uploaded_file($file['tmp_name'],$upload_directory.$path)){

//mysqli_connect("localhost","root","7250");

//mysqli_select_db("examination");

/*echo"<script>alert('Your File Successfully Uploaded');</script>";*/

/*mysqli_query($conn,"INSERT INTO upload(id,pat,year,firm,term,sub,class) VALUES ('', '$path','$year','$firm','$term','$sub','$class')");*/

$sub=mysqli_query($con,"UPDATE studentsignup SET admission='$ady', graduation='$gy', cgpa='$cgpa', pat='$path',dpt='$dpt',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',d1='$d1',d2='$d2',d3='$d3',d4='$d4',d5='$d5',d6='$d6',d7='$d7',d8='$d8',e1='$e1',e2='$e2',e3='$e3',e4='$e4',e5='$e5',e6='$e6',e7='$e7',e8='$e8',f1='$f1',f2='$f2',f3='$f3',f4='$f4',f5='$f5',f6='$f6',f7='$f7',f8='$f8' WHERE username='$user'");
if($sub){
echo"<script>alert('Record Updated');</script>";
}
else{
	echo"<script>alert('error');</script>";
	echo mysqli_error($con);
}
}

else{

echo "<script>alert('The file cant moved to target directory.')
  location='add.php';
</script>";
echo mysqli_error($con);
 //file can't moved with unknown reasons likr cleaning of server temperory files cleaning

}

}

/*
46
 
47
Hurrey we uploaded a file to server successfully.
48
 
49
*/

?>


?>


<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-0 col-xs-0 ">
		</div>
		<div class="col-md-9 col-sm-12 col-xs-12 ">
<form  method="post" style="height: 300px; border-top:5px solid #234; margin-top: 100px;border-radius: 10px;"  enctype="multipart/form-data" >
	<center><b style="background-color: #234; color: white; text-align: center; padding: 0px 5px;">Update Student Info <br><h1 style="color:black">Student's Username: <?php echo $user;?></h1></b></center>
	
<div class="form-group">
<input type="text" class="form-control" placeholder="Admission Year" required="required"  name='ady'><br>	
<input type="text" class="form-control" placeholder="Graduation Year" required="required"  name="gy"><br>
<input type="text" class="form-control" placeholder="CGPA" required="required"  name="cgpa">
</div>
<input id="filefield" type="file" name="filefield" class="form-control " required="required" /><br>
<input id="filefield" type="text" name="dpt" class="form-control " required="required" placeholder="Department" />
<div><h5 style="color:white;background-color: #234; text-align: center;">100 Level first semester courses</h5></div>
<select class="form-control" name="c1" required="required"  >
                         	<option disabled="disabled" selected="selected">Course 1</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="c2" required="required" >
                         	<option disabled="disabled" selected="selected">Course 2</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="c3" required="required" >
                         	<option disabled="disabled" selected="selected">Course 3</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="c4" required="required" >
                         	<option disabled="disabled" selected="selected">Course 4</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<div><h5 style="color:white;background-color: #234; text-align: center;">100 Level second semester courses</h5></div>
<select class="form-control" name="c5" required="required"  >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="c6" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="c7" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="c8" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<div><h5 style="color:white;background-color: #234; text-align: center;">200 Level first semester courses</h5></div>
<select class="form-control" name="d1" required="required"  >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="d2" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="d3" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="d4" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>


<div><h5 style="color:white;background-color: #234; text-align: center;">200 Level Second semester courses</h5></div>
<select class="form-control" name="d5" required="required"  >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="d6" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="d7" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="d8" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>



<div><h5 style="color:white;background-color: #234; text-align: center;">300 Level first semester courses</h5></div>
<select class="form-control" name="e1" required="required"  >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="e2" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="e3" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="e4" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>




<div><h5 style="color:white;background-color: #234; text-align: center;">300 Second  semester courses</h5></div>
<select class="form-control" name="e5" required="required"  >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="e6" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="e7" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="e8" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>





<div><h5 style="color:white;background-color: #234; text-align: center;">400 First  semester courses</h5></div>
<select class="form-control" name="f1" required="required"  >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="f2" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="f3" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="f4" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>


<div><h5 style="color:white;background-color: #234; text-align: center;">400 Second  semester courses</h5></div>
<select class="form-control" name="f5" required="required"  >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="f6" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course</option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="f7" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<select class="form-control" name="f8" required="required" >
                         	<option disabled="disabled" selected="selected">Select Course </option>
                         	<?php
                            $sel='SELECT * FROM course';
                            $sel2=mysqli_query($con,$sel);
                            while($row=mysqli_fetch_assoc($sel2)){
                         	?>
                             
                             <option><?php echo $row['coursetitle'];?></option>
                             
                             <?php
                               }
                             ?>
</select>
<button type="submit" class="btn btn-lg btn-success  mt-3" name="upload">Submit</button>

</form>
</div>
</div>
</div>