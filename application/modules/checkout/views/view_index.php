<html xmlns="http://www.w3.org/1999/xhtml" class="anyflexbox boxshadow display-table"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Alomua88.com - Thanh toán đơn hàng">

    <title>Thanh toán đơn hàng</title>

    
    <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-MS77Z9"></script>
    <script src="<?php echo base_url() ?>styles/assets/js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url() ?>styles/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>styles/assets/css/nprogress.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>styles/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>styles/assets/css/checkout.css" rel="stylesheet" type="text/css">

   
</head>

<body class="body--custom-background-color ">
    <div class="banner" data-header="">
        <div class="wrap">
            <div class="shop logo logo--left ">
    
        <h1 class="shop__name">
            <a href="<?php echo base_url() ?>">
                Quay về trang chủ
            </a>
        </h1>
    
</div>
        </div>
    </div>
    <button class="order-summary-toggle" bind-event-click="Bizweb.Checkout.toggleOrderSummary(this)">
        <div class="wrap">
            <h2>
                <label class="control-label">Đơn hàng</label>
                <label class="control-label hidden-small-device">
                    (1 sản phẩm)
                </label>
                <label class="control-label visible-small-device inline">
                    (1)
                </label>
            </h2>
            <a class="underline-none expandable pull-right" href="javascript:void(0)">
                Xem chi tiết
            </a>
        </div>
    </button>
    <form method="post" action="" data-toggle="validator" class="content stateful-form formCheckout" novalidate="true">
        <div class="wrap" context="checkout" define="{checkout: new Bizweb.Checkout(this,{ token: &quot;4854fb97ab5549f9a97447830fa79b1a&quot;, email: &quot;&quot;, totalOrderItemPrice: 320000.0000, shippingFee: 0, freeShipping: false, requiresShipping: true, existCode: false, code: &quot;&quot;, discount: 0, settingLanguage: &quot;vi&quot;, moneyFormat: &quot;{{amount_no_decimals_with_comma_separator}}₫&quot;, discountLabel: &quot;Miễn phí&quot;, districtPolicy: &quot;required&quot;, district: &quot;&quot;, province:&quot;&quot;, otherAddress: false, shippingId: 0, shippingMethods: [], customerAddressId: 0, reductionCode: &quot;&quot; })}">
            <div class="sidebar ">
                <div class="sidebar_header">
                    <h2>
                        <label class="control-label">Đơn hàng</label>
                        <label class="control-label">(<?php echo count($listCart) ?> sản phẩm)</label>
                    </h2>
                    <hr class="full_width">
                </div>
                <div class="sidebar__content">
                    <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                        <div class="summary-body summary-section summary-product">
                            <div class="summary-product-list">
                                <table class="product-table">
                                    <tbody>
                                            <?php $subTotal =0;  if($listCart): foreach($listCart as $cart):
                                            $subTotal = $subTotal + $cart['subtotal'];
                                            ?>
                                            <tr class="product product-has-image clearfix">
                                                <td>
                                                    <div class="product-thumbnail">
                                                        <div class="product-thumbnail__wrapper">
                                                            
                                                                <img src="<?php echo base_url()."uploads/".$cart['thumbnail']; ?>">
                                                            
                                                        </div>
                                                        <span class="product-thumbnail__quantity" aria-hidden="true"><?php echo $cart['qty'] ?></span>
                                                    </div>
                                                </td>
                                                <td class="product-info">
                                                    <span class="product-info-name">
                                                        
                                                        <?php echo $cart['name'] ?>
                                                    </span>
                                                </td>
                                                <td class="product-price text-right">
                                                    <?php echo $cart["subtotal"] ?>.000₫
                                                </td>
                                            </tr>
                                            <?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                                <div class="order-summary__scroll-indicator">
                                    Cuộn chuột để xem thêm
                                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="m0">
                    </div>
                    <div class="order-summary order-summary--discount">
                        <div class="summary-section">
                            <div class="form-group m0" bind-show="!existCode ||code == null || !code.length">
                                <div class="field__input-btn-wrapper">
                                    <div class="field__input-wrapper">
                                        <input bind="code" name="code" type="text" class="form-control discount_code" placeholder="Nhập mã giảm giá" value="" id="checkout_reduction_code">
                                    </div>
                                    <button bind-event-click="reduction_code = false, caculateShippingFee('')" class="btn btn-primary event-voucher-apply" type="button">Áp dụng</button>
                                </div>
                            </div>
                            <div bind-class="{'warning' : existCode &amp;&amp; !freeShipping &amp;&amp; discount == 0,'success' : existCode &amp;&amp; ( freeShipping || discount >0 )}" class="clearfix hide" bind-show="code!= null &amp;&amp; code.length &amp;&amp; existCode">
                                <div class="pull-left">
                                    <i class="fa fa-check applied-discount-status-success" aria-hidden="true"></i>
                                    <i class="fa fa-exclamation-triangle applied-discount-status-warning" aria-hidden="true"></i>
                                </div>
                                <div bind="code" class="pull-left applied-discount-code"></div>
                                <div bind="(discountShipping &amp;&amp; freeShipping) ? 'Miễn phí' : money(discount,'{{amount_no_decimals_with_comma_separator}}₫')" class="pull-right">0₫</div>
                                <input bind-event-click="removeCode('')" class="btn btn-delete" type="button" value="×" name="commit">
                            </div>
                            <div class="error mt10 hide" bind-show="inValidCode">
                                Mã khuyến mãi không hợp lệ
                            </div>
                        </div>
                        <hr class="m0">
                    </div>
                    <div class="order-summary order-summary--total-lines">
                        <div class="summary-section border-top-none--mobile">
                            <div class="total-line total-line-subtotal clearfix">
                                <span class="total-line-name pull-left">
                                    Tạm tính
                                </span>
                                <span  class="total-line-subprice pull-right"><?php if($subTotal){echo $subTotal;} ?>.000₫</span>
                            </div>
                            <div class="total-line total-line-shipping clearfix" bind-show="requiresShipping">
                                <span class="total-line-name pull-left">
                                    Phí vận chuyển
                                </span>
                                <span  class="total-line-shipping pull-right" >40.000₫</span>
                            </div>
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span  class="total-line-price pull-right"><?php if($subTotal){echo $subTotal+40;} ?>.000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix hidden-sm hidden-xs">
                        <div class="field__input-btn-wrapper mt10">
                            <a class="previous-link" href="<?php echo base_url(); ?>cart">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                <span>Quay về giỏ hàng</span>
                            </a>
                            <input class="btn btn-primary btn-checkout" data-loading-text="Đang xử lý" type="button" bind-event-click="paymentCheckout('AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM')" value="ĐẶT HÀNG">
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <div class="help-block ">
                            <ul class="list-unstyled">
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main" role="main">
                <div class="main_header">
                    <div class="shop logo logo--left ">
    
        <h1 class="shop__name">
            <a href="<?php echo base_url(); ?>">
                Trang chủ
            </a>
        </h1>
    
