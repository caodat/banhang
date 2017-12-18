<div class="x_content">
    <form method="post" action="<?php echo base_url() ?>admin_statistic/add" class="form-horizontal form-label-left" enctype = "multipart/form-data" novalidate> 
      <span class="section">Thêm mới</span>
      <div class="item form-group col-sm-5">
        <label class="control-label" for="name">Lựa chọn Cầu<span class="required">*</span>
        </label>
        <div class="">
          <select class="form-control" name="lottery-id" required="required">
              <?php if($lotteries!=0){
                foreach($lotteries as $lottery){
                  ?>
                  <option value="<?php echo $lottery['lottery_id'] ?>"><?php echo $lottery['lottery_name'] ?></option>
                  <?php
                }
                } ?>
          </select>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="item form-group col-sm-5">
        <label class="control-label ">Ngày<span class="required">*</span>
        </label>
        <div class="">
          <div class="input-group date" id="myDatepicker2">
              <input type="text" class="form-control" name="statistic-date">
              <span class="input-group-addon">
                 <span class="glyphicon glyphicon-calendar"></span>
              </span>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      
      <div class="item form-group">
        <label class="control-label">Đăng ký<span class="required">*</span>
        </label>
        <div class="">
          <input type="text" name="statistic-register" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label ">Kết quả<span class="required">*</span>
        </label>
        <div class="">
          <input type="text" name="statistic-result" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label ">Người tham gia<span class="required">*</span>
        </label>
        <div class="">
          <input type="text" name="statistic-people" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label ">Trạng thái
        </label>
        <div class="">
            <input type="checkbox" name="statistic-show" value="1" class="js-switch" checked />  
        </div>
      </div>
      <div class="form-group">
        <div class="">
          <button type="reset" class="btn btn-primary">Cancel</button>
          <input name="submit" type="submit" class="btn btn-success" value="Submit">
        </div>
      </div>
    </form>
</div>
  
    