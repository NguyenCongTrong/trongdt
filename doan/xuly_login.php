
<?php
	include 'connection.php';
	$hoten = $_POST['hoten'];
	$pass = $_POST['pass'];
	$query = "SELECT * FROM thanhvien WHERE hoten = '$hoten' and pass = '$pass'";
	if($us == null || $pw == null){
		header("Location: index.php");
	}else{
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) == 0){
			header("Location: index.php");
		}
	}
?>

