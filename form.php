<?php
$n=$_POST['fname'];
$s=$_POST['email'];
$con=mysqli_connect("localhost","root","","Mydata");
$sql="INSERT INTO UG(Full_Name,Email,Feedback) values ('$n','$s')";
$r=mysqli_query($con,$sql);
if($r)
{
echo "Successfully Submit";
}
else
{
echo "Not Added";
}
?>