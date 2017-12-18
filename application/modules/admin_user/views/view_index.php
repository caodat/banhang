<script type="text/javascript">

function check(){
	var con;
	con=confirm('Bạn có chắc chắn muốn xóa không?');
	if(con==true){
		return true;
	}
	else
	{
		return false;
	}
}
</script>
<div><a href="<?php echo base_url().'admin_user/add'?>" class="btn btn-success">Thêm mới</a></div>
<div class="x_panel">            
  <div class="x_content">  
    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>STT</th>
          <th>Username</th>
          <th>Họ tên</th>
          <th class="action">Thao tác</th>  
        </tr>
      </thead>
      <tbody>
      <?php $i=1; 
      if($user!=0){
      foreach($user as $us){
       ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $us['user_name'] ?></td>
          <td><?php echo $us['user_fullname'] ?></td>
          <td class="action"><a class="btn btn-info btn-sm" href="<?php echo base_url().'/admin_user/update/'.$us['user_id']; ?>"><i class="fa fa-edit"></i> Sửa</a>  <a onclick="return check();" class="btn btn-danger btn-sm" href="<?php echo base_url().'/admin_user/delete/'.$us['user_id'] ?>" ><i class="fa fa-close" ></i> Xóa</a></td>
        </tr>
        <?php $i++; }
        } ?>
      </tbody>
    </table>
  </div>
</div>