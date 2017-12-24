<div class="x_content">
    <form method="post" action="<?php echo base_url() ?>admin_product/add" class="form-horizontal form-label-left" enctype = "multipart/form-data" novalidate> 
      <span class="section">Thêm mới</span>
      <div class="item form-group">
        <label class="control-label">Tên sản phẩm<span class="required">*</span>
        </label>
        <div class="">
          <input type="text" name="name" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Giá sản phẩm<span class="required">*</span>
        </label>
        <div class="">
          <input type="text" name="price" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Mô tả<span class="required">*</span>
        </label>
        <div class="">
          <textarea name="description" class="form-control"></textarea>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Ảnh đại diện<span class="required">*</span>
        </label>
        <div class="">
          <input type="file" name="thumbnail" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Slide show<span class="required">*</span>
        </label>
        <div class="">
          <input type="file" name="gallery[]" multiple="multiple" class="form-control col-md-7 col-xs-12 multi with-preview">
        </div>
      </div>
      <div class="item form-group category">
        <label class="control-label">Chuyên mục<span class="required">*</span>
        </label>
        <input type="text" name="category" class="list-cat hidden">
        <?php foreach($list_category as $cat): ?>
         <div class="checkbox">
            <label>
              <input class="cat" name="cat<?php echo $cat["category_id"]; ?>" value="<?php echo $cat["category_id"]; ?>" type="checkbox"> <?php echo $cat["category_name"]; ?>
            </label>
          </div>
        <?php endforeach; ?>
      </div>
       <div class="item form-group">
        <label class="control-label">Nội dung chi tiết<span class="required">*</span>
        </label>
        <div class="">
          <textarea name="content" class="form-control"></textarea>
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

    