<?php
if(($_SERVER['REQUEST_METHOD'])=="POST")
{
	$cname=$_REQUEST['name'];
	$cmobile=$_REQUEST['Mobile'];
	$cemail=$_REQUEST['Email'];
	$caddrs=$_REQUEST['add'];
	$pass=$_REQUEST['pass'];
}
//database connection
$servername="localhost";
$username="root";
$password="";
$database="customer";	
$conn=mysqli_connect($servername,$username,$password,$database);
$sql="INSERT INTO `customer`(`custname`,`custmobile`,`custemail`,`custadd`,`pass`) VALUES ('$cname','$cmobile','$cemail','$caddrs','$pass')";
$result=mysqli_query($conn,$sql);
if($result){
echo "<script> alert('registered successfully');";
echo "window.location='login.php'";
echo "</script>";
}
?>	