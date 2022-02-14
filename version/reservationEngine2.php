<?php
// validation
		if(($_POST['code']) == $_SESSION['code']) { 
		$code = $_POST['code'];
		} else { 
		$error .= "The captcha code you entered does not match. Please try again. <br />";
		}

		if (empty($error)) {
			$from = "jhoon.han@outlook.com";
			$to = "jhoon.han@outlook.com";
			$subject = "RESERVATION";
			$Name = Trim(stripslashes($_POST['Name'])); 
			$Tel = Trim(stripslashes($_POST['Tel'])); 
			$Email = Trim(stripslashes($_POST['Email'])); 
			$Date = Trim(stripslashes($_POST['Date'])); 
			$Guest = Trim(stripslashes($_POST['Guest'])); 
			$Patio = Trim(stripslashes($_POST['Patio'])); 
			$Message = Trim(stripslashes($_POST['Message']));
			$success = "<h3>Thank you! Your message has been sent!</h3>";
			mail($to,$subject,$from);
		}

			if (!empty($error)) {
			echo '<p class="error"><strong>Your message was NOT sent<br/> The following error(s) returned:</strong><br/>' . $error . '</p>';
			} elseif (!empty($success)) {
			echo $success;
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
$Body .= "Guest: ";
$Body .= $Guest;
$Body .= "\n";
$Body .= "Patio: ";
$Body .= $Patio;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
