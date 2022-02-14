<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>PHP Contact Form - Dev Ingredients</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<?php
		if (isset($_POST['submit'])) {
		$error = "";

		if (!empty($_POST['name'])) {
		$name = $_POST['name'];
		} else {
		$error .= "You didn't type in your name. <br />";
		}

		if (!empty($_POST['email'])) {
		$email = $_POST['email'];
		  if (!preg_match("/^[a-z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){ 
		  $error .= "The e-mail address you entered is not valid. <br/>";
		  }
		} else {
		$error .= "You didn't type in an e-mail address. <br />";
		}

		if (!empty($_POST['message'])) {
		$message = $_POST['message'];
		} else {
		$error .= "You didn't type in a message. <br />";
		}

		if(($_POST['code']) == $_SESSION['code']) { 
		$code = $_POST['code'];
		} else { 
		$error .= "The captcha code you entered does not match. Please try again. <br />";    
		}

		if (empty($error)) {
		$from = 'From: ' . $name . ' <' . $email . '>';
		$to = "your@email.com";
		$subject = "New contact form message";
		$content = $name . " has sent you a message: \n" . $message;
		$success = "<h3>Thank you! Your message has been sent!</h3>";
		mail($to,$subject,$content,$from);
		}
		}
		?>
	
		<div id="contactForm">
		
		<h2>Contact me</h2>
		
		<?php
			if (!empty($error)) {
			echo '<p class="error"><strong>Your message was NOT sent<br/> The following error(s) returned:</strong><br/>' . $error . '</p>';
			} elseif (!empty($success)) {
			echo $success;
			}
		?>
			<form action="contact.php" method="post">
			
				<label>Name:</label>
				<input type="text" name="name" value="<?php if($_POST['name']) { echo $_POST['name']; } ?>" />
	
				<label>Email:</label>
				<input type="text" name="email" value="<?php if($_POST['email']) { echo $_POST['email']; } ?>" />
				
				<label>Message:</label><br />
				<textarea name="message" rows="20" cols="20"><?php if($_POST['message']) { echo $_POST['message']; } ?></textarea>
				
				<label><img src="captcha.php"></label>
				<input type="text" name="code"> <br /> 

				<input type="submit" class="submit" name="submit" value="Send message" />
				
			</form>
		</div>
	</body>
</html>