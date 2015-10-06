<?php

$connect = mysql_connect("localhost","root","");
$db= mysql_select_db("albanadb1",$connect);

 $name= $_POST["nm"];
 $email= $_POST["em"];
 $contact =$_POST["cn"];

 $password =$_POST["psd"];
 $captcha = $_POST["cap"];
 


if(isset($_POST['se']))
 {
      $sql = mysql_query("insert into info values('$name','$email','$contact','$password','$captcha')");
 
 
 
 
      if($sql)
	  {
	 $ms= "sucessfully inserted" ;
	// return $sql;
	  header("location:cus.php");
 }
 
 else
 {
	$ms= "try another email" ;
	// return $sql;
 }}


 ?>

	
 <html>
<head>
<link  href ="main.css" rel="stylesheet" type="text/css">
<title>INDEX </title>
</head>
 
 <body id="header">
 
</br>
<div class="d1">


<div class="d2">
    <form method="POST" action="regist.php">
<center>


<table border="0">
<font color="white">
<tr><td><h3><?php echo $ms; ?></h3></td></td>
<tr><th colspan="2" ><h1>REGISTER HERE </h1></th> </tr>
<tr><td></br></td></tr>

<tr><td><b><label class="e">NAME: </label><input type="text" name="nm" required autofocus />
<tr><td></br></td></tr>
<tr><td><b><label class="e">EMAIL: </label><input type="email" name="em" required />
<tr><td></br></td></tr>
<tr><td><b><label class="e">CONTACT: </label><input type="text" name="cn" />
<tr><td></br></td></tr>
<tr><td><b><label class="e">PASSWORD: </label><input type="password" name="psd" />

<tr><td></br></td></tr>
<tr><td></br></td></tr>
<tr><td><b><label class="e">CAPTCHA: </label><input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="10" size="32" />
				</td>
				<td> 
					<img id="imgCaptcha" src="create_image.php" />
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>
					<input id="btnCaptcha" type="button" value="Captcha Test" name="btnCaptcha" 
						onclick="getParam(document.frmCaptcha)" />
						
						
<tr><td><center> <input type="submit" value="SEND" name="se" /></td></tr>
</font>
</table>

</form>
</div>
</div>

</body>
</html>
