<?php $option =$this->Mod_admin1->get_option(); ?>
<div class="top-menu">
  <h1 class="title-top text-center">
    <?php if(isset($option['text-top'])){echo $option['text-top'];}else{
    	echo 'Diễn đàn soi cầu toàn quốc';
    	} ?>
  </h1>
</div>
<div class="content-top">
<?php if(isset($option['content-top'])){
	echo $option['content-top'];}else{
    	
    	} ?>
</div>
<div class="content-bottom">
	<?php 
		if(
			isset($option['content-bottom'])){echo $option['content-bottom'];
		}
		else{	
   		} 
   ?>		
</div>
<br>
<div class="admin-notice">
  <div class="title-top text-center">THÔNG BÁO TỪ BAN QUẢN TRỊ</div>
  <div>
    <?php 
    if(
      isset($option['admin-notice'])){echo $option['admin-notice'];
    }
    else{ 
      } 
   ?>   
  </div>
</div>


