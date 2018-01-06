jQuery(document).ready(function(){
    let selected = [];

    if($(".list-cat").val() !=""){
       selected = $(".list-cat").val().split(",");
      delete selected[selected.length-1]
    }
    $('.category input').each(function() {
      $(this).on("change",function(){
        console.log($(this).val());
        if($(this).is(":checked")){
          selected.push($(this).val());
        }else{
          let value = $(this).val();
          selected = selected.filter(item => item !== value);
        }
       console.log(selected);
       var listcat=",";
       $.each(selected,function(i,value){
          listcat += value+",";
       });
        $(".list-cat").val(listcat);
      });
    });
    
	jQuery('#avatar').fancybox(
		{ 
      'width'   : 400,
      'height'  : 400,
      'type'    : 'iframe',
      'autoScale'     : true,
      'hideOnContentClick':true
      }
	)
function responsive_filemanager_callback(field_id){
	console.log(field_id);
	var url=jQuery('#'+field_id).val();
	alert('update '+field_id+" with "+url);
	 parent.$.fancybox.close();
	//your code
}
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

   $('#myDatepicker').datetimepicker();
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
    $('#gallery_01').flexslider({
            animation: "slide",
            direction: "vertical",
            controlNav: false,
            prevText: "",
            nextText: ""
        });
        $("#img_01").elevateZoom({
            responsive: true,
            gallery:'gallery_01',
            cursor: 'pointer',
            galleryActiveClass: "active"
        });
        $("#img_01").bind("click", function(e) { var ez = $('#img_02').data('elevateZoom'); });
});