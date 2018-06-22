$(document).ready(function(){	
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    $(window).enllax();

    $(".b-give-slider").slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true, 
        easing: 'easeOutCubic',
        speed: 800,
        useTransform: false,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
        touchThreshold: 100
    }); 

    $(".b-give-slide.slick-active").addClass("show");

    $(".b-give-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
        $(".b-give-slide").removeClass("show");
        $(".b-give-slide[data-slick-index='"+currentSlide+"']").addClass("show");
    });

    calcActive();

    function calcActive(){
        $(".b-tabs-line").each(function(){
            var $line = $(this).find("span"),
                $tabs = $(this).prev(".b-tabs"),
                $active = $tabs.find("li.active");

            $line.css({
                "left" : $active.offset().left - $tabs.offset().left,
                "width" : $active.width() + $active.css("padding-left").replace(/\D+/g,"")*1 + $active.css("padding-right").replace(/\D+/g,"")*1
            });
        });
    }

    $(".b-tabs li").click(function(){
        var $tabs = $(this).parents(".b-tabs"),
            index = $(this).index();

        $($tabs.attr("data-tabs")).find(".slick-dots li").eq(index).find("button").click();

        if( $($tabs.attr("data-tabs")).find(".slick-dots li").eq(index).hasClass("slick-active") ){
            $tabs.find("li").removeClass("active");
            $(this).addClass("active");

            calcActive();
        }
    });
    $(".b-diagram-tabs-cont").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        cssEase: 'ease', 
        speed: 500,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
        touchThreshold: 100
    });

    $(".b-diagram-tabs-cont").on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(".b-diagram-tabs li.active").removeClass("active");
        $(".b-diagram-tabs li").eq(nextSlide).addClass("active");

        calcActive();
    });

    // $(".b-give-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
    //     $(".b-give-slide[data-slick-index='"+currentSlide+"']").addClass("show");
    // });
    
	// var myPlace = new google.maps.LatLng(55.754407, 37.625151);
 //    var myOptions = {
 //        zoom: 16,
 //        center: myPlace,
 //        mapTypeId: google.maps.MapTypeId.ROADMAP,
 //        disableDefaultUI: true,
 //        scrollwheel: false,
 //        zoomControl: true
 //    }
 //    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

 //    var marker = new google.maps.Marker({
	//     position: myPlace,
	//     map: map,
	//     title: "Ярмарка вакансий и стажировок"
	// });

});