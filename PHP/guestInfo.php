<!--
	Description: This is the PHP file for the form
	Author: Ayomide Jimoh
-->
<html>
<body>
Welcome <?php echo $_POST["firstName"]; ?><br>
We have received your submission post<br>
We will contact you via your email address: <?php echo $_POST["emailAddress"]; ?><br>
</body>
</html>