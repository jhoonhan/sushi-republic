<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sushi Republic</title>
<meta property="fb:app_id" content="157070631510989" />
<meta property="og:image" content="http://sushirepublicgso.com/image/facebookPreview.jpg"/>
<meta property="og:title" content="Sushi Republic" />
<meta property="og:url" content="http://sushirepublicgso.com" />
<meta property="og:description" content="Welcome to Sushi Republic! Our award winning sushi has led us to the heart of Greensboro where we are consistently improving our signature dishes in order to remain in your hearts as well. It doesn’t matter if you are a beginner or the most advanced and adventurous sushi eater; we have something for you!" />
<link rel="image_src" href="image/facebookPreview.jpg"/>
<meta name="description" content="Welcome to Sushi Republic! Our award winning sushi has led us to the heart of Greensboro where we are consistently improving our signature dishes in order to remain in your hearts as well. It doesn’t matter if you are a beginner or the most advanced and adventurous sushi eater; we have something for you!">
<link href="scss/style.scss" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/fadeIn.css" rel="stylesheet" type="text/css">
<link href="css/lightbox.css" rel="stylesheet" type="text/css">
<link href="css/reservation.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/3.0.2/normalize.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="script/smoothscroll.js"></script>
<script type="text/javascript" src="script/fadeIn.js"></script>
<script type="text/javascript" src="script/addRemove.js"></script>
<script type="text/javascript" src="script/scrollMenu.js"></script>
<script type="text/javascript" src="script/pageLoader.js"></script>
<script type="text/javascript" src="js/clearbox.js"></script>
<script type="text/javascript" src="js/clearboxConfig.js"></script>
<script type="text/xml" src="js/clearboxXML.xml"></script>

</head>


<body>
<div id="pageLoader">
	<img src="image/logoShadowLoader.png" id="loaderLogo"alt=""/><br>
	<img src="image/loading2.gif" width="150" height="150">
</div>
	<header>	
		<nav id="mainNav">
			<ul>
				<li id="menuLi1" class="clickedMenuLi mainMenu"><a href="#home" id="menu1" class="clickedMenu">Home</a>
				<li id="menuLi12" class="mainMenu"><a href="#reservation" id="menu12">Reservation</a>
				<li id="menuLi2" class="mainMenu"><a href="#menu" id="menu2">Menu</a>
				<li id="menuLi3" class="mainMenu"><a href="#gallery" id="menu3">Gallery</a>
				<li id="menuLi4" class="mainMenu"><a href="#contact" id="menu4">Contact</a></li>
			</ul>
		</nav>
		<div id="scrollNavActivator">
			<img id="hamburger" src="image/hamburger.png"/></div>
		<div id="scrollNavDeactivator" class="hamburgerHiddenDeactivated">
			<img id="hamburger2" class="opacity0" src="image/hamburger2.png"/></div>
	  <div id="scrollNav" class="scrollNavDeactivated">
	  		<table width="100%" border="0" cellspacing="0" cellpadding="0" id="contactTable">
			  <tbody>
				<tr>
					<td align="center" valign="middle"><li id="menuLi1"><a href="#home" class="menu menuH1" id="menu1">Home</a></li></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><li id="menuLi12"><a href="#reservation" class="menu menuH12" id="menu12" style="font-size: 1.6em;">Reservation</a></li></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><li id="menuLi2"><a href="#menu" class="menu menuH2" id="menu2">Menu</a></li></td>
				</tr>
				<tr>
					<td align="center" valign="middle"><li id="menuLi3"><a href="#gallery" class="menu menuH3" id="menu3">Gallery</a></li></td>
				</tr>
				<tr>
				    <td align="center" valign="middle"><li id="menuLi4"><a href="#contact" class="menu menuH4" id="menu4">Contact</a></li></td>
				</tr>
			  </tbody>
			</table>
		</div>
		
