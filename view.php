<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View Record</title>

	<style type="text/css">
		table
		{
			border-collapse: collapse;
		}
		body
		{
			background-color: #666633;
		}
		a
		{
			color: white;
			text-decoration: none;
		}
		#menu td
		{
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
	<!-- Table Header -->
	<table border="1" width="80%" align="center" height="20%">
		<tr>
			<td width="10%" bgcolor="#00CCCC">
				<img src="image/n5.jpg" width="150px" height="150px">
			</td>

			<td bgcolor="#000000" style="font-size: 60px; color: red; font-variant: small-caps; font-family: arial; text-shadow: 4px 4px 4px white; align:center;">
				Student Management System
			</td>
		</tr>
	</table>
	<!-- MenuBar Table -->
	<table border="1" id="menu" width="80%" align="center" height="8%">
		<tr>
			<td><a href="index.php">Home</a></td>
			<td><a href="reg.php">Registration</a></td>
			<td><a href="view.php">Student Record</a></td>
			<td><a href="viewdel.php">Edit Student</a></td>
		</tr>
	</table>
	<!-- Display record Table -->
	<table border="1" bgcolor="white" width="80%" align="center" height="8%">
		<tr>
			<td align="top">
				<table border="1" align="center" width="100%" cellpadding="10" style="color: navy; font-size: 20px;">
					<tr style="background-color: #003366; color: white;">
						<td>#</td>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Email</td>
						<td>Contact</td>
						<td>College Name</td>
						<td>Qualification</td>
						<td>Course</td>
						<td>Fees</td>
						<td>Paid</td>
						<td>Remaining</td>
					</tr>
					<?php
						/*Including connection to database*/
						include('connect.php');
						$qury = "SELECT * FROM reg ";
						$sql = mysqli_query($conn, $qury);
						/*Accessing All record from database using loop*/
						while($row=mysqli_fetch_array($sql))
						{
							/*Filling data into cells*/
						
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['txtn']; ?></td>
						<td><?php echo $row['txtsn']; ?></td>
						<td><?php echo $row['txte']; ?></td>
						<td><?php echo $row['txtc']; ?></td>
						<td><?php echo $row['txtcn']; ?></td>
						<td><?php echo $row['txtq']; ?></td>
						<td><?php echo $row['txtco']; ?></td>
						<td><?php echo $row['txtf']; ?></td>
						<td><?php echo $row['txtp']; ?></td>
						<td><?php echo $row['txtr']; ?></td>
					</tr>
					<?php
					}
					?>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>