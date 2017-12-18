<div class="x_content">
    <form method="post" action="<?php echo base_url() ?>/admin_category/add" class="form-horizontal form-label-left" enctype = "multipart/form-data" novalidate> 
      <span class="section">Thêm mới chuyên mục</span>
      <div class="item form-group">
        <label class="control-label" for="name">Tên chuyên mục <span class="required">*</span>
        </label>
        <div class="">
          <input id="name" class="form-control" name="category_name" placeholder="Tên chuyên mục" required="required" type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label ">Chuyên mục cha <span class="required">*</span>
        </label>
        <div class="">
          <select name="category_parent" class="form-control">
            <?php foreach($list_category as $cat){ ?>
            <option value="<?php echo $cat["category_id"]; ?>"><?php echo $cat["category_name"]; ?></option> 
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Mô tả<span class="required">*</span>
        </label>
        <div class="">
          <textarea rows="8" name="category_description" id="tinymce" required="required" class="form-control ckeditor"></textarea>
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
  
    