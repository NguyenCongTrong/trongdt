<?php include('connect.php') ?>
<?php 
   session_start();
    $sql = "SELECT * FROM sanpham";
    $result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html >
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Welcome to LuliShop</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
      <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
      <link href="css/style.css" rel="stylesheet">
      <link href="css/formgiohang.css" rel="stylesheet" type="text/css">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
   </head>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="/"><img src="images/logo.png" alt="LuliShop"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">
                     <div class="header_top">
                        <div class="row">
                           <div class="col-md-3">
                              <ul class="option_nav">
                                 <li class="dorpdown">
                                    <a href="#">Vns</a>
                                    <ul class="subnav">
                                       <li><a href="#">Vns</a></li>
                                       <li><a href="#">Eng</a></li>
                                       <li><a href="#">Fer</a></li>
                                       <li><a href="#">Gem</a></li>
                                    </ul>
                                 </li>
                                 <li class="dorpdown">
                                    <a href="#">VND</a>
                                    <ul class="subnav">
                                       <li><a href="#">VND</a></li>
                                       <li><a href="#">UKD</a></li>
                                       <li><a href="#">FER</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-md-3">
                              <ul class="usermenu">
                                 <li><a href="login.php" class="log">Login</a></li>
                                 <li><a href="page_signup.php" class="reg">Register</a></li>
                              
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <li><button><a href="search.php" type="button">Tìm Kiếm</a></button></li>
                           </li>
                           
                                 
                              </ul>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown">
                                 <a href="/" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                              </li>
                              <li><a href="productgird.html">Men</a></li>
                              <li><a href="productlitst.html">Women</a></li>
                              <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                 <div class="dropdown-menu mega-menu">
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New Collection</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <li><a href="productgird.html">Laptop & Brie</a></li>
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                       <div class="col-md-6 col-sm-6">
                                          <ul class="mega-menu-links">
                                             <li><a href="productgird.html">New Collection</a></li>
                                             <li><a href="productgird.html">Shirts & tops</a></li>
                                             <li><a href="productgird.html">Laptop & Brie</a></li>
                                             <li><a href="productgird.html">Dresses</a></li>
                                             <li><a href="productgird.html">Blazers & Jackets</a></li>
                                             <li><a href="productgird.html">Shoulder Bags</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li><a href="productgird.html">gift</a></li>
                              <li><a href="productgird.html">kids</a></li>
                              <li><a href="productgird.html">blog</a></li>
                              <li><a href="productgird.html">jewelry</a></li>
                              <li><a href="insertBD.php" >Post</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="hom-slider">
            <div class="container">
               <div id="sequence">
                  <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
                  <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
                  <ul class="sequence-canvas">
                     <li class="animate-in">
                        <div class="luli-caption caption1 formLeft delay300 text-center"><span class="suphead">Paris show 2019</span></div>
                        <div class="luli-caption caption2 formLeft delay400 text-center">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="luli-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="luli-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="luli-image formBottom delay200" data-duration="5" data-bottom="true"><img src="images/slider-image-01.png" alt=""></div>
                     </li>
                     <li>
                        <div class="luli-caption caption2 formLeft delay400">
                           <h1>Collection For Winter</h1>
                        </div>
                        <div class="luli-caption caption3 formLeft delay500">
                           <h2>Etiam velit purus, luctus vitae velit sedauctor<br>egestas diam, Etiam velit purus.</h2>
                        </div>
                        <div class="luli-button caption5 formLeft delay600"><a class="more" href="#">More Details</a></div>
                        <div class="luli-image formBottom delay200" data-bottom="true"><img src="images/slider-image-02.png" alt=""></div>
                     </li>
                     <li>
                        <div class="luli-caption caption2 formLeft delay400 text-center">
                           <h1>New Fashion of 2019</h1>
                        </div>
                        <div class="luli-caption caption3 formLeft delay500 text-center">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                        </div>
                        <div class="luli-button caption4 formLeft delay600 text-center"><a class="more" href="#">More Details</a></div>
                        <div class="luli-image formBottom delay200" data-bottom="true"><img src="images/slider-image-03.png" alt=""></div>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="promotion-banner">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-01.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-02.png" alt=""></div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="promo-box"><img src="images/promotion-03.png" alt=""></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
         <div class="container_fullwidth">
            <div class="container">
               <div class="hot-products">
                  <h3 class="title"><strong>Hot</strong> Products</h3>
                  <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next" href="#">&gt;</a></div>
                  <ul id="hot">
                     <li>
                        <form action="/doan/xem.php" method="post">
                           <div class="row">
                              <?php while($row  = mysqli_fetch_array($result)){ ?>
                              <div class="col-md-3 col-sm-6">
                                 <div class="products">
                                    <div class="offer">- %20</div>
                                    <div class="thumbnail"><a href=""><img src="images/<?php echo $row['hinhanh']; ?>" width="212px" height="100px" alt="Product Name"></a></div>
                                    <div class="productname"><?php echo $row['tensp']; ?></div>
                                    <h4 class="price"><?php echo number_format($row['gia'])."VND" ?></h4>
                                    <div class="button_group">
                                       <button class="button add-cart" type="button" ><a href="proccess.php?id=<?php echo $row['id'];?>">Thêm vào giỏ hàng</a></button>
                                       <!-- <input type="submit" name="them" value="Thêm vào giỏ hàng"> -->
                                       <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                                       <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button>
                                    </div>
                                 </div>
                              </div>
                               <?php } ?>
                           </div>
                           <?php 
   if (isset($_POST['them'])) {
      // $sl= mysqli_query($link,"SELECT * FROM sanpham WHERE id =". $id);
      // $row = mysqli_fetch_array($sl);
      if (isset($_SESSION['cart'])) {
         /*$products = $_SESSION['cart'];
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
         $_SESSION['cart'] = $products;*/
         $_SESSION['cart'] = 1;
      }else{
        /* $item = array(
            'id' => $row['id'],
            'hinhanh' => $row['hinhanh'],
            'tensp' => $row['tensp'],
            'giatien' => $row['gia'],
            'soluong' => 1
         );
         $products[$row['id']] = $item;*/
         $_SESSION['cart'] = 2;
      }
      //header('location:xem.php');
      //echo $row['tensp'];
   }

