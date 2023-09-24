<?php
$conn=mysqli_connect("localhost","root","","vehicle_insurance");
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
$cus_uname=$_POST['uname'];
$cus_pword=$_POST['password'];
$sql="select * from customers where customer_username='$cus_uname' and customer_password='$cus_pword' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
header("Location:home.html");
exit();
}
else
{
header("Location:notfound.html");
exit();
}
?>
