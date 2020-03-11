<?php
session_start();
include"header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>remove Librarian</title>
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
			height: 300px;
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
if ($connect) {
if(isset($_POST['remove'])){
		$email=$_POST['email'];
		$mysqli= "SELECT * from register_members";
		$resul=mysqli_query($connect,$mysqli);
		$mysql="DELETE FROM register_members where email='".$email."'";
		$result=mysqli_query($connect,$mysql);
		$array=mysqli_fetch_array($resul);
		if ($email==$array['email']) {
			echo "you have sucessfully remove student ".$array['fullname']."";
	
		}
		else{
			echo "failed to remove a student";
		}
	}
}
?>
	</p>
	<h1 style="margin-left: 10%">Remove student</h1><br>
<form method="POST">
		<label>Enter Email:</label><br><input type="text" name="email" placeholder="enter the email of member" required=""><br><br>
	<input type="submit" name="remove" value="remove">
</form>
 </div>
</body>
</html>