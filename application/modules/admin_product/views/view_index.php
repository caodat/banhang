<script>
    function check(){
        var con;
        con=confirm('Bạn có chắc chắn muốn xóa không?');
        if(con==true){
            return true;
        }else{
            return false;
        }
    }
</script>
<a class="btn btn-success" href="<?php echo base_url().'admin_product/add' ?>" >Thêm mới</a>
<div class="x_panel">            
  <div class="x_content">  
    <table id="datatable-responsive" class="list-product table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>STT</th>
          <th>Tên sản phẩm</th>
          <th>Ảnh đại diện</th>
          <th>Giá sản phẩm</th>
          <th>Mô tả</th>
          <th class="action">Thao tác</th>  
        </tr>
      </thead>
      <tbody>
        <?php $i=1; foreach($products as $p): ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $p['product_name'] ?></td>
          <td><img class="thumbnail img-responsive" src="<?php echo base_url().'uploads/'.$p['product_thumbnail'] ?>" /></td>
          <td><?php echo $p['product_price'] ?></td>
          <td><?php echo $p['product_description'] ?></td>
          <td class="action"><a class="btn btn-info btn-sm" href="<?php echo base_url().'admin_product/update/'.$p['product_id']; ?>"><i class="fa fa-edit"></i> Sửa</a>  <a onclick="return check();" class="btn btn-danger btn-sm" href="<?php echo base_url().'admin_product/delete/'.$p['product_id'] ?>" ><i class="fa fa-close"></i> Xóa</a></td>
        </tr>
        <?php $i++; endforeach; ?>
      </tbody>
    </table>
  </div>
</div>