</div>
                </div>
                <div class="main_content">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="section" define="{billing_address: {}}">
                                <div class="section__header">
                                    <div class="layout-flex layout-flex--wrap">
                                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                            <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                            <label class="control-label">Thông tin mua hàng</label>
                                        </h2>
                                        
                                    </div>
                                </div>
                                <div class="section__content">
                                    
                                    
                                    <div class="billing">
                                        <div>
                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.full_name }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span>
                                                    <input name="BillingAddress.LastName" type="text" bind-event-change="saveAbandoned()" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_last_name" data-error="Vui lòng nhập họ tên" required="" bind="billing_address.full_name">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.phone }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Số điện thoại
                                                        </span>
                                                        <input name="BillingAddress.Phone" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_phone" data-error="Vui lòng nhập số điện thoại" required="" bind="billing_address.phone">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': billing_address.address1 }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Địa chỉ
                                                        </span>
                                                        <input name="BillingAddress.Address1" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_billing_address_address1" data-error="Vui lòng nhập địa chỉ" required="" bind="billing_address.address1">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                
                                                <div class="form-group" style="display: none;">
                                                    <div class="field__input-wrapper field__input-wrapper--select">
                                                        <label class="field__label" for="BillingProvinceId">
                                                            Tỉnh thành
                                                        </label>
                                                        <select class="field__input field__input--select form-control" name="BillingProvinceId" id="billingProvince" required="" data-error="Bạn chưa chọn tỉnh thành" bind-event-change="billingProviceChange('')" bind="BillingProvinceId">
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="section pt10 hide" bind-show="otherAddress">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">
                                            Thông tin nhận hàng
                                        </label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div bind-show="otherAddress" define="{shipping_address: {}, shipping_expand:true,show_district:  true ,show_country:  false }" class="shipping hide">
                                        <div bind-show="shipping_expand || !otherAddress">
                                            <div class="form-group">
                                                <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.full_name }">
                                                    <span class="field__label" bind-event-click="handleClick(this)">
                                                        Họ và tên
                                                    </span>
                                                    <input name="ShippingAddress.LastName" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_last_name" data-error="Vui lòng nhập họ tên" bind="shipping_address.full_name">
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.phone }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Số điện thoại
                                                        </span>
                                                        <input name="ShippingAddress.Phone" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_phone" data-error="Vui lòng nhập số điện thoại" bind="shipping_address.phone">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            
                                            
                                                <div class="form-group">
                                                    <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.address1 }">
                                                        <span class="field__label" bind-event-click="handleClick(this)">
                                                            Địa chỉ
                                                        </span>
                                                        <input name="ShippingAddress.Address1" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_address1" data-error="Vui lòng nhập địa chỉ" bind="shipping_address.address1">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group has-error" style="display:none;">
                                                    <div class="field__input-wrapper field__input-wrapper--select">
                                                        <label class="field__label" for="BillingProvinceId">
                                                            Tỉnh thành
                                                        </label>
                                                        <select class="field__input field__input--select form-control" name="ShippingProvinceId" id="shippingProvince" data-error="Bạn chưa chọn tỉnh thành" bind-event-change="shippingProviceChange('')" bind="ShippingProvinceId">
                                                        </select>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                
                                            <div class="form-group">
                                                <div class="error hide" bind-show="requiresShipping &amp;&amp; shippingMethods.length == 0 &amp;&amp; ShippingProvinceId ">
                                                    <label>Khu vực này không hỗ trợ vận chuyển</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section pt10" bind-class="{ 'pt0': otherAddress, 'pt10': !otherAddress}">
                                <div class="section__content">
                                    <div class="form-group m0">
                                        <textarea name="note" bind-event-change="saveAbandoned()" value="" class="field__input form-control m0" placeholder="Ghi chú"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="section shipping-method" bind-show="shippingMethods.length > 0">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-truck fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Vận chuyển</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box"><div class="content-box__row"><div class="radio-wrapper"><div class="radio__input"><input class="input-radio" type="radio" value="239376,0" name="ShippingMethod" id="shipping_method_239376" bind="shippingMethod" bind-event-change="changeShippingMethod()" fee="40000"></div><label class="radio__label" for="shipping_method_239376"> <span class="radio__label__primary">Giao hàng tận nơi 4-5 ngày đến</span><span class="radio__label__accessory"><span class="content-box__emphasis">40.000₫</span></span></label> </div> <!-- /radio-wrapper--> </div></div>
                                </div>
                            </div>
                            <div class="section payment-methods" bind-class="{'p0--desktop': shippingMethods.length == 0}">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-credit-card fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Thanh toán</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">
                                        
    <div class="content-box__row">
        <div class="radio-wrapper">
            <div class="radio__input">
                <input class="input-radio" type="radio" value="178561" name="PaymentMethodId" id="payment_method_178561" data-check-id="5" bind="payment_method_id" checked="">
            </div>
            <label class="radio__label" for="payment_method_178561">
                <span class="radio__label__primary">Chuyển qua chành xe</span>
                <span class="radio__label__accessory">
                    <ul>
                        <li class="payment-icon-v2 payment-icon--5">
                            
                                <i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>
                            
                        </li>
                    </ul>
                </span>
            </label> 
        </div> <!-- /radio-wrapper--> 
    </div>
    
        <div class="radio-wrapper content-box__row content-box__row--secondary hide" id="payment-gateway-subfields-178561" bind-show="payment_method_id == 178561">
            <div class="blank-slate">
                <p>Chuyển qua chành xe theo yêu cầu của bạn (bạn báo cho shop thông tin chành xe từ HCM đến địa phương của bạn)
