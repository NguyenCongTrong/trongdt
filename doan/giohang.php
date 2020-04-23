<?php 
//print_r($_POST); die();
	//Xoa san pham khoi gio hang
	if(isset($_POST['btnXoa']) && isset($_POST['id']) && $_POST['id'] && $_POST['btnXoa']){
		$products = $_SESSION['cart'];
		unset($products[$_POST['id']]);
		$_SESSION['cart'] = $products;
	}

	//Trừ san pham
	if(isset($_POST['btnTru']) && isset($_POST['id']) && $_POST['id'] && $_POST['btnTru']){
		$products = $_SESSION['cart'];
		//nếu số lượng lớn hơn 1 thì trừ đi 1 đơn vị, ngược lại bằng 1 thì xóa khỏi giỏ hàng
		if($products[$_POST['id']]['soluong'] > 1){
			$products[$_POST['id']]['soluong']--;
		}else{
			unset($products[$_POST['id']]);
		}
		$_SESSION['cart'] = $products;
	}

	//Cộng san pham
	if(isset($_POST['btnCong']) && isset($_POST['id']) && $_POST['id'] && $_POST['btnCong']){
		$products = $_SESSION['cart'];
		$products[$_POST['id']]['soluong']++;
		$_SESSION['cart'] = $products;
	}
?>

<div style="width: 100%">
	<div class="alo">
		<p class="ttsp">Sản Phẩm Trong Giỏ Hàng</p>
		<?php $carts = isset($_SESSION['cart']) && $_SESSION['cart']? $_SESSION['cart'] : []; ?>
		
		<table >
			<?php $total = 0; ?>
			<?php foreach ($carts as $key => $product) { ?>
			<?php 
				
				$item_total = $product['giatien'] * $product['soluong'];
				$total += $item_total;
			?>
			<tr>
				<td style="width: 120px;"><img src="images/<?php echo $product['hinhanh']; ?>"></td>
				<td style="width: 280px;"><?php echo $product['tenSP'];?></br>
					<span style="color: red;"><?php echo number_format($product['giatien']);?> ₫</span>
				</td>
				<td class="soluong">
					<form action="/doan/?page=muahang" method="POST">
					<input type="submit" name="btnTru" value="-">
					<input type="text" name="soluong" value="<?php echo $product['soluong']; ?>">
					<input type="submit" name="btnCong" value="+">
					<input type="hidden" name="id" value="<?php echo $product['id']; ?>"> 
					</form>
				</td>
				<td>Tổng tiền:
					<span style="color: red;">
						<?php echo number_format($item_total);?> ₫
					</span>
				</td>
				<td>
					<form action="/doan/?page=muahang" method="POST">
					<input type="submit" name="btnXoa" value="xóa" style="background: #f57224;color: #fff;border: none;width: 45px;height: 20px;">
					<input type="hidden" name="id" value="<?php echo $product['id']; ?>"> 
					</form>
					
				</td>
			</tr>
			<?php }	
			?>
		</table>
		
		
		<div class="tieptuc">
			<a href="index.php" class="index">Tiếp Tục Mua Hàng</a>
		</div>
	</div>
<!-- Thông Tin Giao Hàng -->
	
<?php
	if (isset($_POST['index'])) {
		echo "<script language='javascript'>location.href='?page=thanh_toan';</script>";
	}
?>