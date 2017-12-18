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
<a class="btn btn-success" href="<?php echo base_url().'admin_category/add' ?>" >Thêm mới</a>
<div class="x_panel">            
  <div class="x_content">  
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>STT</th>
          <th>Chuyên mục</th>
          <th>Chuyên mục cha</th>
          <th class="action">Thao tác</th>  
        </tr>
      </thead>
      <tbody>
      <?php $i=1; 
      if($category==0){
        echo "Không có dữ liệu";
      }else{
      foreach($category as $cat){
       ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $cat['category_name'] ?></td>
          <td><?php foreach($category as $cat1){
            if($cat1["category_id"] == $cat["category_parent"]){
              echo $cat1["category_name"];
            }

          } ?></td>
          <td class="action"><a class="btn btn-info btn-sm" href="<?php echo base_url().'admin_category/update/'.$cat['category_id']; ?>"><i class="fa fa-edit"></i> Sửa</a>  <a onclick="return check();" class="btn btn-danger btn-sm" href="<?php echo base_url().'admin_category/delete/'.$cat['category_id'] ?>" ><i class="fa fa-close"></i> Xóa</a></td>
        </tr>
        <?php $i++; } }?>
      </tbody>
    </table>
  </div>
</div>