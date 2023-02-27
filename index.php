<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulaire</title>

	<style type="text/css">

		table{
			border-collapse: collapse;
		}

		body {
			background-color: #666633;
		}

		a{
			color: white;
			text-decoration: none;
		}

		#menu td{
			width: 13%;
			text-align: center;
			background-color: #666699;
			color: white;
			font-size: 20px;
		}

		#book td {
			width: 20%;
		}
		
	</style>
</head>
<body>

	<!-- Header Table  -->
	<table border="1" width="80%" align="center" height="20%">
		<tr>
			<td width="10%" bgcolor="#00CCCC">
				<img src="image/logo3.jpeg" width="150px" height="150px">
			</td>
			<!--  -->
			<td bgcolor="#000000" style="font-size: 60px; color: red; font-variant: small-caps; font-family: arial; text-shadow: 4px 4px 4px white; align: center;">
				Student Management System
			</td>
			<!--  -->
		</tr>
	</table>
	<!-- Banner Image table -->
	<table border="1" id="menu" width="80%" align="center" height="8%">
		<tr>
			<td> <a href="index.php">HOME<a/> </td>
			<td> <a href="reg.php">REGISTRATION<a/> </td>
			<td> <a href="view.php">STUDENT RECORD<a/> </td>
			<td> <a href="viewdel.php">EDIT<a/> </td>
		</tr>
	</table>
	<!--  -->
	<table border="1" width="80%" align="center" height="8%">
		<tr bgcolor="#006666">
			<td style="font-size: 20px; text-align: center; font-weight: bold; color: white;">
				<marquee behavior="alternate">&copy;Expert Faculties</marquee>
			</td>
		</tr>
	</table>
	<!-- Faculty table -->
	<table border="1" id="book" width="80%" align="center" height="40%">
		<tr>
			<td> <img src="image/Fille.jpg" width="235px" height="300px"> </td>
			<td> <img src="image/Fille1.jpeg" width="235px" height="300px"> </td>
			<td> <img src="image/fille2.jpeg" width="235px" height="300px"> </td>
			<td> <img src="image/n4.jpg" width="235px" height="300px"> </td>
			<td> <img src="image/n5.jpg" width="235px" height="300px"> </td>
		</tr>
	</table>
	<!-- Footer table-->
	<table border="1" width="80%" align="center" height="8%">
		<tr style="background-color: #333399; color: white; font-size: 20px;">
			<marquee behavior="alternate">
				<td align="center" behavior="alternate">&copy;2023<hr>Made by Haidara</td>
			</marquee>

		</tr>
	</table>
<?php

	require_once 'footer.html';
?>
</body>
</html>