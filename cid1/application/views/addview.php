<!DOCTYPE html>
<html lang="en">
<head>
  <title>แก้ไขข้อมูล</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<body style="background-color: #CCFFCC">
<?php
	echo "<h1>".$title."</h1>";
	echo "<h2>".$class."</h2>";
?>
<form method="get" action="<?=base_url();?>index.php/member/add_member">
	id:<input type="text" name="id"><br>
	name:<input type="text" name="name"><br>
	password:<input type="text" name="password"><br>
	status:<input type="text" name="status"><br>
	<input type="submit" value="เพิ่มสมาชิก" name="btnsave">
</form>

