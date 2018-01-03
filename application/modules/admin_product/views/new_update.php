<script src='<?php echo base_url() ?>tinymce/tinymce.min.js'></script>
<script type="text/javascript" src="<?php echo base_url() ?>filemanager/plugin.min.js"></script>
<script>
 
  tinymce.init({
    selector: "textarea",theme: "modern",height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor code"
   ],
   toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
   toolbar2: "link unlink anchor | image media | forecolor backcolor  | print preview code ",
   image_advtab: true ,
   
   external_filemanager_path:"<?php echo base_url() ?>/filemanager/",
   filemanager_title:"Responsive Filemanager" ,
   external_plugins: { "filemanager" : "<?php echo base_url() ?>/filemanager/plugin.min.js"},
   relative_urls:false,
   remove_script_host:false,
 });

  </script>
<div class="x_content">
    <form method="post" class="form-horizontal form-label-left" enctype = "multipart/form-data" novalidate> 
      <span class="section">Cập nhật</span>
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
        <input type="text" name="category" class="list-cat hidden" value="<?php echo $product["category_id"] ?>">
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
          <textarea name="content" class="form-control"><?php echo $product['product_content'] ?></textarea>
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

    