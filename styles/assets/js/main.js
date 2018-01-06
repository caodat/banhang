$(document).ready(function(){
    $(".main-slider-content").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        pagination: false,
        navigation: true,
        navigationText: false,
        singleItem: true
    });
    
    $(".product-list-carousel").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        pagination: false,
        navigation: true,
        navigationText: false,
        items: 4
    });
    
    $(".brand-carousel").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        pagination: false,
        navigation: true,
        navigationText: false,
        items: 6
    });
    $(".mc-list-child").hide();
    $(".mc-list li a").on("click", function(){
        var mcsp = $(this);
        var mcl = $(this).parent().find(".mc-list-child");
        mcl.toggle();
        if(mcl.is(":visible")) {
            mcsp.find(".fa").removeClass("fa-angle-right").addClass("fa-angle-down");
        } else {
            mcsp.find(".fa").removeClass("fa-angle-down").addClass("fa-angle-right");
        }
    });
    $(".cc-list li a").on("click", function(){
        var ccsp = $(this);
        var ccl = $(this).parent().find(".cc-list-child");
        ccl.toggle();
        if(ccl.is(":visible")) {
            ccsp.find(".fa").removeClass("fa-caret-right").addClass("fa-caret-down");
        } else {
            ccsp.find(".fa").removeClass("fa-caret-down").addClass("fa-caret-right");
        }
    });
    
    $(".header-menu-btn span").on("click",function(){
        $(".header-nav-mobile").css("left","0px");
    });
    $(".header-menu-btn-hidden").on("click", function(){
        $(".header-nav-mobile").css("left","-300px");
    });
	
	$(".product-list-list").hide();
    
		$(".btn-view-grid").on("click", function(){
			$(".product-list-grid").show();
			$(".product-list-list").hide();
		});
		$(".btn-view-list").on("click", function(){
			$(".product-list-grid").hide();
			$(".product-list-list").show();
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
});