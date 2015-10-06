<?php

$connect = mysql_connect("localhost","root","");
$db= mysql_select_db("albanadb1",$connect);
 $email= $_POST["em"];
 $password =$_POST["psd"];
 $sql=mysql_query("select * from info where email='$email' and password='$password'");
 
$row=mysql_fetch_array($sql);
$cnt=mysql_num_rows($sql);

if(isset($_POST['se']))
 {
     if($cnt==1)
	 {
		 session_start();
		 $_SESSION['id']=$row['rname'];
		 header("location:home.php");
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
    <form method="POST" action="login.php">
<center>


<table border="0">
<font color="white">
<tr><td><h3><?php echo $ms; ?></h3></td></td>
<tr><th colspan="2" ><h1>LOGIN HERE </h1></th> </tr>

<tr><td><b><label class="e">EMAIL: </label><input type="email" name="em" required />

<tr><td><b><label class="e">PASSWORD: </label><input type="password" name="psd" />

<tr><td></br></td></tr>
<tr><td><center> <input type="submit" value="SEND" name="se" /></td></tr>
</font>
</table>

</form>
</div>
</div>

</body>
</html>
