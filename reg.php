  
<html>  
<body>  
<p  style="color:rgb(153,  0,  	255);font-size:150%;">WELCOME  <?php  echo $_POST["name"];?></p><br>  
<b>DATA ENTERED:</b><br>  
Name:<?php echo $_POST["name"]; ?><br>  
Age:<?php echo $_POST["age"]; ?><br>  
Registration Number::<?php echo $_POST["regno"]; ?><br>  
Date of Birth:<?php echo $_POST["bd"]; ?><br>  
Permanent Address:<?php echo $_POST["message"]; ?><br>  
	Educational 	level:<br> 
<?php if(isset($_POST['submit']))  
{ 	if(!empty($_POST['edu'])) 	{ foreach($_POST['edu'] as $value){ echo 
"Chosen : ".$value.'<br/>';  
}  
}  
}?>  
Language:<br> 	<?php if(isset($_POST['submit'])){ if(!empty($_POST['lang'])) 	{  foreach($_POST['lang'] 	as $value){ 	echo 	"Chosen 	: 
".$value.'<br/>';  
}   
}  
}  
?>  
Gmail:<?php echo $_POST["gmail"]; ?><br>  
Password:<?php echo $_POST["pw"]; ?><br>  
Country:<?php echo $_POST["pw"]; ?><br>  
</body></html>  
  
