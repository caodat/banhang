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
<a class="btn btn-success" href="<?php echo base_url().'admin_general/add' ?>" >Thêm mới</a>
<div class="x_panel">            
  <div class="x_content">  
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>STT</th>
          <th>Option Name</th>
          <th>Option Value</th>
          <th class="action">Thao tác</th>  
        </tr>
      </thead>
      <tbody>
      <?php $i=1; 
      foreach($option as $op){
       ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $op['option_name'] ?></td>
          <td><?php //echo $op['option_value'] ?></td>
          <td class="action"><a class="btn btn-info btn-sm" href="<?php echo base_url().'/admin_general/update/'.$op['option_id']; ?>"><i class="fa fa-edit"></i> Sửa</a>  <a onclick="return check();" class="btn btn-danger btn-sm" href="<?php echo base_url().'/admin_general/delete/'.$op['option_id'] ?>" ><i class="fa fa-close" ></i> Xóa</a></td>
        </tr>
        <?php $i++; } ?>
      </tbody>
    </table>
  </div>
</div>