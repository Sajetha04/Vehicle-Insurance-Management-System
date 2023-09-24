<!DOCTYPE html>
<html>
<head>
<style>
div{border:2px solid blue;margin:auto;width:350px;height:310px;background-color:white;}
tr,td{padding:20px;width:350px;font_size:18px;}
</style>
</head>
<body>
<center><h1 color:teal>PAYMENT DETAILS</h1></center>
<center>
<div style="font-size:25 px">
<?php
$conn=mysqli_connect("localhost","root","","vehicle_insurance");
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
$pay_id=$_POST['pid'];
$acc_no=$_POST['acc'];
$amt=$_POST['amt'];
$sql="select * from payment where payment_id=$pay_id  ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo"ID:".$row["payment_id"]."<br>"."Name:".$row["payment_customer_id"]."<br>";
$sql5="select * from account where accno=$acc_no";
$res=mysqli_query($conn,$sql5);
if(mysqli_num_rows($res)>0)
{
header("Location:paysuc.html");
exit();
}
else
{
header("Location:notfound.html");
exit();
}
$sql2="UPDATE payment set payment_amount=$amt where payment_id=$pay_id";
$res2=mysqli_query($conn,$sql2)
{
echo"Successful";
}
$sql3="UPDATE payment set total_amt=tot_amt+$amt where payment_id=$pay_id";
$sql3="UPDATE account set amount=amount-$amt where accno=$acc_no";
mysqli_close($conn);
?>
</div>
</center>
</body>
</html>