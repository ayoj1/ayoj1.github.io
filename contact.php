<!--
    Description: This displays my contact information
    Author: Ayomide Jimoh
-->

<?php

	if (isset($_GET['pageid'])) {
		$pageid = $_GET['pageid'];
	} else {
		$pageid = 5;
	}

	if ($pageid == 1) {
		$title = "Ayo Jimoh's Portfolio";
		$img1 = "<img src=\"images\/siue_sob.png\" alt=\"SIUE's School of Business (SOB)\">";
		$img2 = "<img src=\"images\/siue_logo.jpeg\" alt=\"SIUE's logo\">";
	} elseif ($pageid == 2) {
		$title = "Ayo's Project 1";
		$img1 = "<img src=\"images\/webSample1.png\" alt=\"Image 1 of Web Project Sample1\" width=\"425px\">";
		$img2 = "<img src=\"images\/webSample2.png\" alt=\"Image 2 of Web Project Sample1\" width=\"425px\">";
	} elseif ($pageid == 3) {
		$title = "Ayo's Project 2";
		$img1 = "<img src=\"images\/dbSample1.png\" alt=\"Image 1 of Web Project Sample2\" width=\"780px\">";
		$img2 = "<img src=\"images\/dbSample2.png\" alt=\"Image 2 of Web Project Sample2\" width=\"780px\">";
	} elseif ($pageid == 4) {
		$title = "Ayo's Resume";
	} elseif ($pageid == 5) {
		$title = "Ayo's Contact Info";
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>
	<link rel="icon" type="image/x-icon" href="images/favicon.ico">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Contact Page">
	<meta name="keywords" content="contact, webpage">
	<meta name="author" content="Ayomide Jimoh">

	<link rel="stylesheet" type="text/css" href="styles/normalize.css">
	<!--<link rel="stylesheet" type="text/css"href="styles/cmis300style.css">-->	
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/formStyle.css">
</head>

<body>

<!--Main Heading-->
<header>
	<h1>Ayo B. Jimoh's Portfolio</h1>
	<nav>
		<a href="index.php">Homepage</a>
		<a href="project1.php">CMIS 300</a>
		<a href="project2.php">CMIS 350</a>
        <a href="resume.php">R&#233;sum&#233;</a>
	</nav>
</header>

<aside id="myInfoLeft">
	<h2 id="contactTitle">MY CONTACT INFORMATION</h2>
	<div class="contactInfo" id="contactName">Name: Ayomide Jimoh</div>
	<div class="contactInfo" id="contactEmail">Email: <a href="mailto:ayomidebj9@gmail.com" title="ayomidebj9@gmail.com">ayomidebj9@gmail.com</a></div>
	<div class="contactInfo" id="contactSocial1">Linkedin: <a href="https://www.linkedin.com/in/ayomide-j-398b6a163" title="https://www.linkedin.com/in/ayomide-j-398b6a163">https://www.linkedin.com/in/ayomide-j-398b6a163</a></div>
</aside>

<main>
<div id="contactMeForm">
	For questions, concerns, or comments, please fill the form below <br>

	<form name="guestComment" action="PHP/guestInfo.php" method="post" target="_blank" autocomplete="off">
		<label for="fname" class="labelOptions">First Name</label>
		<input type="text" id="fname" name="firstName" placeholder="First Name" required maxlength="35">
		<br>
		<label for="mname" class="labelOptions">Middle Initial</label>
		<input type="text" id="mname" name="middleInitial" placeholder="M.I." required maxlength="1">
		<br>
		<label for="lname" class="labelOptions">Last Name</label>
		<input type="text" id="lname" name="lastName" placeholder="Last Name" required maxlength="30">
		<br>
		<label for="eMail" class="labelOptions">Email</label>
		<input type="email" id="eMail" name="emailAddress" placeholder="email Address" required maxlength="62">
		<br>
		<label for="textMsg" class="labelOptions">Comment</label>
		<textarea id="textMsg" name="textMesssage" placeholder="Please enter your questions, comments or concerns here." rows="10" cols="50"></textarea>
		<br>
		<div>
			<input type="reset" value="Reset" id="resetButton">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="Submit" id="submitbutton">
		</div>
	</form>
<div>
</main>

<footer>
	<div>
		&copy;2023&nbsp;&nbsp;&nbsp;Ayomide Jimoh
	</div>
	<a href="#top">Go to the Top</a>
</footer>

</body>
</html>