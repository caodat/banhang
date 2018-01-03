           <!-- Main Slider -->
<div class="main-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="main-categories">
                    <h3 class="main-categories-heading">Danh mục sản phẩm</h3>
                    <div class="main-categories-content">
                        <ul class="mc-list">
                            <?php foreach($category as $cat): ?>
                                <?php 
                                $subCat = $this->Mod_home->getSubCategory($cat['category_id']);
                                if( $subCat == 0): ?>
                                <li><a href="/giay-nam"><?php echo $cat["category_name"]; ?></a></li>
                                <?php else: ?>
                                <li>
                                    <a href="javascript:void(0)"><?php echo $cat["category_name"] ?><span class="fa fa-angle-down"></span></a>
                                    <ul class="mc-list-child">
                                        <?php foreach($subCat as $sub): ?>
                                            <li><a href="/hinh-xam-dan-lon"><?php echo $sub['category_name'] ?></a></li>
                                        <?php endforeach; ?> 
                                    </ul>
                            </li>
                                <?php endif; ?>    
                            <?php endforeach; ?>    
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="main-slider-content">
                    <div class="item">
                        <a href="#"><img src="<?php echo base_url() ?>/uploads/slider/slider_1.jpg" alt="Slide 1"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo base_url() ?>/uploads/slider/slider_2.jpg" alt="Slide 2"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="<?php echo base_url() ?>/uploads/slider/slider_3.jpg" alt="Slide 3"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Slider -->
<!-- Main Product List -->
<?php foreach($category as $cat): ?>
    <?php 
        $product = $this->Mod_home->findCategoryInProduct($cat["category_id"]);
        if($product != 0):
    ?>
        <div class="main-product-list">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box-heading">
                            <h3><a href="gang-tay-xe-may"><?php echo $cat["category_name"] ?></a></h3>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <?php foreach( $product as $p ): ?>
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product-carousel">
                                    <a href="/gang-tay-xe-may-bit-ngon-bn26" class="product-image">
                                        <img src="<?php echo base_url().'/uploads/'.$p["product_thumbnail"] ?>" alt="Găng Tay Xe Máy Bít Ngón BN26" class="img-responsive"></a>
                                        <h4 class="product-name">
                                            <a href="/gang-tay-xe-may-bit-ngon-bn26" title="<?php echo $p["product_name"] ?>"><?php echo $p["product_name"] ?></a>
                                        </h4>
                                        <p class="product-price">
                                            <?php echo $p["product_price"] ?>.000₫
                                        </p>
                                        <a href="/gang-tay-xe-may-bit-ngon-bn26"  class="product-atc">Mua hàng</a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>
<!-- End Main  Product List -->
<!-- End Main Brand -->