</header>
		<div id="logo" class="alternateBand">
	    	<img id="logoIMG" src="image/logoShadow.png" alt="Home"/>
	    	<div id="logoTitle1" class="logoTitle"></div>
	    	<div class="logoContent logoContentActivated" id="logoContent1"></div>
	    	<div class="logoContent" id="logoContent2"></div>
	    	<div class="logoContent" id="logoContent3"></div>
	    	<div class="logoContent" id="logoContent4"></div>
	    </div>
	

	
	<main>
		<div class="row" id="home">
			<h1 class="sectionTitle">Home</h1>
			<div id="fadein">
				<div class="slider-fade" id="fade1"></div>
				<div class="slider-fade" id="fade2"></div>
				<div class="slider-fade" id="fade3"></div>
				<div class="slider-fade" id="fade4"></div>
				<div class="slider-fade" id="fade5"></div>
				<div class="slider-fade" id="fade6"></div>
				<div class="slider-fade" id="fade7"></div>
			</div>
		</div>
		
		
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
		<div class="row rowExpanded" id="reservation">
			<h1 class="sectionTitle">Reservation</h1>
			<div class="content" id="reservationWrapper">
				<div class="titleHodler">
					<img src="image/logoShadow.png" height="180px"/>
					<img class="titleFull" src="image/reservationTitleFull1.png" alt="Reservation" />
				</div>
				<img class="title" src="image/reservationTitle.png" alt="Reservation"/>
    			<div id="reservationHolder">
    				<p>Welcome to Sushi Republic! Our award winning sushi has led us to the heart of Greensboro where we are consistently improving our signature dishes in order to remain in your hearts as well. It doesn’t matter if you are a beginner or the most advanced and adventurous sushi eater; we have something for you!</p>
    				<div id="reservation-area">	
    				<?php
			if (!empty($error)) {
			echo '<p class="error"><strong>Your message was NOT sent<br/> The following error(s) returned:</strong><br/>' . $error . '</p>';
			} elseif (!empty($success)) {
			echo $success;
			}
		?>
						<form action="test.php" method="post">
			
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
    			</div>
    			<div id="fadein2">
					<div class="slider-fade" id="fade2-1"></div>
					<div class="slider-fade" id="fade2-2"></div>
					<div class="slider-fade" id="fade2-3"></div>
					<div class="slider-fade" id="fade2-4"></div>
					<div class="slider-fade" id="fade2-5"></div>
					<div class="slider-fade" id="fade2-6"></div>
				</div>
    			
		    </div>
			
		</div>		
		
		
		<div class="row" id="menu">
			<h1 class="sectionTitle">Menu</h1>
			<div class="content" id="menu-wrapper">
				<div class="titleHodler">
					<img src="image/logoShadow.png" height="180px"/>
					<img class="titleFull" src="image/menuTitleFull1.png" alt="Menu" />
					</div>
    			<div id="menuImgHolder">
    			<img class="title" src="image/menuTitle.png" alt="menu1"/>
		    	<h2 class="sectionTitle">Dinner Menu</h2>
		    	<img class="menuIMG" src="image/menu/dinner1.png" alt="dinner menu" id="dinnerMenu"/>
		    	<img class="menuIMG" src="image/menu/dinner2.png" alt="dinner menu"/>
		    	<h2 class="sectionTitle">Sushi Menu</h2>
		    	<img class="menuIMG divider1" src="image/menu/dinner3.png" alt="dinner menu"/>
		    	<img class="menuIMG divider2" src="image/menu/dinner4.png" alt="dinner menu"/>
		    	<h2 class="sectionTitle">Lunch Menu</h2>
		    	<img class="menuIMG divider1" src="image/menu/lunch1.png" alt="lunch menu" id="lunchMenu"/>
		    	<h2 class="sectionTitle">Lunch Sushi Menu</h2>
		    	<img class="menuIMG divider2" src="image/menu/lunch2.png" alt="lunch menu"/>
		    	<h2 class="sectionTitle">Drink Menu</h2>
		    	<img class="menuIMG" src="image/menu/drink1.png" alt="drink menu" id="drinkMenu"/>
		    	<img class="menuIMG" src="image/menu/drink2.png" alt="drink menu"/>
		    	<img class="menuIMG" src="image/menu/drink3.png" alt="drink menu"/>
		    	<img class="menuIMG" src="image/menu/drink4.png" alt="drink menu"/>
		    	<img class="menuIMG divider2" src="image/menu/drink5.png" alt="drink menu"/>
		    </div>
			<div id="menuNav">
				<ul>
					<li><a href="#dinnerMenu">Dinner</a>
					<li><a href="#lunchMenu">Lunch</a>
					<li><a href="#drinkMenu">Drink</a></li>
				</ul>
			</div>
		</div>
		</div>
		
		<div class="row rowExpanded" id="gallery">
			<h1 class="sectionTitle">Gallery</h1>
			<div class="content" id="gallery gallery-positioner-overflow">
					<div class="titleHodler">
					<img src="image/logoShadow.png" height="180px"/>
					<img class="titleFull" src="image/galleryTitleFull1.png" alt="Gallery" />
					</div>
					<img class="title" src="image/galleryTitle.png" alt="menu1"/>
					<div class="container clearfix">
					    <div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/1.jpg" title=""><img class="border" src="image/gallery/thumb/1.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/2.jpg" title=""><img class="border" src="image/gallery/thumb/2.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/3.jpg" title=""><img class="border" src="image/gallery/thumb/3.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/4.jpg" title=""><img class="border" src="image/gallery/thumb/4.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/5.jpg" title=""><img class="border" src="image/gallery/thumb/5.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/6.jpg" title=""><img class="border" src="image/gallery/thumb/6.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/7.jpg" title=""><img class="border" src="image/gallery/thumb/7.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/8.jpg" title=""><img class="border" src="image/gallery/thumb/8.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/9.jpg" title=""><img class="border" src="image/gallery/thumb/9.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/10.jpg" title=""><img class="border" src="image/gallery/thumb/10.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/11.jpg" title=""><img class="border" src="image/gallery/thumb/11.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/12.jpg" title=""><img class="border" src="image/gallery/thumb/12.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/13.jpg" title=""><img class="border" src="image/gallery/thumb/13.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/14.jpg" title=""><img class="border" src="image/gallery/thumb/14.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/15.jpg" title=""><img class="border" src="image/gallery/thumb/15.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/16.jpg" title=""><img class="border" src="image/gallery/thumb/16.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/17.jpg" title=""><img class="border" src="image/gallery/thumb/17.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/18.jpg" title=""><img class="border" src="image/gallery/thumb/18.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/19.jpg" title=""><img class="border" src="image/gallery/thumb/19.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/20.jpg" title=""><img class="border" src="image/gallery/thumb/20.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/21.jpg" title=""><img class="border" src="image/gallery/thumb/21.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/22.jpg" title=""><img class="border" src="image/gallery/thumb/22.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/23.jpg" title=""><img class="border" src="image/gallery/thumb/23.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/24.jpg" title=""><img class="border" src="image/gallery/thumb/24.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/25.jpg" title=""><img class="border" src="image/gallery/thumb/25.jpg" alt="" /></a></div>
						<div class="item"><a rel="clearbox[gallery=Gallery,,comment=]" href="image/gallery/26.jpg" title=""><img class="border" src="image/gallery/thumb/26.jpg" alt="" /></a></div>


					</div>
			</div>
			</div>
		
		<div class="row rowExpanded" id="contact">
			<h1 class="sectionTitle">Contact</h1>
			<div class="content" id="contactWrapper">
					<div class="titleHodler">
					<img src="image/logoShadow.png" height="180px"/>
					<img class="titleFull" src="image/contactTitleFull1.png" alt="Contact" />
					</div>
					<img class="title" src="image/contactTitle.png" alt="Contact"/>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12900.048375864237!2d-79.8054237!3d36.0688091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8f3b5d3150f564f9!2sSushi+Republic!5e0!3m2!1sen!2sus!4v1498535796000" frameborder="0" style="border:0" allowfullscreen></iframe>
					<table border="0" cellspacing="0" cellpadding="0">
					  <tbody>
						<tr>
						  <td colspan="2" style="font-size: 1.5em;">Sushi Republic</td>
					    </tr>
						<tr>
						  <td colspan="2">329 Tate St, Greensboro, NC 27403</td>
					    </tr>
						<tr>
						  <td colspan="2"><a href="tel:+13362746684" style="color: white;">(336) 274-6684</a></td>
					    </tr>
						<tr>
						  <td colspan="2" style="font-size: 1.2em; border-bottom: 1px solid white;"><br>
					      Hours</td>
					    </tr>
						<tr>
						  <td style="padding-top: 5px;">M ~ F</td>
						  <td style="padding-left: 20px;">11:30AM ~ 2:30PM, 5PM ~ 10PM</td>
					    </tr>
						<tr>
						  <td>Saturday</td>
						  <td style="padding-left: 20px;">5:00PM ~ 10:00PM</td>
					    </tr>
						<tr>
						  <td>Sunday</td>
						  <td style="padding-left: 20px;">Closed</td>
					    </tr>
					  </tbody>
					</table>
					<div id="contact-area">	
						<form method="post" action="contactEngine.php">
							
							<label for="Name">Name:</label>
							<input type="text" name="Name" id="Name" placeholder="ex) Joe Hahn" required/>

							<label for="Tel">Tel:</label>
							<input type="text" name="Tel" id="Tel" placeholder="ex) 336-123-1234" />

							<label for="Email">Email:</label>
							<input type="text" name="Email" id="Email" placeholder="ex) jhan@email.com" required/>

							<label for="Message">Message:</label><br />
							<textarea name="Message" rows="20" cols="20" id="Message" placeholder="ex) Open for Valentines day?" required></textarea>

							<input type="submit" name="submit" value="Submit" class="submit-button" required/>
						</form>	
					</div>
					
					

			</div>
		</div>
	<footer>
		<div id="footerHolder">			
			<ul id="r1">
			  <img src="image/logoTextOnly.png" alt=""/>
			</ul>
			<ul id="r2"><li><h3>Connect with us</h3></li>
				<a href="https://www.facebook.com/sushirepublic/">Facebook</a>
				<a href="#contact">Contact us</a>
			</ul>
			<ul id="r3"><strong>SUSHI REPUBLIC</strong><br>329 Tate St, Greensboro, NC 27403<br>(336) 274-6684<br><br>© 2017 sushirepublicgso.com. Sushi Republic. All Rights Reserved.</ul>
			<ul id="r4"><a href="http://junghoonhan.com">Designed by Junghoon Han</a></ul>
		</div>
	</footer>
	</main>
	
	

</body>
</html>
