
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php $cat = $this->Mod_admin1->cutString($product["category_id"]); 
                    $category = $this->Mod_product->getCategoryById($cat[1]);
                ?>
                <ol class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    
                    <li><?php if($category !=0): ?>
                        <a href="<?php echo base_url()."category/detail/".$category["category_id"]; ?>"><?php echo $category["category_name"] ?></a>
                        <?php endif; ?>    
                    </li>
                    
                    <li class="active"><?php echo $product["product_name"] ?></li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pd-top" itemscope="" itemtype="http://schema.org/Product">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div id="gallery_01">
                            <?php
                                $gallery = $this->Mod_admin1->cutString($product["product_gallery"]);
                            ?>
                            <div class="flex-viewport" >
                                <ul class="slides">
                                    <li class="clone" aria-hidden="true">
                                        <?php foreach($gallery as $gl): ?>
                                        <a href="javascript:void(0)" data-image="<?php echo base_url().'/uploads/'.$gl; ?>" data-zoom-image="<?php echo base_url().'/uploads/'.$gl; ?>">
                                            <img src="<?php echo base_url().'/uploads/'.$gl; ?>" alt="" class="img-responsive" draggable="false"> </a>
                                        <?php endforeach; ?>
                                    </li>
                                    <li class="flex-active-slide">
                                         <?php foreach($gallery as $gl): ?>
                                        <a href="javascript:void(0)" data-image="<?php echo base_url().'/uploads/'.$gl; ?>" data-zoom-image="<?php echo base_url().'/uploads/'.$gl; ?>">
                                            <img src="<?php echo base_url().'uploads/'.$gl; ?>" alt="" class="img-responsive" draggable="false"> </a>
                                        <?php endforeach; ?>
                                    </li>
                                    <li class="clone" aria-hidden="true">                    
                                         <?php foreach($gallery as $gl): ?>
                                        <a href="javascript:void(0)" data-image="<?php echo base_url().'/uploads/'.$gl; ?>" data-zoom-image="<?php echo base_url().'/uploads/'.$gl; ?>">
                                            <img src="<?php echo base_url().'uploads/'.$gl; ?>" alt="" class="img-responsive" draggable="false"> </a>
                                        <?php endforeach; ?>
                                    </li>
                                </ul>
                            </div>
                            <ul class="flex-direction-nav">
                                <li class="flex-nav-prev">
                                    <a class="flex-prev flex-disabled" href="#" tabindex="-1"></a>
                                </li>
                                <li class="flex-nav-next">
                                    <a class="flex-next flex-disabled" href="#" tabindex="-1"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <div class="col-md-10 col-sm-10 col-xs-10">
                        <img id="img_01" class="img-responsive" alt="Giày Thể Thao Nam GN88" src="<?php echo base_url()."uploads/".$product["product_thumbnail"]; ?>" data-zoom-image="<?php echo base_url()."uploads/".$product["product_thumbnail"]; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-6">
                <h1 itemprop="name" class="pd-name"><?php echo $product["product_name"] ?></h1>
                <p class="pd-price"><?php echo $product["product_price"] ?>.000 VND</p>
                <p class="pd-description-mini"><?php echo $product["product_description"] ?></p>   
                <div class="pd-form">
                    <form action="<?php echo base_url()."cart/add/".$product["product_id"] ?>" method="POST">
                        <label for="">Số lượng</label>
                        <input value="1" name="quantity" type="number">
                        <div class="clearfix"></div>
                        <button type="submit">Mua hàng</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row pd-bottom">
            <div class="col-md-9">
                <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs pd-nav" role="tablist">
                        
                        <li role="presentation" class="active"><a href="#pd-thong-tin" aria-controls="pd-thong-tin" role="tab" data-toggle="tab" aria-expanded="true">Thông tin sản phẩm</a></li>
                        
                        <li role="presentation" class=""><a href="#pd-dac-diem" aria-controls="pd-dac-diem" role="tab" data-toggle="tab" aria-expanded="false">GIAO HÀNG - THANH TOÁN</a></li>
                        
                        
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="pd-thong-tin">
                            <?php echo $product["product_content"] ?>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane" id="pd-dac-diem">
                        <font size="4px;">Hotline: <strong><font color="#FF0000">0888.28.38.48 - 0868.28.38.48 - 012.18.28.38.48</font></strong> <br>Địa Chỉ: <strong><font color="#006400">163/29 Thành Thái Phường 14 Quận 10 HCM.</font></strong> <br><br><strong><font color="#000080">=&gt; Khách hàng ở khu vực nội Thành Phố HCM :</font></strong> <br>-Giao hàng tận nhà thanh toán khi nhận hàng đối với tất cả các đơn hàng ở các quận huyện trong TPHCM. <br>-Phí giao hàng 20.000đ. <br>-Thời gian giao hàng 1 ngày tính từ ngày đặt hàng. <br>-Miễn phí vận chuyển đối với đơn hàng từ 500.000đ trở lên. <br><br><strong><font color="#000080">=&gt; Khách hàng ở khu vực tỉnh thành phố khác :</font></strong> <br><strong><font color="#006400">1.Hình thức thanh toán khi nhận hàng:</font></strong> <br>-Các bạn vui lòng cung cấp đầy đủ thông tin HỌ TÊN - SỐ ĐIỆN THOẠI - ĐỊA CHỈ phường/xã/quận/huyện chính xác, mã sản phẩm kích thước và màu sắc (nếu có). Shop sẽ liên hệ lại báo phí vận chuyển và thời gian nhận hàng, các bạn đồng ý shop gửi hàng. <br>-Phí giao hàng 30.000đ - 40.000đ - 50.000đ tùy theo nơi. <br>-Thời gian nhận hàng đối với các bạn ở tỉnh thành phố từ 2-3 ngày. <br>-Thời gian nhận hàng đối với các bạn ở huyện xã thị trấn từ 3-4 ngày. <br><strong><font color="#006400">2.Hình thức thanh toán trước:</font></strong> <br><strong>*Gửi hàng chuyển phát nhanh giao tận nhà:</strong> <br>-Các bạn vui lòng liên hệ trực tiếp với shop qua số điện thoại <strong>012.18.28.38.48</strong> để được hướng dẫn báo ship và thời gian nhận hàng. <br>-Phí giao hàng 30.000đ - 40.000đ - 50.000đ tùy theo nơi. <br>-Thời gian nhận hàng đối với các bạn ở tỉnh thành phố từ 2-3 ngày. <br>-Thời gian nhận hàng đối với các bạn ở huyện xã thị trấn từ 3-4 ngày. <br><strong>*Gửi hàng qua nhà xe:</strong> <br>-Các bạn chuyển tiền trước qua tài khoản ngân hàng hoặc gửi tiền qua nhà xe, shop nhận được tiền sẽ gửi lại hàng qua nhà xe các bạn ra nhà xe nhận hàng. <br>-Các nhà xe tham khảo: Phương Trang, Tô Châu, Anh Khoa, Thịnh Phát, Năm Thùy, Kim Mã, Thanh Thủy, Phú Vĩnh Long, Quang Tỷ, Hoàn Cầu....... <br>-Phí gửi hàng 20.000đ - 30.000đ <br>-Thời gian nhận hàng 1 ngày. <br>-Miễn phí vận chuyển đối với đơn hàng 500.000đ. <br><br><strong><font color="#FF0000">=&gt; Thông tin tài khoàn ngân hàng:</font></strong> <br><strong>Ngân Hàng <font color="#008000">Vietcombank</font></strong> (PGD số 9 - Chi nhánh HCM) <br>Tên chủ tài khoản: HUỲNH VĂN HỌC <br>Số tài khoản: 0071.000.789.310 <br><br><strong>Ngân hàng <font color="#A52A2A">Agribank</font></strong> (Chi nhánh Quận 5 - PGD số 2) <br>Tên chủ tài khoản: HUỲNH VĂN HỌC <br>Số tài khoản: 62222.0515.6201 <br><br><strong>Ngân hàng <font color="#FF0000">Vietin</font><font color="#0000FF">bank</font></strong> (Chi nhánh 5 PGD số 4) <br>Tên chủ tài khoản: HUỲNH VĂN HỌC <br>Số tài khoản: 711AA0742463 <br><br><strong>Ngân hàng <font color="#0000FF">Sacombank</font></strong> (Chi nhánh Điện Biên Phủ - PGD Quận 10) <br>Tên chủ tài khoản: HUỲNH VĂN HỌC <br>Số tài khoản: 0601.0357.6337<font size="4px;">
                        </font></font></div><font size="4px;"><font size="4px;">
                        
                        
                    </font></font></div><font size="4px;"><font size="4px;">
                </font></font></div><font size="4px;"><font size="4px;">
            </font></font></div><font size="4px;"><font size="4px;">
            <div class="col-md-3">
                
                <div class="pd-best-seller">
                    <div class="heading">
                        <h3>Sản Phẩm Mới</h3>
                    </div>
                    <ul> 
                        <?php foreach($productNew as $p): ?>
                        <li>
                            <div class="row">
                                <div class="col-md-4 biz-qv-image">
                                    <a href="<?php echo base_url()."product/detail/".$p["product_id"]; ?>">
                                        <img src="<?php echo base_url()."uploads/".$p["product_thumbnail"] ?>" class="img-reponsive" alt="">
                                    </a>
                               </div>
                                <div class="col-md-8">
                                    <h4 class="pd-bs-name"><?php echo $p["product_name"] ?></h4>
                                    <p class="pd-bs-price">
                                    <?php echo $p["product_price"] ?>.000₫
                                    </p>
                                </div>
                            </div>
                        </li> 
                        <?php endforeach; ?>
                    </ul>
                </div> 
            </div>
        </font></font></div><font size="4px;"><font size="4px;">
    </font></font></div><font size="4px;"><font size="4px;">
</font></font>