'use strict';

var appAmoSpace = {

    preLoader: function(){
    	$(window).load(function() {
    		$('.pre-loader').delay(1000).fadeOut('slow');
    	});
    },

    navSpy: function(){
        /* affix the navbar after scroll below header */
        $('#nav.top-bar').affix({
            offset: {
                top: $(window).height()- 100
            }
        });

        /* highlight the top nav as scrolling occurs */
        $('body').scrollspy({
            target: '#nav'
        });
    },

    smoothScroll: function() {
        // Smooth Scrolling
        $('a[href*=#]:not([href=#carousel-example-generic], [href=#testimonials-carousel])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    },

    scollToTop: function(){
    	$(window).scroll(function() {
        	if ($(this).scrollTop() > 100) {
        		$('.scroll-up').fadeIn();
        	} else {
        		$('.scroll-up').fadeOut('slow');
        	}
        });
    },

    skillsChart: function(){
        $('.chart').easyPieChart({
            animate: 2000,
            size: 180,
            lineWidth:10,
            barColor: "#22a3df"
        });
    },
    
    isoTop: function(){
        var $container = $('#container');
        // init
        $container.isotope({
            // options
            itemSelector: '.item'
        });

        $('#filters').on('click', 'button', function() {
            $('#filters button').removeClass("current");
            $(this).addClass("current");
            var filterValue = $(this).attr('data-filter');
            $container.isotope({
                filter: filterValue
            });
        });
    },

    animateScript: function() {
        $('.scrollpoint.sp-effect1').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInLeft');},{offset:'100%'});
       $('.scrollpoint.sp-effect2').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInRight');},{offset:'100%'});
       $('.scrollpoint.sp-effect3').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInDown');},{offset:'100%'});
       $('.scrollpoint.sp-effect4').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeIn');},{offset:'100%'});
       $('.scrollpoint.sp-effect5').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated fadeInUp');},{offset:'100%'});
       $('.scrollpoint.sp-effect6').waypoint(function(){$(this).toggleClass('active');$(this).toggleClass('animated bounceIn');},{offset:'100%'});
    }

};


$(document).ready(function() {
	appAmoSpace.scollToTop();
});