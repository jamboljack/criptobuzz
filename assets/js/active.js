(function ($) {
    "use strict";

    jQuery(document).ready(function($){
        
        
        $("ul#menu").slicknav({
            prependTo: ".responsive-menu-wrap"
        });
        
        
         /*-------------------------------------------
       2. owl carosel Slide posts
    --------------------------------------------- */
    $('.slide-posts').owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        autoplayTimeout:4000,
        dots:false,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    });

      // Pref add class active to 1st thumbnail via js
    $('.post-thumbnail').eq(0).addClass('active');
      // When slider autoplay or drag is true 
    $('.slide-posts').on('changed.owl.carousel', function(event) {
        $('.post-thumbnail').removeClass('active');
        var sliders = 10;
        var currentItem = event.item.index - 2;
        if(currentItem >= sliders) {
          currentItem = 0;
        }
        $('.post-thumbnail').eq(currentItem).addClass('active');
      });
      // When thumbnail is clicked
      $('.post-thumbnail a').on('click',function(event) {
        event.preventDefault();
        $('.post-thumbnail').removeClass('active');
        var index = $('.post-thumbnail a').index(this);
        $('.post-thumbnail').eq(index).addClass('active');
        $('.slide-posts').trigger('to.owl.carousel', [index, 300, true]);
    });


    });

            /*--
            3. Scroll Up
        --------------------------------------------*/
        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            easingType: 'linear',
            scrollSpeed: 900,
            animation: 'fade'
        }); 

        $('.maen-menu').meanmenu({
            meanScreenWidth: "991",
            meanMenuContainer: '.responsive-menu-wrap',
             meanRevealPosition: "right",
        }); 

        new WOW().init();

        /*--------------------------------------------
            5. slider_research
        --------------------------------------------*/
         $(document).ready(function(){
          $("") .owlCarousel({
            items:4,
            loop:true,
            autoplay:true,
            autoplayTimeout:4000,
            dots:false,
            nav:true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],


            });
        });

         jQuery(window).load(function(){
        jQuery(".criptobuzz-site-preloader-wrap").fadeOut(500);
    });

}(jQuery)); 