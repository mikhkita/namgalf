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

    if( device.mobile() || device.tablet() ){
        $("body").addClass("js-mobile");
    }

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
        easing: 'easeOutQuart',
        speed: 800,
        useTransform: false,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
        touchThreshold: 100,
        autoplay: true,
        autoplaySpeed: 3000
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
        ease: 'ease-out',
        speed: 500,
        useTransform: true,
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

    custom['svg-anim'] = function(el){
        document.getElementById(el.attr("data-id")).beginElement();
    }

    $(".b-reviews-slider").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true, 
        easing: 'easeOutQuart',
        speed: 800,
        useTransform: false,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
        touchThreshold: 100,
        autoplay: true,
        autoplaySpeed: 3000
    }); 
    animateIndexes($(".b-reviews-slide[data-slick-index='0']"));

    $(".b-reviews-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
        $(".b-review-index").removeClass("show");
        animateIndexes($(".b-reviews-slide[data-slick-index='"+currentSlide+"']"));
    });

    function animateIndexes($el){
        $el.find(".b-review-index").addClass("show");
    }

    $(".b-kind-slider").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true, 
        easing: 'easeOutQuart',
        speed: 800,
        useTransform: false,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
        touchThreshold: 100,
        autoplay: true,
        autoplaySpeed: 3000
    }); 

    $(".b-counter div").text($(".b-works-slide").length);

    $(".b-works-slider").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true, 
        easing: 'easeOutQuart',
        speed: 800,
        useTransform: false,
        arrows: true,
        adaptiveHeight: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
        touchThreshold: 100
    }); 

    $(".b-works-slide[data-slick-index='0'] .slider-anim").addClass("show");

    $('.b-works-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(".b-counter span").text(nextSlide+1);
    });

    $(".b-works-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
        $(".b-works-slide .slider-anim").removeClass("show");
        $(".b-works-slide[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    });

    $(".b-step-slider").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        easing: 'easeOutQuart',
        useTransform: false,
        speed: 800,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
        touchThreshold: 100
    });

    $(".b-step-slide[data-slick-index='0'] .slider-anim").addClass("show");

    $(".b-step-slider").on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $(".b-step-tabs li.active").removeClass("active");
        $(".b-step-tabs li").eq(nextSlide).addClass("active");

        calcActive();
    });

    $(".b-step-slider").on('afterChange', function(event, slick, currentSlide, nextSlide){
        $(".b-step-slide .slider-anim").removeClass("show");
        $(".b-step-slide[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    });

    var isWindows = false,
        timerLeave = 0,
        showLeave = true;
        inputFocus= false;

    $( "input" ).focus(function() {
        inputFocus = true;
        showLeave = false;
      });

    $(".b-levels-slider").slick({
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true, 
        easing: 'easeOutQuart',
        speed: 800,
        useTransform: false,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
        touchThreshold: 100,
        autoplay: true,
        autoplaySpeed: 3000
    }); 

    if (navigator.userAgent.indexOf ('Windows') != -1) isWindows = true;

    setInterval(function() {
        timerLeave++;
        if(timerLeave > 120){
            showLeave = true;
            timerLeave = 0;
        }
    }, 1000);

    $(document).mouseleave(function(){
        if(!$(".fancybox-slide .b-popup").length && showLeave){
            $(".b-quit-popup-link").click();
            showLeave = false;
            timerLeave = 0;
        }
    });

    // $(".b-quiz-link").each(function(){
    //     var $quiz = $($(this).attr("data-block")),
    // });
    // var quiz = $("#b-quiz-popup"),
    var type = null;
    // $("#b-quiz-popup").remove();

    $("#b-quiz-payback").on("click",function(){
        type = "offer";
        if ($(".b-quiz-road-map").hasClass("show-p")) {
            $(".b-quiz-container.b-quiz-road-map").removeClass("show-p");
            $(".b-quiz-container.b-quiz-offer").addClass("show-p");
        };    
    });

    $("#b-quiz-offer").on("click",function(){
        type = "offer";
        if ($(".b-quiz-road-map").hasClass("show-p")) {
            $(".b-quiz-container.b-quiz-road-map").removeClass("show-p");
            $(".b-quiz-container.b-quiz-offer").addClass("show-p");
        };
    });

    $("#b-quiz-road-map").on("click",function(){
        type = "road-map";
        if ($(".b-quiz-offer").hasClass("show-p")) {
            $(".b-quiz-container.b-quiz-road-map").addClass("show-p");
            $(".b-quiz-container.b-quiz-offer").removeClass("show-p");
        };
    });

    function quizOpen($button){
        var $form = $button.parents(".email-form"),
            $data = $($button.attr("href"));

        if ($form.length) {
            $form.valid();
            if( $form.find("input.error,select.error,textarea.error").length != 0 ){
                $form.find("input.error,select.error,textarea.error").eq(0).focus();
                return false;
            } else {
                $("#e-mail-1").val($form.find(".b-email-input").val());
                $("input[name=thanks]").val("request");
                $.fancybox.close();
            }
        };
        $.fancybox.open($data, {
            touch: false,
            afterLoad : function( instance, current ) {

            }
        });    
    }

    $("#amount").val( 50 );

    $("#b-quiz-form").find("input[name=phone]").mask('99999999999',{placeholder:"_"});

    $("#type").chosen({
        disable_search_threshold : 999999
    });

    $("#type").change(function(){
        if( $(this).val() == "Другое" ){
            $(".b-type-more").addClass("show");
            setTimeout(function(){
                $("#type-more").focus();
            }, 100);
        }else{
            $(".b-type-more").removeClass("show");
        }
    });

    $("#b-quiz-form").find("select, input, textarea").change(function(){
        $("#b-quiz-form").valid();
    });

    $("#checkbox-mytask").change(function(){
        if( $(this).prop("checked") ){
            $(".b-quiz-2 .b-quiz-textarea").fadeIn(300);
        }else{
            $(".b-quiz-2 .b-quiz-textarea").fadeOut(300);
        }
    });

    $("#b-quiz-form").submit(function(){
        var $this = $(this);

        $this.find(".quiz-submit").attr("onclick", "return false;");
    });
    $("#checkbox-promotion-1").on('click', function(){
        if ($("#checkbox-promotion-1").prop("checked")) {
            $(".b-quiz-slider-container").css('display', 'block');
            var val = 20;
            var valueIncrease = setInterval(function() {
                val = val+2; 
                $( "#b-quiz-slider" ).slider( "value", val );
                if (val == 50){
                    clearInterval(valueIncrease);
                };
                $(" #b-quiz-slider ").find(".b-slider-result").text( val + " т.р.");
            }, 20);

        }
        else{
            $(".b-quiz-slider-container").css('display', 'none');
        }
    })


    $("#b-quiz-slider").slider({
        range: "min",
        value: 20,
        min: 20,
        max: 200,
        step: 2,
        slide: function( event, ui ) {
            $("#amount").val( ui.value );
            if( ui.value*1 == 200 ){
                $("#b-quiz-slider").find(".b-slider-result").text( "> " + ui.value + " т.р.");
            }else{
                $("#b-quiz-slider").find(".b-slider-result").text( ui.value + " т.р.");
            }
        },
        create: function( event, ui ) {
            $(".ui-slider-handle").append("<div class='b-slider-result'></div>")
        }
    });

                    

    var sended = false;
    $("#b-quiz-popup .b-btn").on('click', function(){
        $("#b-quiz-form").valid();

        if( $(this).parents(".b-quiz-container").find("input.error,select.error,textarea.error").length != 0 || sended ){
            $(this).parents(".b-quiz-container").find("input.error,select.error,textarea.error").eq(0).focus();
            return false;
        }

        if( $(this).hasClass("quiz-submit") ){
            sended = true;
            if( $("#type").val() != "Другое" ){
                $(".b-type-more").remove();
            }
            $("#b-quiz-form").submit();
            return true;
        }

        var currentQuizNumber = $(this).parents(".b-quiz-container").attr('data-number');
        $(this).parents(".b-quiz-container").hide();
        currentQuizNumber = parseInt(currentQuizNumber) + 1;
        currentLine = $(this).parents(".b-quiz-container").next().attr('data-result');

        $(".b-quiz-container").each(function(){
            if($(this).attr('data-number') == currentQuizNumber){
                if (currentQuizNumber == 5) {
                    if (type == "road-map") {
                        $(".b-quiz-container.b-quiz-road-map").addClass("show-p");
                        $(".b-quiz-container.b-quiz-offer").removeClass("show-p");
                    }
                    else{
                        $(".b-quiz-container.b-quiz-offer").addClass("show-p");
                        $(".b-quiz-container.b-quiz-road-map").removeClass("show-p");
                    }
                }
                else{
                    $(this).show()
                }
            };
        })

        $(".b-quiz-line-green").attr("data-result", currentLine);
        $(".b-quiz-line-green").css("width", currentLine+"%");

        return true;
    });

    $(".b-quiz-link").click(function(){
        quizOpen($(this));
    });
    $("#b-quiz-form").validate({
        rules: {
            email: 'email',
            "task[]": { 
                required: true, 
                minlength: 1
            },
            "promo[]": {
                required: true, 
                minlength: 1 
            },
            "more-request": {
                required: true, 
                minlength: 1 
            }
        },
        messages: { 
            "task[]": "Выберите хотя бы один вариант",
            "promo[]": "Выберите хотя бы один вариант",
            "more-request": "Выберите один вариант"
        },
        ignore: ":hidden:not(select)",
        errorPlacement: function(error, element) {
            if( element.attr("name") == "task[]" || element.attr("name") == "promo[]" || element.attr("name") == "more-request" ){
                error.addClass("visible-label");

                if( element.attr("name") == "task[]" ){
                    element.parents(".b-popup-form").find(".b-quiz-label").after(error);
                }else{
                    element.parents(".b-popup-form").prepend(error);
                }
            }
        }
    });

    $(".email-form").each(function(){
        $(this).validate({
            rules: {
                email: 'email'
            }
        });
        $(this).submit(function(){
            quizOpen($(this).find(".b-quiz-link"));
            return false;
        });
    });


    

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