</p> <br> <p>Đối với hình thức này yêu cầu bạn phải thanh toán tiền sản phẩm cho shop và tiền ship nếu chành xe yêu cầu thanh toán trước.
</p> <br> <p>Vui lòng gọi 0888.28.38.48 - 0868.28.38.48 để được hướng dẫn cụ thể.</p>

                
            </div>
        </div>
    

    <div class="content-box__row">
        <div class="radio-wrapper">
            <div class="radio__input">
                <input class="input-radio" type="radio" value="178560" name="PaymentMethodId" id="payment_method_178560" data-check-id="3" bind="payment_method_id">
            </div>
            <label class="radio__label" for="payment_method_178560">
                <span class="radio__label__primary">Chuyển khoản qua ngân hàng</span>
                <span class="radio__label__accessory">
                    <ul>
                        <li class="payment-icon-v2 payment-icon--3">
                            
                                <i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>
                            
                        </li>
                    </ul>
                </span>
            </label> 
        </div> <!-- /radio-wrapper--> 
    </div>
    
        <div class="radio-wrapper content-box__row content-box__row--secondary" id="payment-gateway-subfields-178560" bind-show="payment_method_id == 178560">
            <div class="blank-slate">
                <p>Bạn có thể chuyển khoản cho shop thông qua các tài khoản ngân hàng.
