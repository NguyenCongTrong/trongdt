<?php session_start(); ?>
<?php 
//print_r($_POST); die();
   //Xoa san pham khoi gio hang
   if(isset($_POST['btnXoa']) && isset($_POST['id']) && $_POST['id'] && $_POST['btnXoa']){
      $products = $_SESSION['cart'];
      unset($products[$_POST['id']]);
      $_SESSION['cart'] = $products;
      header("Refresh:0; url=#");
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
<?php include ('menu.php');?>
<style type="text/css">
   table tr th{
      text-align: center;
   }
</style>
<div id="page-wrapper" class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style=" text-align: center;color: white;">Giỏ hàng</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" style="text-align: center;">
                        <thead>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $carts = isset($_SESSION['cart']) && $_SESSION['cart']? $_SESSION['cart'] : []; ?>
                        <?php $total = 0; ?>
                        <?php foreach ($carts as $key => $row) { ?>
                           <?php 
                           $item_total = $row['giatien'] * $row['soluong'];
                           $total += $item_total;
                        ?>
                            <tr class="odd gradeX">
                                    <td><img src="images/<?php echo $row['hinhanh']?>" style="width: 50px"></td>
                                    <td><?php echo $row['tensp']?></td>
                                    <td><?php echo number_format($row['giatien'])."VND" ?></td>
                                    <td>
                                       <div class="product_count">
                                          <form action="" method="POST">
                                             <input type="submit" name="btnTru" value="-">
                                             <input style="width: 50px" type="text" name="soluong" value="<?php echo $row['soluong']; ?>" disabled >
                                             <input type="submit" name="btnCong" value="+">
                                             <input type="hidden" name="id" value="<?php echo $row['id']; ?>" > 
                                          </form>
                                       </div>
                                    </td>
                                    <td><?php echo number_format($item_total)."VND"  ?></td>
                                <td class="center">
                                    <form action="" method="POST">
                                       <input type="submit" name="btnXoa" value="XÓA" class="main_btn">
                                       <input type="hidden" name="id" value="<?php echo $row['id']; ?>"> 
                                    </form>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                   
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php
    if (isset($_POST['btn-sua'])) {
        $id = $_GET['id'];
        $nameProduct = $_POST['nameProduct'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $chatlieu = $_POST['chatlieu'];
        $xuatxu = $_POST['xuatxu'];
        $kichthuoc = $_POST['kichthuoc'];
        $categoryId = $_POST['categoryId'];
        $noibat = $_POST['optionsRadios'];
        $detailProduct = $_POST['detailProduct'];
        $image = $_FILES['image'];
        if($image['name'] != ""){
            $picture = $image['name'];
            $tmp_name = $image['tmp_name'];
            $pathpic=$_SERVER['DOCUMENT_ROOT'] . '/Shop_go/images/' . $picture;
            move_uploaded_file($tmp_name , $pathpic);
            $sl = "UPDATE sanpham SET ten_go = '$nameProduct', id_loaigo = $categoryId, so_luong = $quantity, noi_bat = $noibat, chi_tiet = '$detailProduct',hinhanh = '$picture', gia = $price, chat_lieu = '$chatlieu', xuat_xu = '$xuatxu', kich_thuoc = '$kichthuoc' WHERE id =".$id;
        }else{
            $sl = "UPDATE sanpham SET ten_go = '$nameProduct', id_loaigo = $categoryId, so_luong = $quantity, noi_bat = $noibat, chi_tiet = '$detailProduct', gia = $price, chat_lieu = '$chatlieu', xuat_xu = '$xuatxu', kich_thuoc = '$kichthuoc' WHERE id =".$id;
        }
        $db = new database();
        $db->command($sl);
        echo "<script language='javascript'>alert('Sửa thành công');";
        echo "location.href='?page=home&id=$id';</script>";
    }
?>

<!-- jQuery -->
<script type="text/javascript">
    function check() {
        alert('Bạn có chắc muốn xóa không?');
    }
    /*function get() {
        <?php
            $id = $_GET['id'];
            if (isset($id) && $id) {
                $dt = new database();
                $dt->select('SELECT * FROM sanpham WHERE id = '. $id);
                $row = $dt->fetch();
                $item = array(
                    'id' => $row['id'],
                    'categoryId' => $row['id_loaigo'],
                    'nameProduct' => $row['ten_go'],
                    'price' => $row['gia'],
                    'quantity' => $row['so_luong'],
                    'color' => $row['mausac'],
                    'detailProduct' => $row['chi_tiet']
                );
                $products[$row['id']] = $item;
                $_SESSION['update'] = $products;
            }
        ?>
    }*/
</script>
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
  <?php include('footer.php');?>