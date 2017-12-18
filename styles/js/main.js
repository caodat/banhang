 $(document).ready(function () {
	 
 	$(".ts-sidebar-menu li a").each(function () {
 		if ($(this).next().length > 0) {
 			$(this).addClass("parent");
 		};
 	})
 	var menux = $('.ts-sidebar-menu li a.parent');
 	$('<div class="more"><i class="fa fa-angle-down"></i></div>').insertBefore(menux);
 	$('.more').click(function () {
 		$(this).parent('li').toggleClass('open');
 	});
	$('.parent').click(function (e) {
		e.preventDefault();
 		$(this).parent('li').toggleClass('open');
 	});
 	$('.menu-btn').click(function () {
 		$('nav.ts-sidebar').toggleClass('menu-open');
 	});
	 
	 
	 $('#zctb').DataTable();
	 
	 
	 $("#input-43").fileinput({
		showPreview: true,
		allowedFileExtensions: ["jpg", "png", "gif", "bmp"],
		elErrorContainer: "#errorBlock43"
			// you can configure `msgErrorClass` and `msgInvalidFileExtension` as well
	});
	$("#input-69").fileinput({
		showPreview: true,
		allowedFileExtensions: ["jpg", "bmp", "gif", "png"],
		elErrorContainer: "#errorBlock69"
			// you can configure `msgErrorClass` and `msgInvalidFileExtension` as well
	});
 });
