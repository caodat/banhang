
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    
                    <li class="active">Tìm kiếm</li>
                    
                </ol>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
    <div class="collection-categories">
        <h3 class="collection-categories-heading"><span class="fa fa-bars"></span>Danh mục sản phẩm</h3>
        <div class="collection-categories-content">
            <ul class="cc-list">
                <?php foreach($category as $cat): ?>
                    <?php 
                    $subCat = $this->Mod_search->getSubCategory($cat['category_id']);
                    if( $subCat == 0): ?>
                    <li><a href="<?php echo base_url()."category/detail/".$cat["category_id"] ?>"><?php echo $cat["category_name"]; ?></a></li>
                    <?php else: ?>
                    <li>
                        <a href="javascript:void(0)"><?php echo $cat["category_name"] ?><span class="fa fa-angle-down"></span></a>
                        <ul class="cc-list-child">
                            <?php foreach($subCat as $sub): ?>
                                <li><a href="<?php echo base_url()."category/detail/".$sub["category_id"] ?>"><?php echo $sub['category_name'] ?></a></li>
                            <?php endforeach; ?> 
                        </ul>
                </li>
                    <?php endif; ?>    
                <?php endforeach; ?>  
            </ul>
        </div>
    </div>

</div>
            <div class="col-lg-9 col-md-9">
                
                <div class="colletion-topbar">
                    <div class="pull-left btn-view">
                        <a href="javascript:void(0)" class="btn-view-grid"><span class="fa fa-th fa-lg"></span></a>
                        <a href="javascript:void(0)" class="btn-view-list"><span class="fa fa-list fa-lg"></span></a>
                    </div>
                    <div class="pull-right">
                        
                    </div>
                </div>
                <div class="product-list-grid">
                    <div class="row"> 
                        <?php  if($product != 0): foreach($product as $p): ?>
                            <div class="col-md-4 col-sm-4 col-xs-6 biz-qv-image">
                                <div class="product-carousel">
                                    <a href="<?php echo base_url()."product/detail/".$p["product_id"] ?>" class="product-image">
                                        <img src="<?php echo base_url()."uploads/".$p["product_thumbnail"] ?>" alt="<?php echo $p["product_name"] ?>" class="img-responsive"></a>
                                    <h4 class="product-name"><a href="<?php echo base_url()."product/detail/".$p["product_id"] ?>" title="<?php echo $p["product_name"] ?>"><?php echo $p["product_name"] ?></a></h4>
                                    <p class="product-price">
                                        <?php echo $p["product_price"] ?>.000₫
                                    </p>
                                    <a href="<?php echo base_url()."product/detail/".$p["product_id"] ?>" class="product-atc">Mua hàng</a>
                                </div>
                            </div>  
                        <?php endforeach; ?>                       
                    </div>
                </div>
                <div class="product-list-list" style="display: none;">
                    <?php foreach($product as $p): ?>
                    <div class="row biz-qv-image">
                        <div class="product-carousel">
                            <div class="col-md-4 col-sm-4">
                                <a href="<?php echo base_url()."product/detail/".$p["product_id"] ?>" class="product-image">
                                    <img src="<?php echo base_url()."uploads/".$p["product_thumbnail"] ?>" alt="<?php echo $p["product_name"] ?>" class="img-responsive">
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                 <h4 class="product-name"><a href="<?php echo base_url()."product/detail/".$p["product_id"] ?>" title="<?php echo $p["product_name"] ?>"><?php echo $p["product_name"] ?></a></h4>
                                    <p class="product-price">
                                <p class="product-price">
                                    <?php echo $p["product_price"] ?>.000₫
                                </p>
                                <p class="product-description"><?php echo $p["product_description"] ?> </p>
                                <a href="javascript:void(0)" onclick="Bizweb.addItem(15194491, 1, cartItem)" class="product-atc">Mua hàng</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; else: ?> 
                    <div>Không tìm thấy sản phẩm nào</div>
                <?php endif; ?>
                </div>
                <div class="colletion-topbar">
                    <div class="pull-left btn-view">
                        <a href="javascript:void(0)" class="btn-view-grid"><span class="fa fa-th fa-lg"></span></a>
                        <a href="javascript:void(0)" class="btn-view-list"><span class="fa fa-list fa-lg"></span></a>
                    </div>
                    <div class="pull-right">
                      
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
