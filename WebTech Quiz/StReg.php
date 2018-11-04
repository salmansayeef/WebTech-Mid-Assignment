<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$uname; $fname; $email; $phn; $pwd; $conpwd; $gender;

if(isset($_REQUEST['Submit'])){
	$xml= new DOMDocument("1.0");
	$xml-> formatOutput=true;
	$StReg= $xml-> createElement("StReg");
	$xml->appendChild($StReg);
	
	$StRegDoc=$xml->createElement("StRegDoc");
	$StRegDoc->setAttribute("id",1);
	$StReg->appendChild($StRegDoc);
	
	$uname=$xml->createElement("uname", "Hasib");
	$StRegDoc->appendChild($uname);
	
	$fname=$xml->createElement("fname", "Md Azman Hasib");
	$StRegDoc->appendChild($fname);
	
	$email=$xml->createElement("email", "azmanhasib@gmail.com");
	$StRegDoc->appendChild($email);
	
	$phn=$xml->createElement("phn", "01911933376");
	$StRegDoc->appendChild($phn);
	
	$pwd=$xml->createElement("password", "0620236");
	$StRegDoc->appendChild($pwd);
	
	$conpwd=$xml->createElement("confpass", "0620236");
	$StRegDoc->appendChild($conpwd);
	
	
	$StRegDoc=$xml->createElement("StRegDoc");
	$StRegDoc->setAttribute("id",2);
	$StReg->appendChild($StRegDoc);
	
	$uname=$xml->createElement("uname", "Rita");
	$StRegDoc->appendChild($uname);
	
	$fname=$xml->createElement("fname", "Sharmin Akter Rita");
	$StRegDoc->appendChild($fname);
	
	$email=$xml->createElement("email", "sharmin@gmail.com");
	$StRegDoc->appendChild($email);
	
	$phn=$xml->createElement("phn", "01916083954");
	$StRegDoc->appendChild($phn);
	
	$pwd=$xml->createElement("password", "083954");
	$StRegDoc->appendChild($pwd);
	
	$conpwd=$xml->createElement("confpass", "083954");
	$StRegDoc->appendChild($conpwd);
	
	echo "<xmp>".$xml->saveXML()."</xml>";
	
	$xml->save ("b.xml") or die("Error, Unable to create XML file");
	
}

?>

<form method="post" action="StReg.php">

	Username: <input type="text" name="uname">
	<br><br>
	
	Fullname: <input type="text" name="fname">
	<br><br>
	
	Email: <input type="text" name="email">
	<br><br>
	
	Phonenumber: <input type="text" name="phn">
	<br><br>
	
	Password: <input type="password" name="pwd">
	<br><br>
	
	ConfirmPassword: <input type="password" name="conpwd">
	<br><br>
	
	Gender: 
	<input type="radio" name="gender" value="Female">Female
	<input type="radio" name="gender" value="Male">Male
	<input type="radio" name="gender" value="Other">Other  
	<br><br>
	
	 Education:
	<input type="checkbox" name="edu" value="SSC"/>SSC
	<input type="checkbox" name="edu" value="SSC"/>HSC	
	<input type="checkbox" name="edu" value="SSC"/>BSC
	<input type="checkbox" name="edu" value="SSC"/>MSC
	<br><br>
	
	<input type="submit" name="Submit" value="Submit">
</form>



</body>
</head>
</html>
