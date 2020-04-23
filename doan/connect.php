<?php 
	$link = mysqli_connect("localhost","root","") or die ("khong the ket noi CSDL");
    mysqli_select_db($link, "lulishop");
    mysqli_set_charset($link, 'UTF8');
?>