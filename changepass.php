<?php
session_start();
include"header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
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
			height: 400px;
			width: 700px;
			border-radius: 13px;
			margin-top: 200px;
			margin-left: 25%;
			border:4px blue solid;
		}

		.center input[type="submit"]{
			background: blue;
			cursor: pointer;
			border-radius: 15px;
			width: 100px;
			font-size: 25px;
			height: 40px;
			margin-left: 42%;
			font-weight: bold;
		}
		.center input[type="submit"]:hover{
			background: green;
			cursor: pointer;
			font-weight: bold;
			border-radius: 15px;
			width: 100px;
			height: 40px;
			margin-left: 25%;
		}
		.center label{
			font-weight: bold;
			margin-left: 30px;
			display: inline-block;
			width: 220px;
		}
input[type="email"], input[type="password"]{
border:2px blue solid;
border-radius: 8px;
height: 30px;
width: 200px;
}


	</style>

</head>
<body>
	<div class="center">
		<h1 align="center" style="color: blue">change password</h1>
		<p align="center" style="color: green">
<?php
$servername="localhost";
$username="root";
$password="";
$database="LMRS";
$connect=mysqli_connect($servername,$username,$password,$database);
if (!$connect) {
 echo "failed to connect to the database";
}

if (isset($_POST['send'])) {
$email=$_POST['email'];
$pass1=md5($_POST['psw']);
$pass2=md5($_POST['pass']);
if ($pass1==$pass2) {
$sql="UPDATE register_librarian set pass1='".$pass1."' where email='".$email."'";
$result=mysqli_query($connect,$sql);
if ($result) {
	echo "Thanks ".$_SESSION['username']." your password has been changed";
}
else{
	echo "failed to change";
}
}
}
?>
		</p>
		<form method="POST">
<label>Email:</label><input type="email" name="email" placeholder="Enter your Email">
<br><br>
<label>Enter New Password:</label><input type="Password" name="psw" placeholder="Enter your new password"><br><br>
<label>Confirm Password:</label><input type="Password" name="pass" placeholder="Confirm your password"><br><br>
<p><input type="submit" name="send" value="SAVE"></p>
</form>
</div>
</body>
</html>
