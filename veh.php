<!DOCTYPE html>
<html>
<head>
<style>
div{border:4px solid blue;margin:auto;width:600px;height:310px;background-color:white;}
tr,td{padding:20px;width:350px;font_size:18px;}
p{font-size:20px;}
pre{font-family:times new roman;font-size:20px;}
</style>
</head>
<body>
<center><h1 color:teal>VEHICLE DETAILS</h1></center>
<center>
<table>
<tr>
<td style="margin-left:200px">
<img src="8.jpeg" height="450px" width="450px" >
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
$veh_id=$_POST['vid'];
$sql="select * from vehicle where vehicle_id='$veh_id' and vehicle_customer_id='$cus_id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_assoc($result); 
echo"<p><pre>  CUSTOMER_ID:".$row["vehicle_customer_id"]."<br></pre></p>"."<p><pre>VEHICLE_ID:".$row["vehicle_id"]."<br></pre></p>"."<p><pre>           VEHICLE NUMBER:".$row["vehicle_number"]."<br></pre></p>"."<p><pre>                   VEHICLE TYPE:".$row["vehicle_type"]."<br></pre></p>"."<p><pre>                                   VEHICLE DESCRIPTION:".$row["vehicle_description"]."<br></pre></p>";
} 
else
{
header("Location:notfound.html");
exit();
}


mysqli_close($conn);
?>
</div>
</td>
</tr>
</table>
</center>
</center>
</body>
</html>