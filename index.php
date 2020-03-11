<?php
session_start();
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
			height: 400px;
			width: 500px;
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
		.main input[type="text"], input[type="email"],input[type="number"], input[type="password"],  input[type="date"], select{
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
			font-size: 25px;
			height: 40px;
			margin-left: 6%;
			font-weight: bold;
		}
		.main input[type="submit"]:hover{
			background: green;
			cursor: pointer;
			font-weight: bold;
			border-radius: 15px;
			width: 100px;
			height: 40px;
			margin-left: 6%;
		}
		form{
			text-align: center;
		}
		#psw a{
			color: red;
			font-weight: bold;
			text-decoration: none;
		}
	</style>
</head>
<body>
<div class="main">
	<p style="color: red" align="center"> 
<?php
$servername= "localhost";
$username="root";
$password="";
$dbname="LMRS";
$connect=mysqli_connect($servername,$username,$password,$dbname);
if (!$connect) {
	echo "failed to connect to the database";
}
	if (isset($_POST['login'])) {

$username=$_POST['username'];
$pass1=$_POST['pass1'];
if ($connect) {
$link="SELECT * FROM register_librarian where username='".$username."' AND pass1='".$pass1."'";
	$output=mysqli_query($connect,$link);
	$row = mysqli_fetch_array($output);
	if ($pass1== $row['pass1']) {
		$_SESSION['username']=$username;

	header('Location:header.php');
	exit();
	}
else{
	echo "wrong password or username please try again..!!!";
	}
}
}
?>
	</p>
	<h1 align="center">Login here</h1><br>
<form method="POST">
		<label>Username:</label><br><input type="text" name="username" required=""><br><br>
       <label>Password:</label><br><input type="password" name="pass1" required=""><br><br>
	<input type="submit" name="login" value="login">
</form>
 </div>
</body>
</html>