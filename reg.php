<!-- PHP Coder By Haidara -->
<?php

	include('connect.php');

	if (isset($_POST['btn']))
	{
		/* Passing form data into php variable */
		$txtn = $_POST['txtn'];
		$txtsn = $_POST['txtsn'];
		$txte = $_POST['txte'];
		$txtc = $_POST['txtc'];
		$txtcn = $_POST['txtcn'];
		$txtq = $_POST['txtq'];
		$txtco = $_POST['txtco'];
		$txtf = $_POST['txtf'];
		$txtp = $_POST['txtp'];
		$txtr = $_POST['txtr'];

		/* SQL Querry for insertion into database */
		$query = "INSERT INTO reg values (null,'$txtn','$txtsn','$txte','$txtc','$txtcn','$txtq','$txtco','$txtf','$txtp','$txtr')";

		/* Exeuting query  */
		$sql = mysqli_query($conn, $query);
		if($sql)
		{
			echo "<script>alert('Data save successfully')</script>";
			header("location:view.php");
		}
		else
		{
			echo "<script>alert('Data not saved')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulaire d'inscription</title>

	<style type="text/css">
		
		table{
			border-collapse: collapse;
		}

		body{
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

		#book td{
			width: 20%;
		}

	</style>

</head>
<body>

	<!-- Header Table -->

	<table border="1" width="80%" align="center" height="20%">
		<tr>
			<td width="10%" bgcolor="#00CCCC">
				<img src="image/logo3.jpeg" width="150px" height="150px">
			</td>
			<!--  -->
			<td bgcolor="#000000" style="font-size: 60px; color: red; font-variant: small-caps; font-family: arial; text-shadow: 4px 4px 4px white;" align="center">
				Student Management System
			</td>
		</tr>
	</table>
	<!-- Menubar Table -->
	<table border="1" id="menu" width="80%" align="center" height="8%">
		<tr>
			<td> <a href="index.php">HOME</a> </td>
			<td> <a href="reg.php">REGISTRATION</a> </td>
			<td> <a href="view.php">STUDENT RECORD</a> </td>
			<td> <a href="viewdel.php">EDIT</a> </td>
		</tr>
	</table>
	<!-- Registration Table -->
	<table border="1" bgcolor="white" width="80%" align="center" height="8%">
		<tr>
			<td>
				<center>
					<fieldset style="width: 400px; font-size: 30px;">
						<legend>Registration Form</legend>
						<form action="" method="POST" oninput="txtr.value=parseInt(txtf.value)-parseInt(txtp.value)" enctype="multipart/form-data">
							<table border="0" align="center" width="400px" cellpadding="10" style="color: navy; font-size: 20px;">
								<!--  -->
								<tr>
									<td>Name</td>
									<td> <input type="text" name="txtn" required> </td>
								</tr>

								<!--  -->
								<tr>
									<td>SurName</td>
									<td> <input type="text" name="txtsn" required> </td>
								</tr>

								<!--  -->
								<tr>
									<td>Email</td>
									<td> <input type="text" name="txte" required> </td>
								</tr>

								<!--  -->
								<tr>
									<td>Contact</td>
									<td> <input type="text" name="txtc" required> </td>
								</tr>

								<!--  -->
								<tr>
									<td>College Name</td>
									<td> <input type="text" name="txtcn" required> </td>
								</tr>

								<!--  -->
								<tr>
									<td>Qualification</td>
									<td> <input type="text" name="txtq" required> </td>
								</tr>
								<!--  -->
								<tr>
									<td>Course</td>
									<td> <input type="text" name="txtco" required> </td>
								</tr>

								<!--  -->
								<tr>
									<td>Fees</td>
									<td> <input type="text" name="txtf" required> </td>
								</tr>

								<!--  -->
								<tr>
									<td>Paid</td>
									<td> <input type="text" name="txtp" required> </td>
								</tr>
								<!--  -->
								<tr>
									<td>Remaining</td>
									<td> <input type="text" name="txtr" required> </td>
								</tr>
								<!--  -->

								<tr>
									<td> <input type="submit" value="Save" name="btn" required> </td>
								</tr>
								<!--  -->

							</table>
						</form>
					</fieldset>
				</center>
			</td>
		</tr>
	</table>

</body>
</html>