

<link rel="stylesheet" href="<?php echo base_url() ?>styles/jquery.fancybox.min.css" />
<!-- <script scr="<?php echo base_url() ?>styles/jquery.mousewheel-3.0.4.pack.js"></script> -->
   

<div class="x_content">
    <form method="post" action="<?php echo base_url() ?>/admin_user/add" class="form-horizontal form-label-left" enctype = "multipart/form-data" novalidate> 
      <span class="section">Thêm mới</span>
      <span class="required"><?php if(isset($er)){ echo $er; } ?></span> 
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">User name<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12" style="">
          <input id="name" class="form-control col-md-7 col-xs-12" name="username" placeholder="Username" id="fieldID" required="required" type="text"value="<?php echo set_value('username');?>"><?php  echo form_error('username','<span>','</span>');?>
          <!-- <a class="btn iframe-btn" type="button">Select</a> -->
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Full name
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text"  name="user-fullname" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <!-- <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Full name
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text"  name="user-avatar" id="user-avatar" class="form-control col-md-7 col-xs-12">
          <a type="button" class="iframe-btn" id="avatar" href="<?php echo base_url() ?>filemanager/dialog.php?type=1&field_id=user-avatar" onlick="return responsive_filemanager_callback(); ">Chọn ảnh</a>
        </div>
      </div> -->
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mật khẩu<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="password" name="password" class="form-control" /><?php  echo form_error('password','<span>','</span>');?>  
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button type="reset" class="btn btn-primary">Cancel</button>
          <input name="submit" type="submit" class="btn btn-success" value="Submit">
        </div>
      </div>
    </form>
</div>
