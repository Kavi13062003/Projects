<?php
$n=$_POST['fname'];
$e=$_POST['email'];
$s=$_POST['feadback'];
$con=mysqli_connect("localhost","root","","portfolio");
$sql="INSERT INTO Mydeta(Full_Name,Email_id,Feadback) values ('$n','$e','$s')";
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