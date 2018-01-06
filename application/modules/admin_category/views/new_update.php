<div class="x_content">
    <form method="post" class="form-horizontal form-label-left" enctype = "multipart/form-data" novalidate> 
      <span class="section">Cập nhật chuyên mục</span>
      <div class="item form-group">
        <label class="control-label" for="name">Tên chuyên mục <span class="required">*</span>
        </label>
        <div class="">
          <input id="name" class="form-control" name="category_name" placeholder="Tên chuyên mục" required="required" type="text" value="<?php echo $category["category_name"] ?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label ">Chuyên mục cha <span class="required">*</span>
        </label>
        <div class="">
          <select name="category_parent" class="form-control selectpicker">
            <option></option>}
            <?php foreach($list_category as $cat){ ?>
            <option <?php if($cat["category_id"] == $category["category_parent"] ){ echo "selected"; } ?> value="<?php echo $cat["category_id"]; ?>"><?php echo $cat["category_name"]; ?></option> 
            <?php } ?>
          </select>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Mô tả<span class="required">*</span>
        </label>
        <div class="">
          <textarea rows="8" name="category_description" id="tinymce" required="required" class="form-control ckeditor"><?php echo $category["category_description"] ?></textarea>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Hiển thị trên menu<span class="required">*</span>
        </label>
         <div class="checkbox">
            <label>
              <input class="" name="category_in_menu" value="1" type="checkbox" <?php if($category['category_in_menu']==1){ echo 'checked'; } ?>> 
            </label>
          </div>
      </div>
        <div class="item form-group">
        <label class="control-label">Hiển thị ngoài trang chủ<span class="required">*</span>
        </label>
         <div class="checkbox">
            <label>
              <input class="" name="category_in_home" value="1" type="checkbox" <?php if($category['category_in_home']==1){ echo 'checked'; } ?>> 
            </label>
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
  
    