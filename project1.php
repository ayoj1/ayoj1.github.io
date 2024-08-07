<!--
	Description: This is my first project in the portfolio
	Author: Ayomide Jimoh
-->

<?php

	if (isset($_GET['pageid'])) {
		$pageid = $_GET['pageid'];
	} else {
		$pageid = 2;
	}

	if ($pageid == 1) {
		$title = "Ayo Jimoh's Portfolio";
		$img1 = "<img src=\"images\/siue_sob.png\" alt=\"SIUE's School of Business (SOB)\">";
		$img2 = "<img src=\"images\/siue_logo.jpeg\" alt=\"SIUE's logo\">";
	} elseif ($pageid == 2) {
		$title = "Ayo's Project 1";
		$img1 = "<img src=\"images\/webSample1.png\" alt=\"Image 1 of Web Project Sample\" width=\"425px\">";
		$img2 = "<img src=\"images\/webSample2.png\" alt=\"Image 2 of Web Project Sample\" width=\"425px\">";
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
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="description" content="Contact Page">
	<meta name="keywords" content="contact, webpage">
	<meta name="author" content="Ayomide Jimoh">

	<link rel="stylesheet" type="text/css" href="styles/normalize.css">
	<!--<link rel="stylesheet" type="text/css"href="styles/cmis300style.css">-->	
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/project1.css">
</head>

<body>

<!--Main Heading-->
<header>
	<h1>Ayo B. Jimoh's Portfolio</h1>
	<nav>
		<a href="index.php">Homepage</a>
		<a href="project2.php">CMIS 350</a>
		<a href="resume.php">R&#233;sum&#233;</a>
        <a href="contact.php">Contact</a>
	</nav>
</header>

<aside>
	<?php echo $img1 ?>
	<br><br>
	<?php echo $img2 ?>
	<br>
</aside>

<main>
	<h2 id="project1Title">WEB DESIGN</h2>
	<div><span class="subHeading">Project Title:</span>
		Designing a website
	</div>

	<div><span class="subHeading">Project Description:</span>
		Designing a website that includes images, formatted list, and a table that is 
		styled with alternating row color and has a header and footer
	</div>

	<div><span class="subHeading">Associated Course: </span>
		CMIS 300 (Web-Based Application Design)
	</div>

	<div><span class="subHeading">Associated Course Description: </span>Analysis, design and 
		implementation of internet web-site home pages using current tools of 
		hypertext markup languages, integrated software packages, and specialized 
		web creation software.
	</div>

	<div> <span class="subHeading">Materials/Technology Used</span>
		Notepad++, WinScp, Laptop
	</div>

	<!--Skill written in table-->
	<table>
		<thead>
			<tr>
				<th>Skills</th>
				<th>Details</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>HTML</td>
				<td>Used HTML (HyperText Markup Language) to write content to the website</td>
			</tr>
			<tr>
				<td>CSS</td>
				<td>Used Cascading Style Sheet to design the the layout of the website</td>
			</tr>
			<tr>
				<td>Javascript</td>
				<td>Used Javascript to create dynamic web content that work offline in back-end web developement</td>
			</tr>
			<tr>
				<td>JQuery</td>
				<td>Used JQuery as a Javascript library to modify HTML element via DOM (Document Object Models) of 
					the page and create event-based action such as an action that occurs when the page load or when 
					a button is clicked</td>
			</tr>
			<tr>
				<td>PHP</td>
				<td>Used PHP to make the website dynamic by loading changes made to HTML elements and for 
					form processing</td>
			</tr>
			<tr>
				<td>Web Design Principles and Guidelines</td>
				<td>Used to ensure the website is accessible and responsive across all devices with respect to its content</td>
			</tr>
		</tbody>
	</table>

	<div> <span class="subHeading">Description: </span>
		The website contains a images, list, and a table that have been formatted and styled with 
		CSS.
	</div>

	<div> <span class="subHeading">Result: </span>
		A website that follows guidelines to ensure that it is well accessible and 
		accommodating. The website is little dynamic content. The site is designed 
		with CSS that makes it appealing.
	</div>

	<div> <span class="subHeading">Reflection: </span>
		I learned how to create a dynamic webpages with applicable styling that follows guidlines.
	</div>
</main>

<footer>
	<div>
		&copy;2023&nbsp;&nbsp;&nbsp;Ayomide Jimoh
	</div>
	<a href="#top">Go to the Top</a>
</footer>

</body>
</html>