<?php
session_start();
if (!$_SESSION['username']) {
	header('Location:index.php');
}
include"header.php";
$servername="localhost";
$username="root";
$password="";
$database="LMRS";
$connect=mysqli_connect($servername,$username,$password,$database);
if (!$connect) {
 echo "failed to connect to the database";
}
$sql = 'SELECT * 
		FROM register_members';
		
$query = mysqli_query($connect, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($connect));
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
		background: url('library.jpg');
		background-size: cover;
		background-attachment: fixed;
	}
		.center{
			margin-left: 20%;
			border: 5px blue solid;
			height: auto;
			width: 950px;
			margin-top: 200px;
			background: white;
			color: black;
		}
		.center table {
			margin-left: 5px;
		}
	</style>
	<title>student deatails</title>
</head>
<body>
<div class="center">
<h1 align="center" style="color: blue">Student Details:</h1>
	<table class="data-table" style="color: black; margin-left:0px; margin-bottom:5px; margin-top: 6%"  margin="2" border="2">
		<thead>
			<tr >
				<th width="130">FullName</th>
				<th width="130">Faculty</th>
				<th width="130">Reg-Number</th>
				<th width="130">PhoneNumber</th>
				<th width="130">Email</th>
				<th width="130">Sex</th>
				<th width="130">Re-date</th>
		
			</tr>
		</thead>
		<tbody>
		<?php
				
				while ($row = mysqli_fetch_array($query)){
			echo '<tr>
					<td>'.$row['fullname'].'</td>
					<td>'.$row['faculty'].'</td>
					<td>'.$row['regnumber'].'</td>
					<td>'.$row['phonenumber'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['sex'].'</td>
					<td>'.$row['regdate'].'</td>
				</tr>';
			
		}?>
		</tbody>
		
	</table>
</div>
</body>
</html>