<div class="x_content">
    <form method="post" class="form-horizontal form-label-left" enctype = "multipart/form-data" novalidate> 
      <span class="section">Thêm mới</span>
      <div class="item form-group">
        <label class="control-label">Tên sản phẩm<span class="required">*</span>
        </label>
        <div class="">
          <input type="text" name="name" required="required" value="<?php echo $product["product_name"]; ?>" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Giá sản phẩm<span class="required">*</span>
        </label>
        <div class="">
          <input type="number" name="price"  value="<?php echo $product["product_price"]; ?>" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Mô tả<span class="required">*</span>
        </label>
        <div class="">
          <textarea name="description" class="form-control"> <?php echo $product["product_description"]; ?></textarea>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Ảnh đại diện<span class="required">*</span>
        </label>
        <div class="">
          <input type="file" name="thumbnail" class="form-control col-md-7 col-xs-12">
          <img class="img-responsive thumbnail" src="<?php echo base_url()."uploads/".$product["product_thumbnail"] ?>" />
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label">Slide show<span class="required">*</span>
        </label>
        <div class="">
          <input type="file" name="gallery[]" multiple="multiple" class="form-control col-md-7 col-xs-12 multi with-preview">
          <?php $gallery = $this->Mod_admin1->cutString($product["product_gallery"]); ?>
          <table class="table table-bordered">
            <tbody>
              <?php $i=0; foreach($gallery as $gl): ?>
              <tr>
                <td><img class="img-responsive thumbnail" src="<?php echo base_url()."uploads/".$gl; ?>" /></td>
                <td><a href="<?php echo base_url()."admin_product/update/".$product["product_id"]."/".$i; ?>" class="btn btn-danger btn-small"><i class="fa fa-trash fa-o"></i></a></td>
              </tr>
            <?php $i++; endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="item form-group category">
        <label class="control-label">Chuyên mục<span class="required">*</span>
        </label>
        <input type="text" name="category" class="list-cat ">
        <?php $category = $this->Mod_admin1->cutString($product['category_id']); ?>
        <?php foreach($list_category as $cat): ?>
         <div class="checkbox">
            <label>
              <input class="cat" name="cat<?php echo $cat["category_id"]; ?>" value="<?php echo $cat["category_id"]; ?>" type="checkbox" <?php 
                foreach($category as $ct){
                  if($ct == $cat["category_id"]){
                    echo "checked";
                  }
                }
              ?>> <?php echo $cat["category_name"]; ?>
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

    