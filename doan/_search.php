
<?php include('menu.php') ?>

<?php
        $link = mysqli_connect("localhost","root","") or die ("khong the ket noi CSDL");
        mysqli_select_db($link, "lulishop");
        if (isset( $_GET['submit']) && $_GET["search"] !=  '') {
                $search = $_GET['search'];
                 $query = "SELECT * FROM sanpham WHERE (id like '%$search%') OR (tensp like '%$search%') OR (soluong like '%$search%') OR (mausac like '%$search%') OR (hinhanh like '%$search%') ";
                $sql = mysqli_query($link, $query);
                $num = mysqli_num_rows($sql);
                if ($num > 0) {
                    echo $num." kết quả tìm kiếm <b>".$search."</b> ";
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    foreach( $sql as $row ) {
                        echo '<tr></br>';
                            echo "<td>{$row['id']}</td>";
                            echo "<td>{$row['tensp']}</td>";
                            echo "<td>{$row['soluong']}</td>";
                            echo "<td>{$row['mausac']}</td>";
                          echo "<div <imgages></div><td >{$row['hinhanh'] }</td></br>";
                           
                        echo '</tr>';
                }
                echo '</table>';
            } 
            else {
                echo "Không tìm thấy kết quả!";
            }
        }
        ?>
        <img src="images/<?php echo $row['hinhanh']?>">
               
<?php include('footer.php') ?>


