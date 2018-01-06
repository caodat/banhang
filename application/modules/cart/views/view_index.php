
<div class="main-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
                    <li class="active">Giỏ hàng</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="container">
        <div class="row cart cart_table">
            
            <form method="post" action="/cart">
            <div class="col-md-12">
                <table class="table table-bordered cart-table">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:13%;">Hình ảnh</th>
                            <th class="text-center">Tên sản phẩm</th>
                            <th class="text-center">Đơn giá</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Thành tiền</th>
                            <th class="text-center">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $subTotal = 0; if($listCart):  foreach($listCart as $cart): 
                        $subTotal = $subTotal + $cart["subtotal"]; ?>
                        <tr>
                            <td class="text-center">
                                    <a href="<?php echo base_url()."product/detail/".$cart["id"]; ?>">
                                        <img alt="<?php echo $cart["name"] ?>" src="<?php echo base_url()."uploads/".$cart["thumbnail"] ?>">
                                    </a>
                                
                            </td>
                            <td class="text-center" valign="middle">
                                <p class="">
                                    <a href="<?php echo base_url()."product/detail/".$cart["id"]; ?>"><?php echo $cart["name"] ?></a><br>
                                </p>
                            </td>
                            <td class="text-center"><p class=""><?php echo $cart["price"]; ?>.000₫</p></td>
                            <td class="text-center"><input class="item-quantity" value="<?php echo $cart["qty"]; ?>" name="Lines" type="text"></td>
                            <td class="text-center"><p class="l"><?php echo $cart["subtotal"]; ?>.000₫</p></td>
                            <td class="text-center"><a class="fa fa-trash-o item-remove" href="<?php echo base_url()."cart/delete/".$cart["rowid"]; ?>"></a></td>
                        </tr>
                        <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <a href="<?php echo base_url(); ?>" class="btn-cart">Mua hàng tiếp</a>
                </div>
                <div class="col-md-3 col-xs-12">
                    <table class="table table-bordered total-table">
                        <tbody><tr>
                            <td class="text-right">Tổng tiền</td>
                            <td class="text-right"><?php if($subTotal){echo $subTotal; } ?>.000₫</td>
                        </tr>
                    </tbody></table>
                    <a href="/checkout" class="btn-cart pull-right">Thanh toán</a>
                </div>
            </div>
            </form>
            
        </div>
    </div>
</div>