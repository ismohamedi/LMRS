<?php
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.navigation{
			position: fixed;
			top: 0px;
			height: 150px;
			width: 100%;
			background: transparent;
			border: 5px blue solid;
			z-index: 30;
		}
		.navigation ul{
			margin-top: 3%;
			color: blue;
			position: fixed;
			display: inline-block;
			list-style: none;
		}
		.navigation ul li{
			margin-left: 10 px;
			margin-top: 4%;
			text-align: center;
			display: inline-block;
			list-style: none;
			background: #FF6F00;
			width: 235px;
			height: 60px;
			margin: 6px;
			border-radius: 7px;

		}
		.navigation ul li a{
			text-align: center;
			text-decoration: none;
			font-size: 35px;
		}
		.navigation ul li ul li{
	display: none;
}
.navigation ul li:hover ul li{
	display: block;
	color: #FF6F00;
	margin-top: ;
	border: 2px blue solid;
    top: 0px;
	background: #FF6F00;
	margin: 1px;
	border-radius: 0px;
	margin-left: -200px;
}
	</style>
	<title></title>
</head>
<body>
<div class="navigation">
	<h1 align="center" style="color: blue;margin: 0px; position: fixed; margin-left: 20%">LIBRARY MEMBERSHIP REGISTRATION SYSTEM</h1>
	<ul>
		<li><a href="">HOME</a>
			<ul>
				<li><a href="home.php"> HOME</a></li>
				<li><a href="index.php">logout</a> </li>
			</ul>

		</li>
		<li><a id="uo">LIBRARIAN</a>
			<ul>
	<li ><a href="registerlibrarian.php">Register</a> </li>
	<li><a href="profile.php">Profile</a> </li>
</ul>
		</li>
		<li><a href="registration.php">STUDENT</a></li>
		<li><a href="staffregistration.php">STAFF</a></li>
		<li><a >VIEW</a>
<ul>
	<li><a href="viewstudent.php">students</a></li>
	<li><a href="viewstaff.php">staff</a></li>
	<li><a href="viewlibrarians.php">librarians</a></li>
</ul>
		</li>
		<li><a href="">REMOVE</a>
			<ul>
				<li><a href="removelibrarian.php">Librarian</a></li>
				<li><a href="removestudent.php">student</a></li>
				<li><a href="removestaff.php">staff</a></li>
			</ul>

		</li>
	</ul>
</div>
</body>
</html>