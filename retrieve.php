<?php 
 session_start(); 
$_SESSION['Enter Your name'] = $_POST['fname']; echo "<br>"; echo "Your name is ".$_POST['fname']; echo "<br>"; 
$_SESSION['Enter Your email '] = $_POST['mail']; echo "<br>"; 
echo "Your email id is ".$_POST['mail']; echo "<br>"; 
$_SESSION['Enter Your phone number'] = $_POST['number']; echo "<br>"; echo "Your phone number is ".$_POST['number']; echo "<br>"; 
$_SESSION['Enter your street address'] = $_POST['address']; echo "Your street address is ".$_POST['address']; echo "<br>"; 
$_SESSION['Enter your region'] = $_POST['region']; echo "<br>"; echo "Your region is ".$_POST['region']; echo "<br>"; if (isset($_POST['yes'])){ echo" will you return with us?". $_POST['yes'];} echo "<br>"; if (isset($_POST['c1'])){ echo "Fare price is".$_POST['c1'];} 
?> 