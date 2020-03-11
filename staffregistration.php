<?php
session_start();
if (!$_SESSION['username']) {
	header('Location:index.php');
}
include"header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>staff registration</title>
	<style type="text/css">
	body{
		background: url('library.jpg');
		background-size: cover;
		background-attachment: fixed;
	}
		
		/*for styling the the main div which contain the registration form*/
		.main{
			margin-top: 200px;
			margin-left: 30%;
			height: 450px;
			width: 600px;
			position: relative;
			background: transparent;
			border: 6px blue solid;
			border-radius: 15px;
		}
		/* for styling the labels in the form texts before the input fields*/
		.main label{
			font-weight: bold;
			width: 150px;
			display: inline-block;
			margin-left: 25px;
		}
		h1{
			margin-left: 160px;
			color: blue;
			display: inline-block;
			text-align: center;
		}
		/* for styling input types of email twext num ber and string*/
		.main input[type="text"], input[type="email"],input[type="number"], input[type="string"],  input[type="date"], select{
			width: 200px;
			height: 30px;
			border-radius: 8px;
			color: black;
			border: 2px blue solid;
		}
		/*for styling input type sunmit which is the register button*/
		.main input[type="submit"]{
			background: blue;
			cursor: pointer;
			border-radius: 15px;
			width: 100px;
			height: 40px;
			margin-left: 45%;
		}
		.main input[type="submit"]:hover{
			background: green;
			cursor: pointer;
			border-radius: 15px;
			width: 100px;
			height: 40px;
			margin-left: 45%;
		}
	</style>
</head>
<body>
<div class="main">
	<p style="color: green" align="center"> 
<?php
$servername= "localhost";
$username="root";
$password="";
$dbname="LMRS";
$connect=mysqli_connect($servername,$username,$password,$dbname);
if (!$connect) {
	echo "failed to connect to the database";
}
	if (isset($_POST['register'])) {
$fullname=$_POST['fname'];
$Faculty=$_POST['faculty'];
$phonenumber=$_POST['pnumber'];
$email=$_POST['email'];
$sex=$_POST['sex'];
if ($connect) {
$link="INSERT INTO register_staff (fullname,faculty,phonenumber,email,sex,regdate) VALUES('$fullname','$Faculty','$phonenumber','$email','$sex',now())
";

	$output=mysqli_query($connect,$link);
	if ($output) {
	echo "you have successfully register Staff-member ". $fullname."";
	}
else{
	echo "registration failed";
	}
}
}
?>
	</p>
	<h1 align="center">Register Staff</h1><br>
<form method="POST">
		<label>FullName:</label><input type="text" name="fname" required=""><br><br>
       <label>Faculty:</label><input type="text" name="faculty" required=""><br><br>
	  <label>phoneNumber:</label><input type="number" name="pnumber" required=""><br><br>
	  <label>Email:</label><input type="email" name="email" required=""><br><br>
	  <label>sex:</label><select name="sex"><option>Male</option><option>Female</option></select><br><br>
	<input type="submit" name="register" value="Register">
</form>
 </div>
</body>
</html>