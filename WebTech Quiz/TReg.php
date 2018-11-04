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
	$TReg= $xml-> createElement("TReg");
	$xml->appendChild($TReg);
	
	$TRegDoc=$xml->createElement("TRegDoc");
	$TRegDoc->setAttribute("id",1);
	$TReg->appendChild($TRegDoc);
	
	$uname=$xml->createElement("uname", "Salman");
	$TRegDoc->appendChild($uname);
	
	$fname=$xml->createElement("fname", "Md Salman Sayeef");
	$TRegDoc->appendChild($fname);
	
	$email=$xml->createElement("email", "mdsalmansayeef@gmail.com");
	$TRegDoc->appendChild($email);
	
	$phn=$xml->createElement("phn", "01813136452");
	$TRegDoc->appendChild($phn);
	
	$pwd=$xml->createElement("password", "1234");
	$TRegDoc->appendChild($pwd);
	
	$conpwd=$xml->createElement("confpass", "1234");
	$TRegDoc->appendChild($conpwd);
	
	
	$TRegDoc=$xml->createElement("TRegDoc");
	$TRegDoc->setAttribute("id",2);
	$TReg->appendChild($TRegDoc);
	
	$uname=$xml->createElement("uname", "Azhar");
	$TRegDoc->appendChild($uname);
	
	$fname=$xml->createElement("fname", "Md Azhar Uddin");
	$TRegDoc->appendChild($fname);
	
	$email=$xml->createElement("email", "azharuddin@gmail.com");
	$TRegDoc->appendChild($email);
	
	$phn=$xml->createElement("phn", "01841328379");
	$TRegDoc->appendChild($phn);
	
	$pwd=$xml->createElement("password", "5678");
	$TRegDoc->appendChild($pwd);
	
	$conpwd=$xml->createElement("confpass", "5678");
	$TRegDoc->appendChild($conpwd);
	
	echo "<xmp>".$xml->saveXML()."</xml>";
	
	$xml->save ("a.xml") or die("Error, Unable to create XML file");
	
}

	/*if(isset($_REQUEST['Submit'])){
		$xml= new DOMDocument("1.0", "UTF-8");
		$xml->load("a.xml");
		$rootTag= $xml->getElementsByTagName("TReg documents")->item(0);
		$dataTag= $xml-> createElement("data");
		$unameTag= $xml-> createElement("uname", $_REQUEST['uname']);
		$fnameTag= $xml-> createElement("fname", $_REQUEST['fname']);
		$emailTag= $xml-> createElement("email", $_REQUEST['email']);
		$phnTag= $xml-> createElement("phn", $_REQUEST['phn']);
		$pwdTag= $xml-> createElement("pwd", $_REQUEST['pwd']);
		$conpwdTag= $xml-> createElement("conpwd", $_REQUEST['conpwd']);
		
		
		$dataTag->appendChild($unameTag);
		$dataTag->appendChild($fnameTag);
		$dataTag->appendChild($emailTag);
		$dataTag->appendChild($phnTag);
		$dataTag->appendChild($pwdTag);
		$dataTag->appendChild($conpwdTag);
		
		//append data to documents
		$rootTag->appendChild($dataTag);
		
		//save data to documents
		$xml->save ("a.xml") or die("Error, Unable to create XML file");
	}*/

?>


<form method="post" action="TReg.php">

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
	
	<input type="submit" name="Submit" value="Submit">
</form>



</body>
</head>
</html>