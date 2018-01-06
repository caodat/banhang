
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="content-language" content="vi" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="robots" content="noodp,index,follow" />
        <meta name='revisit-after' content='1 days' />
        <title>Bán hàng online</title>

        <!-- CSS -->
        <link href='<?php echo base_url()."styles/assets" ?>/css/bootstrap.min.css' rel='stylesheet' type='text/css' />
        <link href='<?php echo base_url()."styles/assets" ?>/css/owl.carousel.css' rel='stylesheet' type='text/css' />
        <link href='<?php echo base_url()."styles/assets" ?>/css/jquery.fancybox.css' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="<?php echo base_url()."styles/assets" ?>/css/font-awesome.min.css">
        <link href='<?php echo base_url()."styles/assets" ?>/css/style.css' rel='stylesheet' type='text/css' />

        <link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
    
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

        <!-- Script -->
        <script src='<?php echo base_url()."styles/assets" ?>/js/jquery-1.11.3.min.js' type='text/javascript'></script>
        <script src='<?php echo base_url()."styles/assets" ?>/js/bootstrap.min.js' type='text/javascript'></script>
        <script src='<?php echo base_url()."styles/assets" ?>/js/owl.carousel.min.js' type='text/javascript'></script>
        <script src='<?php echo base_url()."styles/assets" ?>/js/jquery.fancybox.pack.js' type='text/javascript'></script>
        <script src='<?php echo base_url()."styles/assets" ?>/js/api.jquery.js?4' type='text/javascript'></script>
        <script src='<?php echo base_url()."styles/assets" ?>/js/main.js' type='text/javascript'></script>
<script type='text/javascript'>
(function() {
var log = document.createElement('script'); log.type = 'text/javascript'; log.async = true;
log.src = '//stats.bizweb.vn/delivery/62136.js?lang=vi';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(log, s);
})();
</script>