</p> <p>Ngân Hàng Vietcombank (PGD số 9 - Chi nhánh HCM) 
</p> <p>Tên chủ tài khoản: HUỲNH VĂN HỌC 
</p> <p>Số tài khoản: 0071.000.789.310 
</p> <p>Ngân hàng Agribank (Chi nhánh Quận 5 - PGD số 2) 
</p> <p>Tên chủ tài khoản: HUỲNH VĂN HỌC 
</p> <p>Số tài khoản: 62222.0515.6201 
</p> <p>Ngân hàng Vietinbank (Chi nhánh 5 PGD số 4) 
</p> <p>Tên chủ tài khoản: HUỲNH VĂN HỌC 
</p> <p>Số tài khoản: 711AA0742463</p>

                
            </div>
        </div>
    

    <div class="content-box__row">
        <div class="radio-wrapper">
            <div class="radio__input">
                <input class="input-radio" type="radio" value="178559" name="PaymentMethodId" id="payment_method_178559" data-check-id="4" bind="payment_method_id">
            </div>
            <label class="radio__label" for="payment_method_178559">
                <span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
                <span class="radio__label__accessory">
                    <ul>
                        <li class="payment-icon-v2 payment-icon--4">
                            
                                <i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>
                            
                        </li>
                    </ul>
                </span>
            </label> 
        </div> <!-- /radio-wrapper--> 
    </div>
    
        <div class="radio-wrapper content-box__row content-box__row--secondary hide" id="payment-gateway-subfields-178559" bind-show="payment_method_id == 178559">
            <div class="blank-slate">
                <p>Sản phẩm sẽ được giao đến tận nhà và bạn thanh toán tiền sản phẩm + tiền ship cho nhân viên giao hàng.
</p> <br> <p>Shop sẽ gọi điện thoại xác nhận đơn hàng và thông tin đầy đủ về giá ship, thời gian vận chuyển đến cho bạn.
</p> <br> <p>Cảm ơn bạn.</p>

                
            </div>
        </div>
    

<a href="javascript:void(0)" data-toggle="modal" data-target="#moca-modal" data-backdrop="static" data-keyboard="false" class="trigger-moca-modal" style="display: none;" title="Thanh toán qua Moca">
</a>
<a href="javascript:void(0)" data-toggle="modal" data-target="#moca-error-modal" class="trigger-moca-error-modal" style="display: none;" title="Lỗi thanh toán qua Moca">
</a>
<div class="modal fade moca-modal" id="moca-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div>
                <iframe style="border: 0px; width: 100%; height: 100%;" src=""></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="moca-error-modal" data-width="" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <div>
                    <p>Giao dịch của bạn chưa đủ hạn mức thanh toán</p>
                    <p>Hạn mức tối thiểu để thanh toán được là 1đ</p>
                    <p>Vui lòng chọn hình thức thanh toán khác</p>
                </div>
            </div>
        </div>
    </div>
</div>
                                    </div>
                                </div>
                            </div>
                            <div class="section hidden-md hidden-lg">
                                <div class="form-group clearfix m0">
                                    <input class="btn btn-primary btn-checkout" data-loading-text="Đang xử lý" type="button" bind-event-click="paymentCheckout('AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM')" value="ĐẶT HÀNG">
                                </div>
                                <div class="text-center mt20">
                                    <a class="previous-link" href="<?php echo base_url()."cart"; ?>">
                                        <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                        <span>Quay về giỏ hàng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="main_footer footer unprint">
    
    
    
    <div class="mt10"></div>
</div>
<div class="modal fade" id="refund-policy" data-width="" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Chính sách hoàn trả</h4>
            </div>
            <div class="modal-body">
                <pre></pre>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="privacy-policy" data-width="" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Chính sách bảo mật</h4>
            </div>
            <div class="modal-body">
                <pre></pre>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="terms-of-service" data-width="" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Điều khoản sử dụng</h4>
            </div>
            <div class="modal-body">
                <pre></pre>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </form>

    <script src="<?php echo base_url() ?>styles/assets/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>styles/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>styles/assets/js/twine.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>styles/assets/js/validator.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>styles/assets/js/nprogress.js?" type="text/javascript"></script>
<script src="<?php echo base_url() ?>styles/assets/js/money-helper.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>styles/assets/js/checkout.js" type="text/javascript"></script>


<script type="text/javascript">
    $(document).ajaxStart(function () {
        NProgress.start();
    });
    $(document).ajaxComplete(function () {
        NProgress.done();
    });

    context = {}

    $(function () {
        Twine.reset(context).bind().refresh();
    });
    
    $(document).ready(function () {
        setTimeout(function(){
        
        
            
        
        }, 50);
        
    });
</script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60452489-1', 'auto');
  ga('send', 'pageview');

</script>

</body></html>