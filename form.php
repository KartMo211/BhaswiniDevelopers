<?php
SESSION_START();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="js/navbar.js"></script>
    <link type="text/css" rel="stylesheet" href="Stylesheet/form.css" />
    <link type="text/css" rel="stylesheet" href="Stylesheet/home.css" />
    <title></title>
</head>
<body style="background-color:#55efc4">
		<?php
			if(isset($_GET['error'])){
				if($_GET['error'] == "failed"){
					echo "<script>alert('Wrong email ID entered. Try again.');</script>";
				}
				elseif($_GET['error'] == "email_already"){
					echo '<script>alert("An existing user is using the email. Try again.");</script>';
				}
				elseif($_GET['error'] == "success"){
					echo '<script>alert("Gracias. Thank you. You will now recieve newsletters.");</script>';
				}
			}
		?>
    <div class="logoparallax"></div>
    <div class="menubar" align="center" id="nav" style="top:0;">
        <ul>
            <li><img src="Images/logo.png" class="logo"></li>
            <li><button class="nodisplay" onclick="display()">&#9776</button></li>
            <li class="display" id="display3"><a href="index.html">Home</a></li>
            <li class="display" id="display"><a href="#footer">About Us</a></li>
            <li class="display" id="display2"><a href="services.html">Our Services</a></li>
            <li class="display" id="display1"><div class="toggle"><a href="project.html">Our Projects</a><div class="dropdown"><a href="bhaswiniarcade.html">Bhaswini arcade</a><a href="brindavanam.html">Brindavanam</a><a href="sukruthinivas.html">Sukruthinivas</a><a href="manashwini.html">Manashwini</a></div></div></li>
        </ul>
    </div>
    <form method="post" id="formfill" class="formfill" action="php/mail.php">
        <h1>Subscribe to our</h1>
        <h1 style="font-size:2.5em">Newsletter!</h1>
        <h1>Do you want more information regarding our business? Just enter your email ID and stay updated with the latest information</h1>
        <input type="text" name="mail" placeholder="E-mail">
        <input name="submit" value="Submit" type="submit" class="form">
    </form>
</body>
</html>