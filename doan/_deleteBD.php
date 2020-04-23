<?php include('menu.php') ?>
<?php
     $MaSP = $_GET['MaSP'];
    $link = mysqli_connect("localhost","root","") or die ("khong the ket noi CSDL");
    mysqli_select_db($link, "lulishop");
    $sql = "delete from xemchitiet where MaSP ='$MaSP' ";
    $qr = mysqli_query($link, $sql) or die ("Lỗi truy vấn ");
    if($qr){
        header("location:xem.php");
    }
?>

<?php include('footer.php') ?>
