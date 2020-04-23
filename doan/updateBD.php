     <?php include('menu.php') ?>
<?php
$id = $_GET['MaSP'];

$link = mysqli_connect("localhost", "root", "") or die("Kêt nối thất bại");
mysqli_select_db($link, "lulishop");
 mysqli_set_charset($link, 'UTF8');
$qr = mysqli_query($link, "select *from xemchitiet where MaSP = ".$id."") or die("Lỗi truy vấn");
$rs = mysqli_fetch_array($qr);
?>
<form action="" method="post">
            <table >
                <th colspan="2">Cập nhật bài viết</th>
                <tr><td>Mã SP </td><td><input  name="MaSP" readonly="true" value=" <?php echo $id; ?>"></td></tr>                
                <tr><td>Tên SP</td><td><input type="text" name="TenSP"></td></tr>
                <tr><td>Số lượng</td><td><input type="text" name="SoLuong"></td></tr>
                <tr><td>Màu sắc</td><td><input type="text" name="MauSac"></td></tr>
                <tr><td>Hình ảnh</td><td><input type="text" name="HinhAnh"></td></tr>
                <tr><td>Giá tiền</td><td><input type="text" name="GiaTien"></td></tr>
                <tr><td>Mô tả</td><td><input type="text" name="MoTa"></td></tr>
                </tr>
            </table>
            <button type="submit" name="sua"></button>
</form>
<?php
if (isset($_POST['sua'])) {
    $id = $_GET['MaSP'];
    $MaSP = $_POST['MaSP'];
    $TenSP = $_POST['TenSP'];
    $SoLuong = $_POST['SoLuong'];
    $MauSac = $_POST['MauSac'];
    $HinhAnh = $_POST['HinhAnh'];
    $GiaTien = $_POST['GiaTien'];
    $MoTa = $_POST['MoTa'];
    $link = mysqli_connect("localhost","root","") or die ("khong the ket noi CSDL");
    mysqli_select_db($link, "lulishop");
    $sql = "UPDATE xemchitiet SET MaSP= '$MaSP',TenSP = '$TenSP', SoLuong = '$SoLuong',MauSac = '$MauSac',HinhAnh = '$HinhAnh',GiaTien = '$GiaTien' , MoTa = '$MoTa' WHERE xemchitiet.MaSP =".$id." ";

    $qr = mysqli_query($link, $sql) or die ("Lỗi truy vấn ");
    if($qr!=null){
      echo '<script language="javascript">';
        echo 'alert("Cập nhật thành công!!")';
       echo '</script>';
        header("location: xem.php");
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Cập nhật lỗi!!")';
        echo '</script>';
         echo 'k THÀNH CÔNG';
    }
}
?>
     <?php include('footer.php') ?>