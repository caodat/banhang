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
<a class="btn btn-success" href="<?php echo base_url().'admin_statistic/add' ?>" >Thêm mới</a>
<div class="x_panel">            
  <div class="x_content">  
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>STT</th>
          <th>Tên cầu</th>
          <th>Ngày</th>
          <th>Đăng ký</th>
          <th>Kết quả</th>
          <th class="action">Thao tác</th>  
        </tr>
      </thead>
      <tbody>
      <?php $i=1; 
      if($statistics ==0){
        echo "Không có dữ liệu";
      }else{
      foreach($statistics as $lt){
       ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $lt['lottery_name'] ?></td>
          <td><?php echo $this->Mod_admin1->custom_date($lt['statistic_date']) ?></td>
          <td><?php echo $lt['statistic_register'] ?></td>
          <td><?php echo $lt['statistic_result'] ?></td>
          <td class="action"><a class="btn btn-info btn-sm" href="<?php echo base_url().'admin_statistic/update/'.$lt['statistic_id']; ?>"><i class="fa fa-edit"></i> Sửa</a>  <a onclick="return check();" class="btn btn-danger btn-sm" href="<?php echo base_url().'admin_statistic/delete/'.$lt['statistic_id'] ?>" ><i class="fa fa-close"></i> Xóa</a></td>
        </tr>
        <?php $i++; } }?>
      </tbody>
    </table>
  </div>
</div>