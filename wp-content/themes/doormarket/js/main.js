jQuery(document).ready(function(){
    var MEGAMENU_EFFECT = 0;
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 200) {
            jQuery('nav').addClass("fix-nav");
        } else {
            jQuery('nav').removeClass("fix-nav");
        }
    });


        var content = jQuery('#tv-inivoslider');
        content.nivoSlider({
            slices: 15,
            boxCols: 8,
            boxRows: 4,
            startSlide: 0,
            controlNavThumbs: false,
            pauseOnHover: true,
            manualAdvance: false,
            prevText: 'Prev',
            nextText: 'Next',
            effect: 'boxRandom',
            animSpeed: 1000,
            pauseTime: 40000,
            controlNav: 0,
            directionNav: 1/*,
             afterLoad: function(){
             $('.ajax_loading').css("display","none");
             },
             beforeChange: function(){
             $content.find('.nivo-item .title').css("top","-500px" );
             $content.find('.nivo-item .description').css("top","-1000px");
             $content.find('.nivo-item .readmore').css("top","-2000px");
             },
             afterChange: function(){
             $content.find('.nivo-item .title').css("top","330px");
             $content.find('.nivo-item .description').css("top","390px");
             $content.find('.nivo-item .readmore').css("top","250px");
             }*/
        });


    jQuery(document).ready(function($){
        (function(selector){
            var $content = $(selector);
            var $slider  = $('.products-grid', $content);
            var slider 	 = $slider.bxSlider({
                auto: 1, speed: 500, controls: 1, pager: 0, maxSlides: 2, slideWidth: 270, 				infiniteLoop: true,
                moveSlides:1,
                slideMargin: 0,
                autoHover: true // stop while hover <=> slider.stopAuto(); + slider.startAuto();
            })

        })(".onsaleslider");
    });

    jQuery(document).ready(function($) {
        $('#testimonialSidebar').bxSlider({
            auto: true,
            mode: 'fade',
            speed: 600,
            preloadImages: 'visible',
            controls: true,
            pager: true
        });
    });

    jQuery(document).ready(function($){
        $('.blog-content .bxslider').bxSlider({

            maxSlides: 1,
            slideWidth: 270,
            slideMargin: 30,
            moveSlides:1,
            auto: 0,
            autoControls: true,
            pager: true,
            controls: true,
            //mode: 'horizontal',
            speed: 450,
            pause: 600,
            //easing: 'jswing',
            autoHover: true
        });
    });

    jQuery(document).ready(function($){
        var slWidth = 280;
        var slCount = 4;
        if(window.innerWidth > 1200) slWidth = 290;
        if(window.innerWidth < 1200) {slCount = 2; slWidth = 360;}
        console.log(slWidth);
        (function(selector){
            var $content = $(selector);
            var $slider  = $('.slide-multirows', $content);
            var slider 	 = $slider.bxSlider({
                auto: 0, speed: 600, controls: 1, pager: 0, minSlides:2, maxSlides: slCount, slideWidth: slWidth, 				//infiniteLoop: false,
                moveSlides:1,
                slideMargin: 2,
                autoHover: true // stop while hover <=> slider.stopAuto(); + slider.startAuto();
            })
        })(".featuredproduct");
    });

    jQuery(document).ready(function($){
        (function(selector){
            var $content = $(selector);
            var $slider  = $('.products-grid', $content);
            var slider 	 = $slider.bxSlider({
                auto: 0, speed: 600, controls: 1, pager: 0, maxSlides: 5, slideWidth: 243, 					//infiniteLoop: false,
                moveSlides:1,
                slideMargin: 1,
                autoHover: true // stop while hover <=> slider.stopAuto(); + slider.startAuto();
            })

        })(".bestsellerslider");
    });

    jQuery(document).ready(function($){
        $('.brandlogo-contain .bxslider').bxSlider(
            {
                speed: 600,
                pause: 3000,
                minSlides: 2,
                //infiniteLoop: false,
                maxSlides: 7,
                slideWidth: 162,
                slideMargin: 6,
                autoHover: true,
                moveSlides:1,
                pager:false,
                controls: true
            }
        );
    });

    jQuery(document).ready(function($){
        (function(selector){
            var slWidth = 297;
            var $content = $(selector);
            var $slider  = $('.slide-multirows', $content);
            var slider 	 = $slider.bxSlider({
                auto: 0, speed: 1800, controls: 1, pager: 0, maxSlides: 2, slideWidth: slWidth,
                infiniteLoop: true,
                moveSlides:1,
                slideMargin: 5,
                autoHover: true // stop while hover <=> slider.stopAuto(); + slider.startAuto();
            })

        })(".newproductslider");
    });

});