<!DOCTYPE html>
<html>
<head>
<style>
div{border:2px solid blue;margin:auto;width:350px;height:310px;background-color:white;}
tr,td{padding:20px;width:350px;font_size:18px;}
</style>
</head>
<body>
<form>
<center><h1 color:teal>CUSTOMER DETAILS</h1></center>
<center>
<table>
<tr>
<td style="margin-left:200px">
<img src="5.jpeg" height="450px" width="450px" >
</td>
<td>
<center>
<div>
<?php
$conn=mysqli_connect("localhost","root","","vehicle_insurance");
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
$cus_id=$_POST['cid'];
$cus_name=$_POST['cname'];
$sql="select * from customers where customer_id='$cus_id' and customer_name='$cus_name' ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_assoc($result);
echo"ID:".$row["customer_id"]."<br>"."Name:".$row["customer_name"]."<br>"."Age:".$row["customer_age"]."<br>"."Address:".$row["customer_address"]."<br>";
}
else
{
header("Location:notfound.html");
exit();
}

mysqli_close($conn);
?>
</div>
</center>
</td>
</tr>
</table>
</center>
</body>
<p>CLICK TO CONFIRM</p>
<a href="insurance.html">Click here</a>

</form>
</html>