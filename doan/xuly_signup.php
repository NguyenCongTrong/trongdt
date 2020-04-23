<?php
	include 'connection.php';
	$fn = $_POST['fname'];
	$ln = $_POST['lname'];
	$us = $_POST['uname'];
	$pw = $_POST['pass'];
	$em = $_POST['email'];
	$ph = $_POST['phone'];
	$dc = $_POST['add'];
	$nm = $fn.' '.$ln;
	$qr = "INSERT INTO thanhvien(hoten,username,pass,email,sdt,diachi) VALUES('$nm', '$us', '$pw', '$em', '$ph','$dc')";
	$rs = mysqli_query($conn,$qr);
	mysqli_close($rs);
	header("Location: login.php?name=$us");	
?>