
jQuery(function ($) {
    'use strict';
    /*============================================
     Page Preloader
     ==============================================*/
    $(window).on('load', function () {
        $('#page-loader').fadeOut(500);
    });
    /*============================================ 
     Menu Maker
     ==============================================*/
    $("#mainmenu").menumaker({
        title: "Menu",
        breakpoint: 991,
        format: "multitoggle"
    });
    /*============================================ 
     Search
     ==============================================*/

    $('.search-icon a').on('click', function(){ 
        $('.search-container').slideToggle('fast');
        $(".search-icon a span").toggleClass("ion-search ion-close");
        return false;
    });

    /*============================================
	Blog Share
     ==============================================*/
    $('.card-share > a').on('click', function(e){ 
        e.preventDefault(); // prevent default action - hash doesn't appear in url
        $(this).parent().find( 'div' ).toggleClass( 'card-social--active' );
        $(this).toggleClass('share-expanded');
    });
	/*============================================
	Counter
     ==============================================*/
    if ($('.count').length)
    {
        $('.count').counterUp({
            delay: 10,
            time: 1000
        });
    }
    /*============================================ 
     Partners Slider
     ==============================================*/
    if ($('.partner-slider').length)
    {
        $(".partner-slider").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            pagination: false,
            items: 6,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3]

        });
    }
    /*============================================ 
     Portfolio Slider
     ==============================================*/
    if ($('.portfolio-home-items').length)
    {
        $(".portfolio-home-items").owlCarousel({
        autoPlay: 5000, //Set AutoPlay to 3 seconds
        pagination:false,
        navigation:false,
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });
    }
    
    /*============================================
	Flex Slider
     ==============================================*/
    
    if ($('.flexslider').length)
    {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: false,
            slideshowSpeed:5000
        }); 
        $('.flex-next').on('click', function(e){ 
            e.preventDefault();
            $('.flexslider').flexslider("play");
        });
        $('.flex-next').on('click', function(e){ 
            e.preventDefault();
            $('.flex-prev').flexslider("play");
        });
    }
    /*============================================ 
     Parallax
     ==============================================*/
    if ($('.parallax').length)
    {
        $('.parallax').parallaxScroll({
            friction: 0.2
        });
    }
    
    
    /*============================================
	Project Filter
     ==============================================*/
    var isotopeContainer = $('.isotopeContainer');
    if( !isotopeContainer.length || !jQuery().isotope ) return;
    $(window).on('load', function () {
        isotopeContainer.isotope({
            itemSelector: '.isotopeSelector'
        });
        $('.isotopeFilters').on( 'click', 'a', function(e) {
            $('.isotopeFilters').find('.active').removeClass('active');
            $(this).parent().addClass('active');
            var filterValue = $(this).attr('data-filter');
            isotopeContainer.isotope({
                filter: filterValue
            });
            e.preventDefault();
        });
    });
    
    
   



});