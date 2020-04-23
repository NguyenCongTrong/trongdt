
<?php include('menu.php') ?>

<html>
<header>
    <title>Thêm bài đăng</title>
</header>
<body>
        <form action="" method="post">
            <table border="0" align="center">
                <th colspan="2">Thêm bài đăng</th>
                <tr><td>tên sp</td><td><input type="text" name="TenSP"></td></tr>            
                <tr><td>Hình ảnh</td><td><input type="text" name="HinhAnh"></td></tr>
                <tr><td>Giá tiền</td><td><input type="text" name="GiaTien"></td></tr>
                
            </table>
            <input type="submit" value="Thêm Bài Đăng" name="them" /> 
            <?php
            if (isset($_POST['them'])) {      
            $TenSP = $_POST['TenSP'];       
            $HinhAnh = $_POST['HinhAnh'];
            $GiaTien = $_POST['GiaTien'];
                   


            $link = mysqli_connect("localhost","root","") or die ("khong the ket noi CSDL");
            mysqli_select_db($link, "lulishop");
            $sql = "insert into xemttbd(TenSP,HinhAnh,GiaTien) values( '".$TenSP."','".$HinhAnh."','".$GiaTien."')";
            //echo $sql;
            
            $qr = mysqli_query($link, $sql) or die ("Lỗi truy vấn ");
          if($qr){
              echo '<script language="javascript">';
                echo 'alert("Thêm thành công!!")';
                echo '</script>';
                header("location: index.php");
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("Cập nhật lỗi!!")';
                echo '</script>';
            }
        }

            ?>          
        </form>
</body>
</html>
<?php include('footer.php') ?>
