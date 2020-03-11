<?php
session_start();
if (!$_SESSION['username']) {
	header('Location:index.php');
}
include"header.php";
?>
<?php

$servername="localhost";
$username="root";
$password="";
$database="LMRS";
$connect=mysqli_connect($servername,$username,$password,$database);
if (!$connect) {
 echo "failed to connect to the database";
}
$sql = "SELECT * 
		FROM register_librarian where username='".$_SESSION['username']."'" ;
		
$query = mysqli_query($connect, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($connect));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Librarian profile</title>
	<style type="text/css">
	body{
    background: url('library.jpg');
    background-size: cover;
    background-position: fixed;
    background-attachment: fixed;
    z-index: 60;
}

		.center{
			background: transparent;
			height: 300px;
			width: 700px;
			border-radius: 13px;
			margin-top: 200px;
			margin-left: 25%;
			text-align: center;
			border:4px blue solid;
		}
		.center p{
			margin-top: 10px;
			margin-left: 20px;
		}
		.center p a{
			background:#FF6F00;
			height: 30px;
			border-radius: 15px;
			margin: 4px;
			font-weight: bold;
		}
		.center p label{
			margin-left: -100px;
			display: inline-block;
			text-align: center;
			width: 200px;
		}
		.center table{
			margin-left: 100px;
			background: lightgray;
		}

	</style>
</head>
<body>
	<div class="center">
		<h1 align="center" style="color: blue"> My profile</h1>
		<p>
<table border="2" padding="20">
	<tr>
		<td>Fullname:</td>
		<td><?php
	$row = mysqli_fetch_array($query);
echo "".$row['fullname']."";
	?></td>
	</tr>
	<tr>
		<td>UserName:</td>
		<td><?php echo "".$row['username'].""; ?></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><?php echo " ".$row['email'].""; ?></td>
	</tr>
	<tr>
		<td>PhoneNumber:</td>
		<td><?php echo "".$row['phonenumber'].""; ?></td>
	</tr>
	<tr>
		<td>Sex:</td>
		<td><?php echo "".$row['sex'].""; ?></td>
	</tr>

</table><br>
	<a href="changepass.php" style="background:#FF6F00; border-radius: 15px;height: 40px;">change password</a>
	</p>


</div>
</body>
</html>