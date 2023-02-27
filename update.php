<?php
	include('connect.php');
	$id=$_REQUEST['id'];
	$query = "SELECT * FROM reg WHERE id=$id";
	$sql = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($sql);

	if (isset($_POST['btn']))
	{
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

		$query = "UPDATE reg SET txtn='$txtn', txtsn='$txtsn', txte='$txte', txtc='$txtc', txtcn='$txtcn', txtq='$txtq', txtco='$txtco', txtf='$txtf', txtp='$txtp', txtr='$txtr' WHERE id=$id";
		$sql = mysqli_query($conn, $query);

		if($sql){
			echo "<script>alert('Data update successfully')</script>";
			header("location:viewdel.php");

		}else{
			echo "<script>alert('Data does not updated')</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
			width: 1%;
			text-align: center;
			background-color: #666699;
			color: white;
			font-size: 20px;
		}

		#book td{
			width: 10%;
		}
	</style>
	<title>Page de Mise à Jour</title>
</head>
<body>
	<table border="1" width="80%" align="center" height="20%">
		<tr>
			<td width="10%" bgcolor="#00CCCC">
				<img src="image/n4.jpg" width="150px" height="150px">
			</td>

			<td bgcolor="#000000" style="font-size: 60px; color: red; font-variant: small-caps; font-family: arial; text-shadow: 4px 4px 4px white; align: center;">
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
	<!-- Formulaire d'ajout Etudiant -->
	<table border="1" bgcolor="white" width="80%" align="center" height="8%">
		<tr>
			<td>
				<center>
					<fieldset style="width: 10px; font-size: 30px;">
						<legend>Update Form</legend>
						<form action="" method="POST">
							<table border="0" align="center" width="500px" cellpadding="10" >
								<!-- ID -->
								<tr>
									<td>ID Student</td>
									<td> <input type="id" disabled="disabled" name="txtn" value="<?php echo $row['id']; ?>" required> </td>
								</tr>
								<!-- First Name -->
								<tr>
									<td>First Name</td>
									<td> <input type="text" name="txtn" value="<?php echo $row['txtn']; ?>" required> </td>
								</tr>
								<!-- Last Name -->
								<tr>
									<td>Last Name</td>
									<td> <input type="text" name="txtsn" value="<?php echo $row['txtsn']; ?>" required> </td>
								</tr>
								<!-- Email -->
								<tr>
									<td>Email Student</td>
									<td> <input type="email" name="txte" value="<?php echo $row['txte']; ?>" required> </td>
								</tr>
								<!-- Contact -->
								<tr>
									<td>Contact Student</td>
									<td> <input type="text" name="txtc" value="<?php echo $row['txtc']; ?>" required> </td>
								</tr>
								<!-- College Name -->
								<tr>
									<td>College Student</td>
									<td> <input type="text" name="txtcn" value="<?php echo $row['txtcn']; ?>" required> </td>
								</tr>
								<!-- College Name -->
								<tr>
									<td>Qualification Student</td>
									<td> <input type="text" name="txtq" value="<?php echo $row['txtq']; ?>" required> </td>
								</tr>
								<!-- Cours Student-->
								<tr>
									<td>Course Student</td>
									<td> <input type="text" name="txtco" value="<?php echo $row['txtco']; ?>" required> </td>
								</tr>
								<!-- Cours Student-->
								<tr>
									<td>Fees Payement</td>
									<td> <input type="text" name="txtf" value="<?php echo $row['txtf']; ?>" required> </td>
								</tr>
								<!-- Paid Student-->
								<tr>
									<td>Paide Payement</td>
									<td> <input type="text" name="txtp" value="<?php echo $row['txtp']; ?>" required> </td>
								</tr>
								<!-- Remaing Student-->
								<tr>
									<td>Remaining</td>
									<td> <input type="text" name="txtr" required> </td>
								</tr>
								<!-- Cour-->
								<tr>
									<td></td>
									<td> <input type="submit" name="btn" value="update" required> </td>
								</tr>
							</table>
						</form>		
					</fieldset>
				</center>
			</td>
		</tr>
	</table>
</body>
</html>