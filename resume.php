<!--
    Description: This displays my resume
    Author: Ayomide Jimoh
-->

<?php

	if (isset($_GET['pageid'])) {
		$pageid = $_GET['pageid'];
	} else {
		$pageid = 4;
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
	
	<meta name="description" content="R&#233;sum&#233;">
	<meta name="keywords" content="my, r&#233;sum&#233;, webpage">
	<meta name="author" content="Ayomide Jimoh">

	<link rel="stylesheet" type="text/css" href="styles/normalize.css">
	<!--<link rel="stylesheet" type="text/css"href="styles/cmis300style.css">-->	
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="stylesheet" type="text/css" href="styles/resumeStyle.css">
</head>

<body>

<!--Main Heading-->
<header>
	<h1>Ayo B. Jimoh's Portfolio</h1>
	<nav>
		<a href="index.php">Homepage</a>
		<a href="project1.php">CMIS 300</a>
		<a href="project2.php">CMIS 350</a>
        <a href="contact.php">Contact</a>
	</nav>
</header>

<main>
<div id="resumeHead">
<h2>Ayo B. Jimoh</h2>
<div>Joliet, IL 60432&#183;(321) 427-2489&#183;<a href="mailto:ayomidebj9@gmail.com" title="ayomidebj9@gmail.com">ayomidebj9@gmail.com</a></div>
</div>
<hr>
<!--My Education-->
<h2>EDUCATION</h2>
	<!--SOUTHERN ILLINOIS UNIVERSITY EDWARDSVILLE (SIUE)-->
<div>
	<span class="boldText">Southern Illinois University Edwardsville (SIUE) |</span> Edwardsville, IL<br>
	<span  class="boldText italizedText">Bachelor of Science in Business Administration |</span> May 2024<br>
	<span> <span class="italizedText">Specialization: </span>Computer Information Systems</span><br>
	<span class="boldText italizedText">Courses:<br></span>
	<aside class="leftSide">
		<div>IT Hardware & Systems Software</div>
		<div>Understanding the Business Environment</div>
	</aside>
	<aside class="rightSide">
		<div>Fundamentals of Financial Accounting</div>
		<div>Database Design</div>
	</aside>
</div>
<br><br><br>
	<!--MORAINE VALLEY COMMUNITY COLLEGE (MVCC)-->
<div>
	<span class="boldText">Moraine Valley Community College (MVCC) |</span> Palos Hills, IL<br>
	<span  class="boldText italizedText">Associate of Science |</span> July 2020<br>
	<!--STEM Courses-->
	<span class="boldText italizedText">STEM Courses:<br></span>
	<aside class="leftSide">
		<div>Introductory Computer Science&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
		<div>Discrete Mathematics</div>
	</aside>
	<aside class="middleSide">
		<div>Advanced Computer Science</div>
		<div>Calculus 1</div>
	</aside>
	<aside class="rightSide">
		<div>JAVA 1</div>
		<div>Statistics</div>
	</aside>
	<!--Gen-Ed Courses-->
	<span class="boldText italizedText">General Education Courses:</span><br>
	<aside class="leftSide">
		<div>Introductory Psychology</div>
		<div>Ethics</div>
	</aside>
	<aside class="middleSide">
		<div>Critical Thinking</div>
		<div>General Sociology</div>
	</aside>
	<aside class="rightSide">
		<div>Survey of Art 1</div>
		<div>Speech Fundamental</div>
	</aside>
</div>

<!--My Certifications-->
<h2>CERTIFICATIONS</h2>
<div>TESTOUT PC PRO | April 2023</div>
<div>TESTOUT NETWORK PRO | June 2023</div>

<!--My Experiences-->
<h2>EXPERIENCES</h2>
<div>
	<!--Mariano's-->
	<aside class="leftSide">
		<div>Mariano's</div>
		<div>Salad Bar Team Member</div>
	</aside>
	<aside class="rightSide">
		<div>Orland Park, IL</div>
		<div>August 2021 - July 2022</div>
	</aside>
	<br><br>
	<ul>
		<li>Maintained Salad Bar with guaranteed freshness of food items</li>
		<li>Prepared and packaged food items neatly</li>
		<li>Stocked up and arranged fresh food items on the sale floor</li>
	</ul>

	<!--McDonalds-->
	<aside class="leftSide">
		<div>McDonald's</div>
		<div>Crew Member</div>
	</aside>
	<aside class="rightSide">
		<div>Orland Park, IL</div>
		<div>August 2018 - May 2020</div>
	</aside>
	<br><br>
	<ul>
		<li>Greeted customers with a smile</li>
		<li>Prepared accurate food orders</li>
		<li>Maintained restaurant cleanliness by using sanitary cleaning materials</li>
		<li>ssisted customers with their needs and concerns to make sure their expectations are met</li>
	</ul>
	
	<!--CSHS-->
	<aside class="leftSide">
		<div>Carl Sandburg High School</div>
		<div>Technology Intern</div>
	</aside>
	<aside class="rightSide">
		<div>Orland Park, IL</div>
		<div>August 2017 - May 2020</div>
	</aside>
	<br><br>
	<ul>
		<li>Diagnosed and repaired computer hardware issues such as battery failures, faulty and 
		broken screens, broken computer parts and cases, and camera misalignments</li>
	</ul>
</div>

<!--My Skills-->
<h2>SUMMARY OF SKILLS</h2>
<div>Microsoft Office (Word, Excel, & PowerPoint)&#183;Salesforce&#183;Database Management System 
(DBMS);&#183;SQL&#183;HTML/CSS&#183;PHP&#183;AutoCAD&#183;C++&#183;Java&#183;Teamwork</div>

<!--My Organizations & Activities-->
<h2>ORGANIZATIONS & ACTIVITIES</h2>
<div>STEM Club&#183;Phi Theta Kappa (PTK) Society&#183;Association of Information Technology Professionals (AITP)</div>
</main>

<footer>
	<div>
		&copy;2023&nbsp;&nbsp;&nbsp;Ayomide Jimoh&nbsp;&nbsp;&nbsp;
		<a href="#top">Go to the Top</a>
	</div>
</footer>

</body>
</html>