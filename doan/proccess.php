
<?php include('connect.php') ?>
<?php session_start(); ?>
<?php 
	$id = $_GET['id'];
	if (isset($id) && $id) {
		$sl= mysqli_query($link,"SELECT * FROM sanpham WHERE id =". $id);
		$row = mysqli_fetch_array($sl);
		if (isset($_SESSION['cart']) && $_SESSION['cart']) {
			$products = $_SESSION['cart'];
			
			if (isset($products[$row['id']]) && $products[$row['id']]) {
				$products[$row['id']]['soluong']++;
			}else{
				$item = array(
					'id' => $row['id'],
					'hinhanh' => $row['hinhanh'],
					'tensp' => $row['tensp'],
					'giatien' => $row['gia'],
					'soluong' => 1
				);
				$products[$row['id']] = $item;
			}
			$_SESSION['cart'] = $products;
		}else{
			$item = array(
				'id' => $row['id'],
				'hinhanh' => $row['hinhanh'],
				'tensp' => $row['tensp'],
				'giatien' => $row['gia'],
				'soluong' => 1
			);
			$products[$row['id']] = $item;
			$_SESSION['cart'] = $products;
			echo "12345";
			//echo $id;
		}
		header('location:xem.php');
	}

?>