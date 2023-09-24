<!DOCTYPE html>
<html>
<head>
<style>
div{border:2px solid blue;margin:auto;width:350px;height:310px;background-color:white;}
tr,td{padding:20px;width:350px;font_size:18px;}
p{font-size:20px;}
pre{font-family:times new roman;font-size:20px;}
</style>
</head>
<body>
<center><h1 color:teal>INSURANCE DETAILS</h1></center>
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
$ins_id=$_POST['id'];
$veh_id=$_POST['vid'];
$sql="select * from insurance where insurance_id=$ins_id and insurance_vehicle_id='$veh_id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_assoc($result);
echo"<p>INSURANCE_ID:".$row["insurance_id"]."<br></p>"."<p>VEHICLE_ID:".$row["insurance_vehicle_id"]."<br></p>"."<p>INSURANCE_NUMBER:".$row["insurance_number"]."<br></p>"."<p>INSURANCE_PREMIUM:".$row["insurance_premium"]."<br></p>"."<p>ISSUE_DATE:".$row["insurance_issue_date"]."<br></p>"."<p>INSURANCE_TYPE:".$row["insurance_type"]."<br></p>";
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
</html>