?>
                        </form>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>
               <div class="featured-products">
                  <h3 class="title"><strong>Featured </strong> Products</h3>
                  <div class="control"><a id="prev_featured" class="prev" href="#">&lt;</a><a id="next_featured" class="next" href="#">&gt;</a></div>
                  <ul id="featured">
                     <li>
                       <div class="row">
                           <?php while($row  = mysqli_fetch_array($result)){ ?>
                           <div class="col-md-3 col-sm-6">
                              <div class="products">
                                 <div class="offer">- %20</div>
                                 <div class="thumbnail"><a href="details.html"><img src="images/<?php echo $row['HinhAnh']; ?>" width="212px" height="100px" alt="Product Name"></a></div>
                                 <div class="productname"><?php echo $row['TenSP']; ?></div>
                                 <h4 class="price"><?php echo $row['GiaTien']; ?> VND</h4>
                                 <div class="button_group"><button class="button add-cart" type="button">Thêm vào giỏ hàng</button><button class="button compare" type="button"><i class="fa fa-exchange"></i></button><button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              </div>
                           </div>
                            <?php } ?>
                           
                     </li>
                     
                           </div>
                         
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="clearfix"></div>

         <div class="clearfix"></div>
         <div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Thông tin <strong>liên lạc</strong></h4>
                        <p>No. 02 Thanh Sơn, Hải Châu, Đà Nằng</p>
                        <p>Call : 0794 608 852</p>
                        <p>Email : Luli@gmail.com</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Hỗ trợ<strong> Khách hàng</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Phương thức thanh toán</a></li>
                           <li><a href="#">Mẹo đặt phòng</a></li>
                           <li><a href="#">Thông tin</a></li>
                        </ul>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- Bootstrap core JavaScript==================================================-->
	  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
	  <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript" src="js/script.min.js" ></script>
   </body>
</html>