<!-- Google Tag Manager -->
<noscript>
<iframe src='//www.googletagmanager.com/ns.html?id=GTM-MS77Z9' height='0' width='0' style='display:none;visibility:hidden'></iframe>
</noscript>
<script>
(function (w, d, s, l, i) {
w[l] = w[l] || []; w[l].push({
'gtm.start':
new Date().getTime(), event: 'gtm.js'
}); var f = d.getElementsByTagName(s)[0],
j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
'//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-MS77Z9');
</script>
<!-- End Google Tag Manager -->

</head>

    <body>
        <div class="page">
            <!-- Header -->
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <ul>
                        
                    </ul>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <ul class="pull-right">
                        
                        <!-- <li><a href="/account/login">Đăng nhập</a></li>
                        <li><a href="/account/register">Đăng ký</a></li> -->
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <a href="<?php echo base_url(); ?>" class="header-logo">
                        <img src="<?php echo base_url(); ?>styles/assets/images/logo.png.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <a href="<?php echo base_url(); ?>" class="header-logo">
                        <img src="<?php echo base_url(); ?>styles/assets/images/14218515-1085233951572340-117172516-n-50c98d46-1423-4410-955c-bb646b6afe15.jpg">
                    </a>
                </div>
                <div class="col-lg-3 col-md-2 hidden-xs hidden-sm">
                    <div class="header-nav">
                        <ul>
                            
                        </ul>
                    </div>  
                </div>
                <div class="col-md-4 col-sm-5 col-xs-12">
                    <div class="header-search">
                        <form action="<?php echo base_url(); ?>/search" method="get" id="header-search">
                            <input type="text" id="header-search-input" placeholder="Tìm kiếm sản phẩm" value="" name="query">
                            <button id="header-search-btn" type="submit"><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-6 hidden-lg hidden-md hidden-sm">
                    <div class="header-menu-btn">
                        <a href="javascript:void(0)"><span class="fa fa-bars fa-2x"></span></a>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <div class="header-cart">
                        <a href="/cart" class="cart-icon"><?php echo count($this->cart->contents()) ?> sản phẩm</a>
                        <div class="cart-mini">
                            <div class="cart-mini-total">
                                <ul>
                                    <?php
                                        $cartContent = $this->cart->contents();
                                        if($cartContent != ""):
                                        foreach($cartContent as $cart):
                                     ?>
                                    <li>
                                        <a class="cm-image" href="<?php echo base_url()."product/detail/".$cart["id"]; ?>" title="Giày Thể Thao Nam GN83 - Size 39">
                                            <img alt="<?php echo $cart["name"] ?>" src="<?php echo base_url()."uploads/".$cart["thumbnail"] ?>" width="80">
                                        </a>
                                        <p class="cm-name">
                                            <a href="<?php echo base_url()."product/detail/".$cart["id"]; ?>" title="<?php echo $cart["name"] ?>"><?php echo $cart["name"] ?></a>
                                        </p>
                                        <p class="cm-price"><?php echo $cart["subtotal"]; ?>.000₫</p>
                                    </li>
                                    <?php  endforeach; endif; ?>
                                </ul>   
                                <p class="text-right cart-mini-total-money"></p>
                                <p class="text-right cart-mini-link">
                                    <a href="<?php echo base_url(); ?>checkout">Thanh toán</a>
                                    <a href="<?php echo base_url(); ?>cart">Giỏ hàng</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<nav class="header-nav-mobile">
    <div class="header-menu-btn-hidden">
        <a href="javascript:void(0)" class="pull-right">
            <span class="fa fa-close fa-2x"></span>
        </a>
    </div>
    <ul>
        
        <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
        <?php $catInMenu = $this->Mod_admin1->getCategoryInMenu();
        if($catInMenu != 0):
            foreach($catInMenu as $cat):
        ?>
        <li><a href="<?php echo base_url().'category/detail/'.$cat['category_id']; ?>"><?php echo $cat['category_name'] ?></a></li>
        <?php endforeach; endif; ?>
        
        <li><a href="<?php echo base_url()."home/contact" ?>">Địa chỉ - Liên hệ</a></li>
        
        <li><a href="<?php echo base_url()."home/dilivery" ?>">GIAO HÀNG - THANH TOÁN</a></li>
        
    </ul>
</nav>
</header>
<!-- End Header -->
<!-- Navigation -->
<nav class="main-nav hidden-xs">
    <div class="container">
        <div class="main-nav-content">
            <ul>
                
               <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
                <?php $catInMenu = $this->Mod_admin1->getCategoryInMenu();
                if($catInMenu != 0):
                    foreach($catInMenu as $cat):
                ?>
                <li><a href="<?php echo base_url().'category/detail/'.$cat['category_id']; ?>"><?php echo $cat['category_name'] ?></a></li>
                <?php endforeach; endif; ?>
                
                <li><a href="<?php echo base_url()."home/contact" ?>">Địa chỉ - Liên hệ</a></li>
                
                <li><a href="<?php echo base_url()."home/dilivery" ?>">GIAO HÀNG - THANH TOÁN</a></li>
                
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation -->

<!-- Main Service -->
<style>
    @media screen and (max-width: 480px) {
        .main-service .col-xs-6 { width: 100%}
    }
</style>
<div class="main-service">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <p><span class="fa fa-exchange"></span>NHẬN HÀNG THANH TOÁN</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <p><span class="fa fa-truck"></span>GIAO HÀNG TOÀN QUỐC</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <p><span class="fa fa-money"></span>Mở Cửa 8H30 - 21H30 Mỗi Ngày</p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <p><span class="fa fa fa-tty"></span>HOTLINE: 0888.28.38.48</p>
            </div>
        </div>
    </div>
</div>
<!-- End Main Service -->

<div id="add_succes" style="display:none;">
    <p><i class="fa fa-check fa-2x"></i>Thêm sản phẩm thành công</p>
</div>
 <?php $this->load->view($content); ?>
<!-- Footer -->
<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="footer-info">
                        <a href="<?php echo base_url(); ?>" class="footer-logo" title="Alomua88.com">
                            <img src="<?php echo base_url(); ?>styles/assets/images/logo.png.jpg" alt="Alomua88.com">
                        </a>
                        <p><span class="fa fa-map-marker"></span>163/29 Thành Thái Phường 14 Quận 10 HCM</p>
                        <p><span class="fa fa-phone"></span>012.18.28.38.48 </p>
                        <p><span class="fa fa-phone"></span>0888 28 38 48</p>
                        
                        <p><span class="fa fa-envelope"></span><a href="mailto:alomua88@gmail.com">alomua88@gmail.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-4  col-xs-6">
                    <div class="footer-menu">
                        <h3 class="footer-menu-heading">SẢN PHẨM MỚI</h3>
                        <ul>
                            <?php $productNew = $this->Mod_admin1->getProductNew();
                            if($productNew != 0 ): 
                            foreach($productNew as $p): ?>
                            <li><a href="<?php echo base_url()."product/detail/".$p['product_id'] ?>"><?php echo $p['product_name'] ?></a></li>
                        <?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
                
                
                <div class="col-md-2 col-sm-4  col-xs-6">
                    <div class="footer-menu">
                        <h3 class="footer-menu-heading">SẢN PHẨM CŨ HƠN</h3>
                        <ul>
                            
                            <?php $productOld = $this->Mod_admin1->getProductOld();
                            if($productOld != 0 ): 
                            foreach($productOld as $p): ?>
                            <li><a href="<?php echo base_url()."product/detail/".$p['product_id'] ?>"><?php echo $p['product_name'] ?></a></li>
                        <?php endforeach; endif; ?>
                            
                        </ul>
                    </div>
                </div>
                
                
                <div class="col-md-2 col-sm-4  col-xs-6">
                    <div class="footer-menu">
                        <h3 class="footer-menu-heading">Thông tin</h3>
                        <ul>
                            
                            <li><a href="<?php echo base_url() ?>search">TÌM KIẾM</a></li>
                            
                            <li><a href="<?php echo base_url() ?>home/dilivery">GIAO NHẬN HÀNG</a></li>
                            
                            <li><a href="<?php echo base_url() ?>home/contact">LIÊN HỆ</a></li>
                                 
                        </ul>
                    </div>
                </div>
                
                
                <div class="col-md-2 col-sm-4  col-xs-6">
                    <div class="footer-menu">
                        <h3 class="footer-menu-heading">Tài khoản</h3>
                        <ul>
                            
                            <li><a href="<?php echo base_url(); ?>">TRANG CHỦ</a></li>
                            
                            <li><a href="<?php echo base_url() ?>cart">GIỎ HÀNG</a></li>
                            
                            <li><a href="<?php echo base_url(); ?>checkout">THANH TOÁN</a></li>
                            
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="copy-right">&copy; 2016 - Alomua88.com. Cung cấp bởi <a href="<?php echo base_url(); ?>" title="Alomua88">Alomua88.com</a></p>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
        </div>
    <div id="biz-qv-showqv" style="display: none !important;">  
 <div itemscope itemtype="http://schema.org/Product">


    <!--START PRODUCT-->
     <div class="quick-view-container fancyox-view-detail">
        <div id="biz-qv-left" class="biz-left">
            <div id="biz-qv-sale"  class="biz-qv-sale biz-qv-hidden">Sale</div>
            <!-- START ZOOM IMAGE-->
             <div class="biz-qv-zoom-container">
                    <div class="zoomWrapper">
                      <div id="biz-qv-zoomcontainer" class='sqa-qv-zoomcontainer'>
                              <!-- Main image  ! DON'T PUT CONTENT HERE! -->     
                      </div>
                       
                    </div>
             </div>
            <!-- END ZOOM IMAGE-->
          
            <!-- START GALLERY-->
            <div id="biz-qv-galleryid" class="biz-qv-gallery" style="position: absolute; bottom: 10px;left: 6%;"> 
                    <!-- Collection of image ! DON'T PUT CONTENT HERE!-->
            </div>  
            <!-- END GALLERY-->
        </div>

        <!--START BUY-->
        <div id ="biz-qv-right" class="biz-right">
            <!-- -------------------------- -->
            <div id="biz-qv-title" class="name-title" >
                    <!-- Title of product ! DON'T PUT CONTENT HERE!-->
            </div>
            <!-- -------------------------- -->
            <div id ="biz-qv-price-container" class="biz-qv-price-container"  >
                    <!-- price information of product ! DON'T PUT CONTENT HERE!-->
            </div>
            <!-- -------------------------- -->
            <div id="biz-qv-des" class="biz-qv-row">
                    <!-- description of product ! DON'T PUT CONTENT HERE!-->
            </div>
            <!-- -------------------------- -->
            <div class="biz-qv-row">
                <a id="biz-qv-detail"  href="" >  </a>
            </div>
        <!-- ----------------------------------------------------------------------- -->
            <div id='biz-qv-cartform'>
              <form id="biz-qv-add-item-form"  method="post">     
                <!-- Begin product options ! DON'T PUT CONTENT HERE!-->
                <div class="biz-qv-product-options">
                  <!-- -------------------------- -->
                  <div id="biz-qv-variant-options" class="biz-qv-optionrow">
                            <!-- variant options  of product  ! DON'T PUT CONTENT HERE!-->
                  </div>  
                  <!-- -------------------------- -->
                  <div class="biz-qv-optionrow">        
                    <label>Số lượng</label>
                    <input id="biz-qv-quantity" min="1" type="number" name="quantity" value="1"  />
                  </div>
                  <!-- -------------------------- -->
                  <div class="biz-qv-optionrow">
                     <p id="biz-qv-unavailable" class="biz-sold-out biz-qv-hidden">Không sẵn có</p>
                     <p id="biz-qv-sold-out" class="biz-sold-out biz-qv-hidden">Hết hàng</p>
                     <input type="submit" class="biz-qv-cartbtn biz-qv-hidden" value="Thêm vào giỏ hàng" />
                     
                  </div>
                  <!-- -------------------------- -->                   
                                    
                </div>
               <!-- End product options -->
            </form>
         </div>

       </div>
       <!--END BUY-->
    </div>
    <!--END PRODUCT-->
 </div>
</div>
<!-- Script -->

</body>
</html>