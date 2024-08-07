<!--
	Description: This is my second project sample
	Author: Ayomide Jimoh
-->

<?php

	if (isset($_GET['pageid'])) {
		$pageid = $_GET['pageid'];
	} else {
		$pageid = 3;
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
		$img1 = "<img src=\"images\/dbSample1.png\" alt=\"Image 1 of Web Project Sample2\" width=\"780px\" height=\"365px\">"; //780px
		$img2 = "<img src=\"images\/dbSample2.png\" alt=\"Image 2 of Web Project Sample2\" width=\"780px\" height=\"365px\">"; //780px
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
	<link rel="stylesheet" type="text/css" href="styles/project2.css">
</head>

<body>

<!--Main Heading-->
<header>
	<h1>Ayo B. Jimoh's Portfolio</h1>
	<nav>
		<a href="index.php">Homepage</a>
		<a href="project1.php">CMIS 300</a>
		<a href="resume.php">R&#233;sum&#233;</a>
        <a href="contact.php">Contact</a>
	</nav>
</header>

<aside id="myLeftInfo">
</aside>

<aside>
	<?php echo $img1 ?>
	<br>
	<br>
	<?php echo $img2 ?>
	<br>
</aside>

<main>
	<h2 id="project2Title">DATABASE DESIGN</h2>
	<div><span class="subHeading">Project Title:</span>
		Managing a Database
	</div>

	<div><span class="subHeading">Project Description:</span>
		Updating, removing, and inserting data in the Database. Running queries on 
		single and multiple tables in the database,
	</div>

	<div><span class="subHeading">Associated Course: </span>
		CMIS 350 (Database Design)
	</div>

	<div><span class="subHeading">Associated Course Description: </span>Basic concepts/terminology of 
		relational models with emphasis on current technology and business 
		applications including SQL.
	</div>

	<div> <span class="subHeading">Materials/Technology Used: </span>
		Wordpad, WinScp, Microsoft Office document, Putty, Laptop
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
				<td>Database Management</td>
				<td>Managed database record by removing duplicate data and merging relevant data and record 
					based on Primary key assignment, which is identified as a unique data in the table.</td>
			</tr>
			<tr>
				<td>Structural Query Language (SQL)</td>
				<td>Used SQL to run query on the database that either modify the data or output the data.</td>
			</tr>
			<tr>
				<td>Entity-Relationship Diagram (ERD)</td>
				<td>Designed Entity-Relationship Diagram (ERD) to give a visual representation of the 
					entities on the database record and how tables and entities relate with other tables 
					and entities.
				</td>
			</tr>
			<tr>
				<td>Normalization</td>
				<td>Transformed table from original form to normalized form.
				</td>
			</tr>
		</tbody>
	</table>

	<div> <span class="subHeading">Description: </span>
		The database should contain a non-redundant data and non-duplicate record and data that can easily 
		be index based on the table's primary key.
	</div>

	<div> <span class="subHeading">Result: </span>
		A database system that contain no duplicate record with unique primary key and other key that help 
		identify a table and its relationship with other tables.
	</div>

	<div> <span class="subHeading">Reflection: </span>
		I learned how to manage the database and output data to the screen using SQL queries. I also learned 
		how to read an ERD diagram to understand how a databse system is creted and maintained.
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