<?php
 
if(isset($_POST['submit']))
{ 
    $Name = $_POST["name"];
    $Address = $_POST["address"];
	$Date_of_Make=$_POST["make"];
	$Model=$_POST["model"];
    $year=$_POST["year"];
	$License_Plate=$_POST["license_plate"];
}
 
$con = mysqli_connect("localhost","root","","Vehicle");
$sql="INSERT INTO register1(Name,Address,Date_of_Make,Model,year,License_Plate) VALUES ('$Name','$Address','$Date_of_Make','$Model','$year','$License_Plate');";

$que=mysqli_query($con,$sql);

if($que){
   echo "insert operation successfully";
}
else{
    echo "error";
}


?>