<?php
 
if(isset($_POST['submit']))
{ 
    $f_Name= $_POST["name"];
	$l_Name= $_POST["lname"];
    $Email= $_POST["email"];
	$DD= $_POST["DD"];
	$MM= $_POST["MM"];
	$YYYY= $_POST["YY"];
	$Vehicle_Number= $_POST["ve"];
	
	$Card_Number = $_POST["number"];
	$Card_CVC = $_POST["cvc"];
}
 
$con = mysqli_connect("localhost","root","","payment");
$sql="INSERT INTO fine(f_Name,l_Name,Email,DD,MM,YYYY,Vehicle_Number,Card_Number,Card_CVC) VALUES ('$f_Name','$l_Name','$Email','$DD','$MM','$YYYY','$Vehicle_Number','$Card_Number','$Card_CVC');";

$que=mysqli_query($con,$sql);

if($que){
   echo "insert operation successfully";
}
else{
    echo "error";
}


?>