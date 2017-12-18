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
    <form method="post" action="<?php echo base_url() ?>/admin_general/add" class="form-horizontal form-label-left" enctype = "multipart/form-data" novalidate> 
      <span class="section">Thêm mới option</span>
      <span class="required"><?php if(isset($error)){ echo $error; } ?></span>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Option name <span class="required">*</span>
        </label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <input id="name" class="form-control col-md-12 col-xs-12" name="option-name" placeholder="Option name" required="required" type="text">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Option value<span class="required">*</span>
        </label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <textarea type="text" id="option-value" name="option-value" required="required" class="form-control col-md-7 col-xs-12"></textarea>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Trạng thái
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="checkbox" name="autoload" value="1" class="js-switch" checked />  
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
