<!--
	Description: This is my homepage
	Author: Ayomide Jimoh
-->

<?php

	if (isset($_GET['pageid'])) {
		$pageid = $_GET['pageid'];
	} else {
		$pageid = 1;
	}

	if ($pageid == 1) {
		$title = "Ayo Jimoh's Portfolio";
		$img1 = "<img src=\"images\/siue_sob.png\" alt=\"SIUE's School of Business (SOB)\">";
		$img2 = "<img src=\"images\/siue_logo.jpeg\" alt=\"SIUE's logo\">";
	} elseif ($pageid == 2) {
		$title = "Ayo's Project 1";
		$img1 = "<img src=\"images\/siue_sob.png\" alt=\"SIUE's School of Business (SOB)\">";
		$img2 = "<img src=\"images\/siue_logo.jpeg\" alt=\"SIUE's logo\">";
	} elseif ($pageid == 3) {
		$title = "Ayo's Project 2";
		$img1 = "<img src=\"images\/siue_sob.png\" alt=\"SIUE's School of Business (SOB)\">";
		$img2 = "<img src=\"images\/siue_logo.jpeg\" alt=\"SIUE's logo\">";
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
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="description" content="Homepage">
	<meta name="keywords" content="resume, portfolio, professional">
	<meta name="author" content="Ayomide Jimoh">

	<link rel="stylesheet" type="text/css" href="styles/normalize.css">
	<!--<link rel="stylesheet" type="text/css"href="styles/cmis300style.css">-->	
	<!--<link rel="stylesheet" type="text/css" href="styles/main.css">-->
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/homepage.css">
</head>

<body>

<header>
	<h1>Ayo B. Jimoh's Portfolio</h1>
	<nav>
		<a href="project1.php">CMIS 300</a>
		<a href="project2.php">CMIS 350</a>
		<a href="resume.php">R&#233;sum&#233;</a>
		<a href="contact.php">Contact</a>
	</nav>
</header>

<!--For the creation of the aside content -->
<aside>
	<h2>About Me</h2>
	<ul>
		<li>
			<div>Name: Ayomide Jimoh</div>
		</li>
		<li>
			<div>School: SIUE's School of Business</div>
		</li>
		<li>
			<div>Major: Business Administration (Concentration in Management Information Systems)</div>
		</li>
		<li>
			<div>Graduation: May 2024 (Bachelor's Degree)</div>
		</li>
	</ul>

	<h2>About The Website</h2>
	<div>
		The website contains detailed information about the major projects and its associated 
		courses that I have taken in the past 2 years as an undergraduate student in SIUE's 
		School of Business. It also include a resume to know more about my employment history 
		and relevant skills. Lastly, a contact page is included on this website. If you need to 
		contact me for any question, comment, or concern about my portfolio on this site, feel 
		free to use the contact information and/or form on this site to reach out to me.
	</div>

</aside>

<aside id="leftSideImage"><?php echo $img1 ?></aside>

<!--For main page -->
<main>
<aside id="mainContent">
	<h3>Brief Project Overview</h3>
	<ul class="specialListStyle">
	<li class="special-list-style">
		<div>CMIS 300: I designed a webpage using HTML, CSS, Javascript, and PHP</div>
	</li>

	<br><br><br><br><br><br><br>

	<li class="special-list-style">
		<div>CMIS 350: While working a team and as an individual, I designed and fixed inefficiencies in the 
		database.</div>
	</li>
	</ul>

	<br><br><br><br><br><br><br><br>

	<h3>R&#233;sum&#233;</h3>
	<div>
		Feel free to check out my r&#233;sum&#233; for a brief information 
		about my educational backgrouns, skills, certifications, etc.
	</div>

	<h3>Contact Page</h3>
	<div>
		You can easily find my contact information if you need any information or 
		you are trying to reach out to me. 
	</div>
</aside>

<aside>
	<?php echo $img2 ?>
</aside>

</main>

<footer>
	<div>
		&copy;2023&nbsp;&nbsp;&nbsp;Ayomide Jimoh&nbsp;&nbsp;&nbsp;
		<!--<a href="#top">Go to the Top</a>-->
	</div>
	<a href="#top">Go to the Top</a> <!--This works by default on most browser WITHOUT the need to declare an ID with the name "top"-->
</footer>

</body>

</html>