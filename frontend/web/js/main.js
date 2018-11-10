/**
  * isMobile
  * responsiveMenu
  * headerFixed  
  * blog_slider
  * flatIconboxCarousel
  * blogCarousel
  * ClientCarousel
  * flatTeam
  * googleMap
  * testimonialSlide
  * flatTestimonials_1
  * portfolioIsotope
  * flatAccordion  
  * responsiveVideo
  * goTop  
  * retinaLogos
  * parallax
*/

;(function($) {

   'use strict'

    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

	var responsiveMenu = function() {
        var menuType = 'desktop';

        $(window).on('load resize', function() {
            var currMenuType = 'desktop';

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                currMenuType = 'mobile';
            }

            if ( currMenuType !== menuType ) {
                menuType = currMenuType;

                if ( currMenuType === 'mobile' ) {
                    var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                    var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');

                    $('#header').after($mobileMenu);
                    hasChildMenu.children('ul').hide();
                    hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                    $('.btn-menu').removeClass('active');
                    

                    var nav = $('.wrap-header.s1 .header');            
                    if ( nav.size() !== 0 ) {
                        var offsetTop = $('.wrap-header.s1 .header').offset().top;                

                        $(window).on('load scroll', function(){
                            if ( $(window).scrollTop() > offsetTop ) {                        
                                $('.wrap-header.s1 .header').addClass('downscrolled');                        
                            } else {
                                $('.wrap-header.s1 .header').removeClass('downscrolled');                       
                            }                    
                        })
                    } // headerFixed s1

                    var nav = $('.wrap-header.s2 .header');
                    if ( nav.size() !== 0 ) {                    
                        var header = $('.wrap-header.s2 .header');           
                        var offsetTop = $('.wrap-header.s2 .header').offset().top;
                        var headerHeight = $('.wrap-header.s2 .header').height();
                        var buffer  = $('<div>', { height: headerHeight }).insertAfter(header);   
                            buffer.hide();                 

                        $(window).on('load scroll', function(){
                            if ( $(window).scrollTop() > offsetTop + 100 ) {
                                $('.wrap-header.s2 .header').addClass('slidedown');
                                buffer.show();
                            } else {
                                $('.wrap-header.s2 .header').removeClass('slidedown');
                                buffer.hide();
                            }

                            if ( $(window).scrollTop() > 550 ) {
                                $('.wrap-header.s2 .header').addClass('slideup');
                            } else {
                                $('.wrap-header.s2 .header').removeClass('slideup');
                            }                        
                   
                        }); // headerFixed s2
                    }

                } else {
                    var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');

                    $desktopMenu.find('.submenu').removeAttr('style');
                    $('#header').find('.nav-wrap').append($desktopMenu);
                    $('.btn-submenu').remove();
                }
            }
        });

        $('.btn-menu').on('click', function() {         
            $('#mainnav-mobi').slideToggle(300);
            $(this).toggleClass('active'); 

            if ($('.wrap-header.s1').find('#mainnav-mobi').height() == 1) {               
                $(this).closest('.wrap-header.s1').find('.header.s1').css({'background-color':'rgb(17, 17, 17)'}); 
            } else {
                 $(this).closest('.wrap-header.s1').find('.header.s1').css({'background-color':''});
            }

            if ($('.wrap-header.s2').find('#mainnav-mobi').height() == 1) {               
                $(this).closest('.wrap-header.s2').find('.header.s3').css({'background-color':'rgb(17, 17, 17)'}); 
            } else {
                 $(this).closest('.wrap-header.s2').find('.header.s3').css({'background-color':''});
            }

        });
               

        $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
            $(this).toggleClass('active').next('ul').slideToggle(300);
            e.stopImmediatePropagation()

        });

       
    }

    console.log('vjdhg');
    var headerFixed_s1 = function() {
            var nav = $('.wrap-header.s1 .header');            
            if ( nav.size() !== 0 ) {
                var offsetTop = $('.wrap-header.s1 .header').offset().top;                

                $(window).on('load scroll resize', function(){
                    if ( $(window).scrollTop() > offsetTop ) {
                        $('.wrap-header.s1 .header').addClass('downscrolled');                        
                    } else {
                        $('.wrap-header.s1 .header').removeClass('downscrolled');                       
                    }                    
                })
            } 
      
    }; // headerFixed v1

    var headerFixed_s2 = function() {
        var nav = $('.wrap-header.s2 #header');
            if ( nav.size() !== 0 ) {

            $(window).on('load', function(){
            var header = $('.wrap-header.s2 .header');           
            var offsetTop = $('.wrap-header.s2 .header').offset().top;
            var headerHeight = $('.wrap-header.s2 .header').height();
            var buffer  = $('<div>', { height: headerHeight }).insertAfter(header);   
                buffer.hide();                 

                $(window).on('load scroll', function(){
                    if ( $(window).scrollTop() > offsetTop + 200 ) {
                        $('.wrap-header.s2 .header').addClass('slidedown');
                        buffer.show();
                    } else {
                        $('.wrap-header.s2 .header').removeClass('slidedown');
                        buffer.hide();
                    }

                    if ( $(window).scrollTop() > 550 ) {
                        $('.wrap-header.s2 .header').addClass('slideup');
                    } else {
                        $('.wrap-header.s2 .header').removeClass('slideup');
                    }
                })
           
            }); // headerFixed v2
        }
    };

    var blog_slider = function() { 
        if ( $().flexslider ) {            
            $('.flat-blog-slider').each(function() {
                var $this = $(this)
                $this.find('.flexslider').flexslider({
                    animation      :  "slide",
                    direction      :  "horizontal", // vertical
                    pauseOnHover   :  true,
                    useCSS         :  false,
                    easing         :  "swing",
                    animationSpeed :  500,
                    slideshowSpeed :  5000,
                    controlNav     :  false,
                    directionNav   :  true,
                    slideshow      :  true,
                    prevText       :  '<i class="fa fa-angle-left"></i>',
                    nextText       :  '<i class="fa fa-angle-right"></i>',
                    smoothHeight   :  true
                }); // flexslider
            }); // blog-sider
        }
    }; 

    var flatIconboxCarousel = function() {
        $('.flat-iconbox-carosuel-wrap').each(function(){            
            if ( $().owlCarousel ) {
                $(this).find('.flat-iconbox-carosuel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: $('.flat-iconbox-carosuel').data('nav'),
                    dots: $('.flat-iconbox-carosuel').data('dots'),                     
                    autoplay: $('.flat-iconbox-carosuel').data('auto'),
                    responsive:{
                        0:{
                            items: 1
                        },
                        480:{
                            items: 2
                        },
                        767:{
                            items: 2
                        },
                        991:{
                            items: 3
                        }, 
                        1200:{
                            items: $('.flat-iconbox-carosuel').data('item')
                        }               
                    }
                });
            }            
        });
    };

    var blogCarousel = function() {
        $('.blog-carosuel-wrap').each(function(){            
            if ( $().owlCarousel ) {
                $(this).find('.blog-carosuel').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: false,
                    dots: false, 
                    auto:true,
                    responsive:{
                        0:{
                            items: 1
                        },
                        480:{
                            items: 2
                        },
                        767:{
                            items: 2
                        },
                        991:{
                            items: 3
                        }, 
                        1200:{
                            items: 3
                        }               
                    }
                });
            }            
        });
    };     

   

    var flatTeam = function() {
        $('.wrap-team').each(function() {            
            if ( $().owlCarousel ) {
                $(this).find('.flat-team-olw').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: $('.flat-team-olw').data('nav'),
                    dots: $('.flat-team-olw').data('dots'),                     
                    autoplay: $('.flat-team-olw').data('auto'),                    
                    responsive:{
                        0:{
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        767:{
                            items: 1
                        },
                        991:{
                            items: 1
                        },
                        1200: {
                            items: $('.flat-team-olw').data('item')
                        }
                    }
                });
            }
        });
    };
  
    var testimonialSlide = function() {
        $('.flat-testimonials-slider').each(function(){
            $(this).children('#flat-testimonials-carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 70,
                itemMargin: 10,
                asNavFor: $(this).children('#flat-testimonials-flexslider')
            });
            $(this).children('#flat-testimonials-flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,                
                sync: $(this).children('#flat-testimonials-carousel'),
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>'
            });
        });
    };  

    var flatTestimonials_1 = function() {
        $('.flat-row').each(function() {            
            if ( $().owlCarousel ) {
                $(this).find('.flat-testimonials').owlCarousel({
                    loop: true,
                    margin: 30,
                    nav: $('.flat-testimonials').data('nav'),
                    dots: $('.flat-testimonials').data('dots'),                     
                    autoplay: $('.flat-testimonials').data('auto'),                    
                    responsive:{
                        0:{
                            items: 1
                        },
                        767:{
                            items: 1
                        },
                        991:{
                            items: 1
                        },
                        1200: {
                            items: $('.flat-testimonials').data('item')
                        }
                    }
                });
            }
        });
    };

    var portfolioIsotope_1 = function() {         
        if ( $().isotope ) {           
            var $container = $('.portfolio-style2 .portfolio-wrap');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.item',
                    transitionDuration: '1s'
                });
            });

            $('.portfolio-style2 .portfolio-filter li a').on('click',function() {                           
                var selector = $(this).attr('data-filter');
                $('.portfolio-filter li').removeClass('active');
                $(this).closest('.portfolio-filter li').addClass('active');
                $('.portfolio-wrap .item').removeClass('active');                 

                $container.isotope({ filter: selector });
                return false;
            });
            
        };
    };

    var portfolioIsotope_2 = function() {         
        if ( $().isotope ) {           
            var $container = $('.portfolio-style1 .portfolio-wrap');
            $container.imagesLoaded(function(){
                $container.isotope({
                    itemSelector: '.item',
                    transitionDuration: '1s'
                });
            });

            $('.portfolio-style1 .portfolio-filter li a').on('click',function() {                           
                var selector = $(this).attr('data-filter');
                $('.portfolio-filter li').removeClass('active');
                $(this).closest('.portfolio-filter li').addClass('active');
                $('.portfolio-wrap .item').removeClass('active');                 

                $container.isotope({ filter: selector });
                return false;
            });
            
        };
    };

     

    var ClientCarousel = function() {
        $('.flat-row').each(function() {            
            if ( $().owlCarousel ) {
                $(this).find('.flat-carousel').owlCarousel({
                    loop: true,
                    nav: $('.flat-carousel').data('nav'),
                    dots: $('.flat-carousel').data('dots'),                     
                    autoplay: $('.flat-carousel').data('auto'), 
                     margin: 30,                   
                    responsive:{
                        0:{
                            items: 1
                        },
                        320: {
                            items: 1
                        },
                        480:{
                            items: 2
                        },
                        767:{
                            items: 3
                        },
                        991:{
                            items: 3
                        },
                        1200: {
                            items: $('.flat-carousel').data('item')
                        }
                    }
                });
            }
        });
    };

    var flatAccordion = function() {
        var args = {duration: 600};
        $('.flat-toggle .toggle-title.active').siblings('.toggle-content').show();

        $('.flat-toggle.enable .toggle-title').on('click', function() {
            $(this).closest('.flat-toggle').find('.toggle-content').slideToggle(args);
            $(this).toggleClass('active');
        }); // toggle 

        $('.flat-accordion .toggle-title').on('click', function () {
            if( !$(this).is('.active') ) {
                $(this).closest('.flat-accordion').find('.toggle-title.active').toggleClass('active').next().slideToggle(args);
                $(this).toggleClass('active');
                $(this).next().slideToggle(args);
            } else {
                $(this).toggleClass('active');
                $(this).next().slideToggle(args);
            }     
        }); // accordion
    }; 

   

    var responsiveVideo= function() {
        if ( $().fitVids ) {
            $('.container').fitVids();
        }
    };

        
    var goTop = function() {
        $(window).scroll(function() {
            if ( $(this).scrollTop() > 800 ) {
                $('.go-top').addClass('show');
            } else {
                $('.go-top').removeClass('show');
            }
        }); 

        $('.go-top').on('click', function() {            
            $("html, body").animate({ scrollTop: 0 }, 1000 , 'easeInOutExpo');
            return false;
        });
    };   

    var retinaLogos = function() {
      var retina = window.devicePixelRatio > 1 ? true : false;

        if(retina) {
            $('.header .logo').find('img').attr({src:'./images/logo@2x.png',width:'210',height:'88'});   
        }
    };    
    
    var parallax = function() {
        if ( $().parallax && isMobile.any() == null ) {
            $('.parallax1').parallax("50%", 0.5);
            $('.parallax2').parallax("50%", 0.5);              
            $('.parallax3').parallax("50%", 0.5);
            $('.parallax4').parallax("50%", 0.4); 
            $('.parallax5').parallax("50%", 0.5); 
            $('.parallax6').parallax("50%", 0.5);
            $('.parallax7').parallax("50%", 0); 
            $('.parallax8').parallax("50%", 0.5);
            $('.parallax9').parallax("50%", 0.5);          
        }
    };

    var popupGallery = function () {
        $(".popup-gallery").magnificPopup({
            type: "image",
            tLoading: "Loading image #%curr%...",
            removalDelay: 600,
            mainClass: "my-mfp-slide-bottom",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [ 0, 1 ]
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
            }
        });
    }

    
    var TestimonialSlide_1 = function() {
        $(window).load(function() {
            $('.wrap-icon-box.s1').flexslider({
                animation: "slide",
                controlNav: false,
            });
        });
    };

    var TestimonialSlide_2 = function() {
        $(window).load(function() {
            $('.flat-testimonials.style2').flexslider({
                animation: "slide",
                controlNav: true,
                directionNav: false,
                manualControls: ".flex-control-nav li"
            });
        });
    };

    var Slide_1 = function() {
        $(window).load(function() {
            $('.page-title .flat-slides').flexslider({
                animation: "slide",
                controlNav: true,
                directionNav: false,
                manualControls: ".flex-control-nav_v1 li"
            });
        });
    };

     var ImageSlide_1 = function() {
        $(window).load(function() {
            $('.wrar-slides.s1').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true,
                direction: "vertical", 
            });

            $('.wrar-slides.s2').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true,
                direction: "vertical", 
            });
        });
    };

    var sectionVideo = function () {
        if($().YTPlayer) {
            $(".video-section").YTPlayer( {
                showControls: false,
                autoPlay: false,
                
            }); 
            var v = $('.video-section');
            $('#video-controls a')
            .each(function() {
                var t = $(this);
                t.on('click', (function(e) {
                    e.preventDefault();  
                    if (t.hasClass('fa-play')) {
                        t.removeClass('fa-play')
                            .addClass(
                                'fa-pause');
                        v.playYTP();
                        t.closest('.video').find('.mbYTP_wrapper').removeClass('YTPOverlay');
                        return false
                    }                  
                    if (t.hasClass('fa-pause')) {
                        t.removeClass(
                                'fa-pause')
                            .addClass('fa-play');
                        v.pauseYTP();
                        t.closest('.video').find('.mbYTP_wrapper').addClass('YTPOverlay');
                        return false
                    }  
                    if (t.hasClass('fa-play-circle')) {
                        t.removeClass('fa-play-circle')
                            .addClass(
                                'fa-pause-circle');
                        v.playYTP();
                        return false
                    }  
                    if (t.hasClass('fa-pause-circle')) {
                        t.removeClass(
                                'fa-pause-circle')
                            .addClass('fa-play-circle');
                        v.pauseYTP();
                        return false
                    }                        
                }));
            });
        }
    }

    var addclass = function() {
        $(window).load(function() {
            $( ".wrap-header.s1 .tp-bullets" ).append('<p></p>');            
        });
    };

    var gnGallery = function() {
        $('.gn-gallery').each(function(){
            $(this).children('#gn-carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 107,
                itemMargin: 6,
                directionNav: false,
                asNavFor: $(this).children('#gn-slider'),
                prevText: '<i class="fa fa-caret-left"></i>',
                nextText: '<i class="fa fa-caret-right"></i>'
            });
            $(this).children('#gn-slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                directionNav: false,
                sync: $(this).children('#gn-carousel'),
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>'
            });
        });
    };

    var thumbnail_adventures= function() {        
        $(window).load(function(){

            $('.flat-adventures #slider').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                animationLoop: true,
                itemWidth: 670,
                itemMargin: 30,
                slideshow: false,
                sync: $(this).children('#carousel'),
                prevText: '<i class="fa fa-angle-left"></i>',
                nextText: '<i class="fa fa-angle-right"></i>'
            });
        });
    };


     var googleMap = function() {
        if ( $().gmap3 ) {
            if ($('.map').length != 0)  {
                $('.map').gmap3({
                    center:[46.274098, 7.347592],
                    zoom:9
                });
            }
        }
    };

    var googleMap_v2 = function() {
        if ( $().gmap3 ) {
            if ($('.map-v2').length != 0)  {
                $('.map-v2').gmap3({
                    center:[48.8582272, 2.2944325],
                    zoom:15
                });
            }
        }
    };

    var googleMap_v3 = function() {
        if ( $().gmap3 ) {
            if ($('.flat-map').length != 0)  {
                $('.flat-map').gmap3({
                    center:[47.5015338,15.6764022],
                    zoom:9
                });
            }
        }
    };

    var tabs = function() {
        $('.flat-tabs').each(function() {
            $(this).children('.content-tab').children().hide();
            $(this).children('.content-tab').children().first().show();
            $(this).find('.menu-tab').children('.radio').on('click', function(e) {  
                var liActive = $(this).index(),
                    contentActive = $(this).siblings().removeClass('active').parents('.flat-tabs').children('.content-tab').children().eq(liActive);

                contentActive.addClass('active').fadeIn('slow');
                contentActive.siblings().removeClass('active');
                $(this).addClass('active').parents('.flat-tabs').children('.content-tab').children().eq(liActive).siblings().hide();              
                
                $(this).parents('.menu-tab').find('.radio').children('input[type="radio"]').prop('checked', false);                
                if ( $(this).has('.radio.active') ) {                    
                    $(this).parents('.menu-tab').find('.radio.active').children('input[type="radio"]').prop('checked', true);
                } 
                e.preventDefault();                
            });
        });
    };

    var FilterPrice = function() {
        if( $().slider ) {
            $( function() {
                $( "#slider-range" ).slider({
                  range: true,
                  min: 30,
                  max: 183,
                  values: [ 50, 167 ],
                  slide: function( event, ui ) {
                    $( "#amount" ).val( ui.values[ 0 ] + "$" + " - " + ui.values[ 1 ] + "$" );
                  }
                });
                $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) + "$" + " - " + $( "#slider-range" ).slider( "values", 1 ) + "$" );
              } );
        }
    };

    var topSearch = function () {
      $(document).on('click', function(e) {   
            var clickID = e.target.id;   
            if ( ( clickID !== 's' ) ) {
                $('.top-search').removeClass('show');                
            } 
        });

        $('.show-search').on('click', function(event){
            event.stopPropagation();
        });

        $('.search-form').on('click', function(event){
            event.stopPropagation();
        });        

        $('.show-search').on('click', function (event) {
            if(!$('.top-search').hasClass( "show" )) {
                $('.top-search').addClass('show');  
                event.preventDefault();                
            }
                
            else
                $('.top-search').removeClass('show');
                event.preventDefault();

            if( !$('.show-search' ).hasClass( "active" ) )
                $( '.show-search' ).addClass( 'active' );
            else
                $( '.show-search' ).removeClass( 'active' );
        });   
   
    } 

     var removePreloader = function() { 
        $(window).load(function() { 

            $('.preloader').css('opacity', 0);
            setTimeout(function() {
                $('.preloader').hide(); }, 1000           
            ); 
        }); 
         
    };



   	// Dom Ready
	$(function() { 
        if ( matchMedia( 'only screen and (min-width: 991px)' ).matches ) {            
            headerFixed_s1();
            headerFixed_s2();
        }          
        responsiveMenu();        
        googleMap();
        googleMap_v2(); 
        googleMap_v3();
        testimonialSlide();  
        flatTestimonials_1();
        TestimonialSlide_2();
        Slide_1();
        flatIconboxCarousel(); 
        blogCarousel();
        blog_slider();
        portfolioIsotope_1();
        portfolioIsotope_2();
        ClientCarousel();
        popupGallery();
        goTop();          
        responsiveVideo();
        flatTeam();
        // retinaLogos(); 
        parallax();
        flatAccordion();
        TestimonialSlide_1();
        ImageSlide_1();
        sectionVideo();
        addclass();
        gnGallery();
        thumbnail_adventures();
        tabs();
        FilterPrice();
        topSearch();
        removePreloader();

   	});

})(jQuery);