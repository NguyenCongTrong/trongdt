<?php include('header.php') ?>
<?php include('menu.php') ?>
<div>
	<h2 class="tt" style="color: red; text-align: center;">Xem Chi Tiết Bài Đăng</h2>

</div>
            <?php
            $link = mysqli_connect("localhost","root","") or die ("khong the ket noi CSDL");
            mysqli_select_db($link, "timnhatro");
            mysqli_set_charset($link, 'UTF8');
            $sql = "select * from chitietbaidang ";
            $result = mysqli_query($link, $sql);

            echo '<table border = "2" width = "100%" >';
            echo '<tr style="background: yellow" ><th>Mã CTBD</th><th>Địa Chỉ</th><th>Diện Tích</th><th>Tổng số phòng</th><th>Số phòng trống</th><th>Số người ở</th><th>Hỉnh ảnh</th><th>Tiện nghi</th><th>Số tiền</th><th>Thao Tác</<th></tr>';
       while($row  = mysqli_fetch_array($result)){
		            echo  '<tr style="white-space: nowrap;"><td style="padding:15px 15px 15px 15px">'.$row['MCTBD'].'</td><td  style="padding:10px 30px 10px 30px">'.$row['DiaChi'].'</td><td  style="padding:10px 30px 10px 30px">'.$row['DienTich'].'</td><td style="padding:10px 20px 10px 20px">'.$row['Tongsophong'].'</td><td style="padding:10px 20px 10px 20px">'.$row['SoPhongTrong'].'</td><td width="100px" height="100px;" style="padding:10px 20px 10px 20px;">'.$row['SoNguoiO'].'</td><td style="padding:10px 20px 10px 20px"><img src="image/'.$row['HinhAnh'].'"><td style="padding:10px 20px 10px 20px">'.$row['TienNghi'].'</td><td style="padding:10px 20px 10px 20px">'.$row['SoTien'].'</td><td><a href="_deleteBD.php?MCTBD='.$row['MCTBD'].'">Xóa</a> | <a href="updateBD.php?MCTBD='.$row['MCTBD'].'">Sửa</a></td></tr>';

		            }
                <div class="row">
                           <?php while($row  = mysqli_fetch_array($result)){ ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="thumbnail"><a href="details.html"><img src="images/products/small/products-05.png" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $row['TenSP']; ?></div>
                                 <h4 class="price"><?php echo $row['GiaTien']; ?></h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào giỏ hàng</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                              <?php } ?>
                           </div>
                          </div>
          echo '</table>';
           // mysqli_free_result($result);
           mysqli_close($link);
            ?>
            <div><a href="insertBD.php"><input type="submit" name="them" value="Thêm"></a></div>

