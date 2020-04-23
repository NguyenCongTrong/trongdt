<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php  include("includes/menu.php")?>
        <section>
            <?php
            $link = mysqli_connect ("localhost","root","") or die("Khong the ket noi den MySQL");
           mysqli_select_db( $link,"lulishop");
           $sql = "select * from sanpham";
           $result = mysqli_query($link, $sql);
           echo'<table border ="1" width = "700px">';
           echo'<caption>THÔNG TIN NHÂN VIÊN</caption>';
           echo '<tr> <th>Mã Nhân Viên</th> <th>Họ Tên</th> <th>Mã Phòng Ban</th> <th>Địa Chỉ</th></tr>';
           while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
               echo 
                '<tr> <td> '.$row['IDNV'].' </td> <td>'.$row['HoTen'].'</td> <td>'.$row['IDPB'].'</td> <td>'.$row['DiaChi'].'</td></tr>';
           }
           echo '</table>';
           mysqli_free_result($result);
           mysqli_close($link);
        
        ?>
        </section>
       
        <?php  include("includes/footer.php")?>
    </body>
</html>
