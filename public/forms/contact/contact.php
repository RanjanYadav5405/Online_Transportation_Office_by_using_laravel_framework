<?php
 
if(isset($_POST['submit']))
{ 
    $Name= $_POST["name"];
    $Email= $_POST["email"];
	$Message= $_POST["message"];
}
 
$con = mysqli_connect("localhost","root","","contact");
$sql="INSERT INTO customer(Name,Email,Message) VALUES (' $Name','$Email','$Message');";

$que=mysqli_query($con,$sql);

if($que){
   echo "insert operation successfully";
}
else{
    echo "error";
}


?>