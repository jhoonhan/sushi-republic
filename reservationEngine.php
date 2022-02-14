<?php

$EmailFrom = $_POST['Email'];
$EmailTo = "jhoon.han@outlook.com";
$Subject = "Online Reservation f(0001)";
$Name = Trim(stripslashes($_POST['Name'])); 
$Tel = Trim(stripslashes($_POST['Tel'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Date = Trim(stripslashes($_POST['Date'])); 
$Time = Trim(stripslashes($_POST['Time'])); 
$Guest = Trim(stripslashes($_POST['Guest'])); 
$Patio = Trim(stripslashes($_POST['Patio'])); 
$Message = Trim(stripslashes($_POST['Message']));
$Subscribe = $_POST['Subscribe'];


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Date: ";
$Body .= $Date;
$Body .= "\n";
$Body .= "Time: ";
$Body .= $Time;
$Body .= "\n";
$Body .= "Guest: ";
$Body .= $Guest;
$Body .= "\n";
$Body .= "Patio: ";
$Body .= $Patio;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "Subscribe: ";
$Body .= $Subscribe;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
	$email=$_POST['Email'];
    $subject = 'Your reservation request has been submitted';
    $message = 'We have received your reservation request.
We will contact you if there is a time conflict.
If you wish to make a change to your reservation request, please give us a call, (336) 274-6684.

Thank you!
	
Sushi Republic';
    mail($email, $subject, $message, "From: <$EmailTo>");
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>