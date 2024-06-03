/* =====================================

All JavaScript fuctions Start

======================================*/

(function ($) {

	

    'use strict';

/*--------------------------------------------------------------------------------------------

	document.ready ALL FUNCTION START

---------------------------------------------------------------------------------------------*/	



// popovers initialization - on hover

	// Image Popover = jquery.prettyPhoto.js ================= // 	

	function image_popover(){	

		jQuery("[data-toggle=popover]").each(function() {

			jQuery(this).popover({

				html: true,

				content: function() {

				var id = jQuery(this).attr('id')

				return jQuery('#popover-content-' + id).html();

				}

			});

		});

	}



// Video responsive function by = custom.js ========================= //	

	function video_responsive(){	

		jQuery('iframe[src*="youtube.com"]').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');

		jQuery('iframe[src*="vimeo.com"]').wrap('<div class="embed-responsive embed-responsive-16by9"></div>');	

	}

    

// Bootstrap Select box function by  = bootstrap-select.min.js

    function Bootstrap_Select(){	

            jQuery('.sf-select-box').selectpicker();

    } 

    

// Bootstrap Slider function by  = bootstrap-slider.min.js   

    function Bootstrap_Slider(){

        jQuery('#ex1').slider({

            formatter: function(value) {

                return 'Current value: ' + value;

            }

        });  

        jQuery('#ex2').slider({

            formatter: function(value) {

                return 'Current value: ' + value;

            }

        });     

        

        jQuery('#ex3').slider({

            formatter: function(value) {

                return 'Current value: ' + value;

            }

        });           

        

        

    }



	//  On off button	

	jQuery('.sf-toogle-btn').on('click', function(e){

		jQuery(this).parent('.header-widget').toggleClass('active');

		jQuery(this).parent().siblings(".header-widget").removeClass('active');

		e.preventDefault();

	});		

    

 	//  On off button	

	jQuery('.admin-area-heading').on('click', function(e){

		jQuery('.admin-area-mid').toggleClass('active-plan');

		e.preventDefault();

	});		

    

  	//  Search Left Panel	

	jQuery('.search-filtter-btn, .sf-search-vbar-panel-close').on('click', function(e){

		jQuery('.page-content').toggleClass('active-search-filter');

		e.preventDefault();

	});	   

       

   	//  View Map Panel	

	jQuery('.view-map-btn, .aon-search-right-close').on('click', function(e){

		jQuery('.page-content').toggleClass('active-view-map');

		e.preventDefault();

	});	  

    

    //  Question & Answer	

	jQuery('.sf-qestion-line  i').on('click', function(e){

		jQuery(this).parent().next(".sf-answer-line").slideDown(500);

        jQuery(this).parent().toggleClass("nav-active");

        jQuery(this).closest(".sf-qes-answer-list li").siblings(".sf-qes-answer-list li").children(".sf-answer-line").slideUp(500)

		e.preventDefault();

	});	    

    

    //  Services Description Show Hide

	jQuery('.sf-provi-toggle-btn').on('click', function(e){

		jQuery(this).closest(".sf-provi-service-top").next(".sf-provi-service-bottom").children(".sf-provi-descriptio").slideDown(500);

		e.preventDefault();

	});	     

       

    



 // > LIGHTBOX Gallery Popup function	by = lc_lightbox.lite.js =========================== //      

 	function lightbox_popup(){

        lc_lightbox('.elem', {

            wrap_class: 'lcl_fade_oc',

            gallery : true,	

            thumb_attr: 'data-lcl-thumb', 

            

            skin: 'minimal',

            radius: 0,

            padding	: 0,

            border_w: 0,

        });

	}			



// > magnificPopup for video function	by = magnific-popup.js ===================== //	

	function magnific_video(){	

		jQuery('.mfp-video').magnificPopup({

			type: 'iframe',

		});

	}

	// > magnificPopup function	by = magnific-popup.js =========================== //

	function magnific_popup(){

		jQuery('.mfp-gallery').magnificPopup({

		delegate: '.mfp-link',

		type: 'image',

		tLoading: 'Loading image #%curr%...',

		mainClass: 'mfp-img-mobile',

		gallery: {

			enabled: true,

			navigateByImgClick: true,

			preload: [0,1] // Will preload 0 - before current, and 1 after the current image

		},

		image: {

			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

		}

	});

	}



// Vertically center Bootstrap modal popup function by = custom.js ==============//

	function popup_vertical_center(){	

		jQuery(function() {

			function reposition() {

				var modal = jQuery(this),

				dialog = modal.find('.modal-dialog');

				modal.css('display', 'block');

				

				// Dividing by two centers the modal exactly, but dividing by three 

				// or four works better for larger screens.

				dialog.css("margin-top", Math.max(0, (jQuery(window).height() - dialog.height()) / 2));

			}

			// Reposition when a modal is shown

			jQuery('.modal').on('show.bs.modal', reposition);

			// Reposition when the window is resized

			jQuery(window).on('resize', function() {

				jQuery('.modal:visible').each(reposition);

			});

		});

	}



// > Main menu sticky on top  when scroll down function by = custom.js ========== //		

	function sticky_header(){

		if(jQuery('.sticky-header').length){

			var sticky = new Waypoint.Sticky({

			  element: jQuery('.sticky-header')

			});

		}

	}



	// > Sidebar sticky  when scroll down function by = theia-sticky-sidebar.js ========== //		

	function sticky_sidebar(){		

		$('.rightSidebar')

			.theiaStickySidebar({

				additionalMarginTop: 100

			});		

	}





// > page scroll top on button click function by = custom.js ===================== //	

	function scroll_top(){

		jQuery("button.scroltop").on('click', function() {

			jQuery("html, body").animate({

				scrollTop: 0

			}, 1000);

			return false;

		});



		jQuery(window).on("scroll", function() {

			var scroll = jQuery(window).scrollTop();

			if (scroll > 900) {

				jQuery("button.scroltop").fadeIn(1000);

			} else {

				jQuery("button.scroltop").fadeOut(1000);

			}

		});

	}

	

// > input type file function by = custom.js ========================== //	 	 

	function input_type_file_form(){

		jQuery(document).on('change', '.btn-file :file', function() {

			var input = jQuery(this),

				numFiles = input.get(0).files ? input.get(0).files.length : 1,

				label = input.val().replace(/\\/g, '/').replace(/.*\//, '');

			input.trigger('fileselect', [numFiles, label]);

		});



		jQuery('.btn-file :file').on('fileselect', function(event, numFiles, label) {

			var input = jQuery(this).parents('.input-group').find(':text'),

				log = numFiles > 10 ? numFiles + ' files selected' : label;

			if (input.length) {

				input.val(log);

			} else {

				if (log) alert(log);

			}

		});	

	}



	

	

// > accordion active calss function by = custom.js ========================= //	

	function accordion_active() {

		$('.acod-head a').on('click', function() {

			$('.acod-head').removeClass('acc-actives');

			$(this).parents('.acod-head').addClass('acc-actives');

			$('.acod-title').removeClass('acc-actives'); //just to make a visual sense

			$(this).parent().addClass('acc-actives'); //just to make a visual sense

			($(this).parents('.acod-head').attr('class'));

		 });

	}	



	// > Nav submenu show hide on mobile by = custom.js

	function mobile_nav(){

		jQuery(".sub-menu").parent('li').addClass('has-child');

		jQuery("<div class='fa fa-angle-right submenu-toogle'></div>").insertAfter(".has-child > a");



		jQuery('.has-child a+.submenu-toogle').on('click',function(ev) {



			jQuery(this).parent().siblings(".has-child ").children(".sub-menu").slideUp(500, function(){

				jQuery(this).parent().removeClass('nav-active');

			});



			jQuery(this).next(jQuery('.sub-menu')).slideToggle(500, function(){

				jQuery(this).parent().toggleClass('nav-active');

			});



			ev.stopPropagation();

		});

	

	}

	



	 

	// Mobile side drawer function by = custom.js

	function mobile_side_drawer(){

		jQuery('#mobile-side-drawer').on('click', function () { 

			jQuery('.mobile-sider-drawer-menu').toggleClass('active');

		});

	}	

    

	//  Search Panel function by = custom.js

	function search_filter_panel(){

		jQuery('.aon-search-filter').on('click', function () { 

			jQuery('.page-content').toggleClass('active-searchbar');

		});

 		jQuery('.sf-seach-panel-close').on('click', function () { 

			jQuery('.page-content').toggleClass('active-searchbar');

		});       

	}    



 

    

	// Categories carousel function by = owl.js

    function categories_carousel_owl (){

        jQuery('.categories-carousel-owl').owlCarousel({

            loop:true,

            margin:30,

            center: true,

            nav:true,

            dots: false,

            navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

            responsive:{

                0:{

                    items:1,

                    center:false,

                },

                480:{

                    items:3

                },			

                767:{

                    items:3

                },

                1024:{

                    items:5,

                    center:true

                },



            }

        });

    }

    

    

	// Featurd Provider Carousel function by = owl.js

    function featurd_provider_carousel (){

        jQuery('.aon-featurd-provider-carousel').owlCarousel({

            loop:true,

            margin:20,

            nav:true,

            dots: false,

            navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

            responsive:{

                0:{

                    items:1

                },

                767:{

                    items:2

                },			

                1000:{

                    items:2

                },

                1200:{

                    items:3

                }

            }

        });    

    }

    

    

	// Featurd Provider Two Carousel function by = owl.js

	function aon_vendor_provider_two_carousel() {

		jQuery('.aon-vendor-provider-two-carousel').owlCarousel({

			loop:true,

			margin:20,

			nav:true,

			dots: false,

			navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

			responsive:{

				0:{

					items:1

				},

				767:{

					items:2

				},			

				1000:{

					items:2

				},

				1200:{

					items:3

				}

			}

		});

	}    

    

    

    

 	// Testimonials Carousel function by = slick.js

    function slick_testimonials_carousel(){   

        jQuery('.slick-testimonials-carousel').slick({

            slidesToShow: 1,

            slidesToScroll: 1,

            arrows: false,

            fade: false,

            asNavFor: '.slick-testimonials-thumbnails',

         });



         jQuery('.slick-testimonials-thumbnails').slick({

            slidesToShow:3,

            slidesToScroll:1,

            centerMode: true,

            asNavFor: '.slick-testimonials-carousel',

            dots: false,

            focusOnSelect: true,

            responsive: [

            {

              breakpoint: 1200,

              settings: {

                slidesToShow:2

              },

              breakpoint:767,

              settings: {

                slidesToShow:1

              }

            }

          ]

         });

    

    }

    

    

   	// Related Provider Sidebar Carousel function by = owl.js

    function aon_related_provi_sidebar (){    

        jQuery('.aon-related-provi-sidebar').owlCarousel({

            loop:true,

            margin:15,

            items:1,

            nav:true,

            dots: false,

            navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

			responsive:{

				0:{

					items:1

				},

				767:{

					items:2

				},			

				991:{

					items:1

				},

				1200:{

					items:1

				}

			}

        });

    }



	// Job Related Provider Sidebar Carousel function by = owl.js

    function aon_jobrelated_carousel (){    

        jQuery('.aon-jobrelated-carousel').owlCarousel({

            loop:true,

            margin:0,

            items:1,

            nav:true,

            dots: false,

            navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

        });

    }

    

   	// Testimonials Two Carousel function by = owl.js

    function testimonials_two_carousel_owl (){

        jQuery('.testimonials-two-carousel-owl').owlCarousel({

            loop:true,

            margin:0,

            center: true,

            nav:true,

            dots: false,

            navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

            responsive:{

                0:{

                    items:1,

                    center:false,

                },

                767:{

                    items:2

                },

                1024:{

                    items:3,

                    center:true

                },



            }

        });

    } 

    

    

    // Video Gallery Carousel function by = owl.js

    function aon_video_carousel (){   

	jQuery('.aon-video-carousel').owlCarousel({

        loop:true,

		margin:30,

		nav:true,

		dots: false,

		navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

		responsive:{

			0:{

				items:1,

			},

			480:{

				items:2

			},			

			767:{

				items:3

			}

		}

	});    

    

}

    

    

    

	jQuery('.aon-ow-provi-related').owlCarousel({

        loop:true,

		margin:20,

		nav:true,

		dots: false,

		navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

		responsive:{

			0:{

				items:1

			},

			767:{

				items:2

			},			

			1000:{

				items:2

			},

			1200:{

				items:3

			}

		}

	});	 

	

	

		jQuery('.owl-caty-carousel').owlCarousel({

        loop:true,

		margin:30,

		nav:true,

		dots: false,

		navText: ['<span class="ar-left"></span>', '<span class="ar-right"></span>'],

		responsive:{

			0:{

				items:1,

                center:false,

			},

			480:{

				items:2

			},			

			767:{

				items:3

			},

            1024:{

                items:4

            }

		}

	});     



	

    // TouchSpin box function by  = jquery.bootstrap-touchspin.js

    function input_number_vertical_form(){	

        jQuery("input[name='demo1']").TouchSpin({

          verticalbuttons: true,

        });	

    }	

    

    // Search Open Close = custom.js 

	jQuery( 'body' ).on( 'click', '.search-filter-btn', function (){

		jQuery(".page-content").toggleClass("active-vs-bar");

	});	



    //  Counter Section function by = counterup.min.js

	function counter_section(){

		jQuery('.counter').counterUp({

			delay: 10,

			time: 3000

		});	

	}	

	

    //  Nav Tabs by = custom.js

	jQuery('.nav-tabs a').on('click', function() {

		e.preventDefault();

		jQuery(this).tab('show');

	});

	

	jQuery('.wt-accordion a').on('click', function() {

		e.preventDefault();

		jQuery(this).tab('show');

	});	

    

	// CustomScrollbar function by = custom.js	

	function sidebar_admin_wraper(){		

		jQuery("#sidebar-admin-wraper").mCustomScrollbar({

			theme: "minimal"

		});

	}





	// Before After Image function by = twentytwenty.js

	function image_BeforeAfter(){

		jQuery('#sidebarCollapse').on('click', function () { 

			jQuery('#header-admin, #sidebar-admin-wraper, #content').toggleClass('active');

		});

	}    



    // CustomScrollbar function by = custom.js	

    function msg_list_wrap(){		

        jQuery("#msg-list-wrap").mCustomScrollbar({

            theme: "minimal"

        });

    }



    // CustomScrollbar function by = custom.js	

    function msg_chat_wrap(){		

        jQuery("#msg-chat-wrap").mCustomScrollbar({

            theme: "minimal"

        });

    }  

    

    //  On off button

    function on_off_buttom(){

		jQuery('.add-more-btn').on('click', function(e){

			jQuery(this).parent().toggleClass('active');

			jQuery(this).next().slideToggle(500);

			e.preventDefault();

		});	

	} 	

    



    // Notification Scroll function by = custom.js	

    function notification_scroll(){		

        jQuery(".notification-scroll").mCustomScrollbar({

            theme: "minimal"

        });

    }   

    

    // DataTable function by = custom.js	

    function DataTable(){		

        jQuery('.example-dt-table').DataTable();

    }    



    //  plan selected

    function Upgrade_account_plans(){	

        jQuery('.sf-upgrade-account-plans').on('click', function(e){

            jQuery(this).parent('.sf-upgrade-account-plans-area').toggleClass('active');

            jQuery(this).parent().siblings(".sf-upgrade-account-plans-area").removeClass('active');

            e.preventDefault();

        });     

    } 

    

    

 	// clock run = jquery.custom.js ================= // 	

	function countdown_clock(){	

        function getTimeRemaining(endtime) {

          const total = Date.parse(endtime) - Date.parse(new Date());

          const seconds = Math.floor((total / 1000) % 60);

          const minutes = Math.floor((total / 1000 / 60) % 60);

          const hours = Math.floor((total / (1000 * 60 * 60)) % 24);

          const days = Math.floor(total / (1000 * 60 * 60 * 24));



          return {

            total,

            days,

            hours,

            minutes,

            seconds

          };

    }



    function initializeClock(id, endtime) {

      const clock = document.getElementById(id);

      const daysSpan = clock.querySelector('.days');

      const hoursSpan = clock.querySelector('.hours');

      const minutesSpan = clock.querySelector('.minutes');

      const secondsSpan = clock.querySelector('.seconds');



  function updateClock() {

    const t = getTimeRemaining(endtime);



    daysSpan.innerHTML = t.days;

    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);

    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);

    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);



    if (t.total <= 0) {

      clearInterval(timeinterval);

    }

  }



	  updateClock();

	  const timeinterval = setInterval(updateClock, 1000);

	}

	

	if(jQuery('#clockdiv').length){

	const deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);

	initializeClock('clockdiv', deadline);

	}

	}   

    

    

    // Link Click Page Scroll = custom.js ================= // 

   // function link_scrolling(){	

    $('a[href*="#"]')

      // Remove links that don't actually link to anything

      .not('[href="#"]')

      .not('[href="#0"]')

      .click(function(event) {

        // On-page links

        if (

          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 

          && 

          location.hostname == this.hostname

        ) {

          // Figure out element to scroll to

          var target = $(this.hash);

          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

          // Does a scroll target exist?

          if (target.length) {

            // Only prevent default if animation is actually gonna happen

            event.preventDefault();

            $('html, body').animate({

              scrollTop: target.offset().top

            }, 1000, function() {

              // Callback after animation

              // Must change focus!

              var $target = $(target);

              $target.focus();

              if ($target.is(":focus")) { // Checking if the target was focused

                return false;

              } else {

                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable

                $target.focus(); // Set focus again

              };

            });

          }

        }

      });   

   // }



/*--------------------------------------------------------------------------------------------

	Window on load ALL FUNCTION START

---------------------------------------------------------------------------------------------*/





	// > masonry function function by = isotope.pkgd.min.js ========================= //	

	function masonryBox() {

        if ( jQuery().isotope ) {      

            var $container = jQuery('.masonry-wrap');

                $container.isotope({

                    itemSelector: '.masonry-item',

                    transitionDuration: '1s',

					originLeft: true,

					stamp: '.stamp'

                });



            jQuery('.masonry-filter li').on('click',function() {                           

                var selector = jQuery(this).find("a").attr('data-filter');

                jQuery('.masonry-filter li').removeClass('active');

                jQuery(this).addClass('active');

                $container.isotope({ filter: selector });

                return false;

            });

    	}

	}		

	



// > page loader function by = custom.js ========================= //		

	function page_loader() {

		$('.loading-area').fadeOut(1000);

	}



/*--------------------------------------------------------------------------------------------

    Window on scroll ALL FUNCTION START

---------------------------------------------------------------------------------------------*/



    function color_fill_header() {

        var scroll = $(window).scrollTop();

        if(scroll >= 100) {

            $(".is-fixed").addClass("color-fill");

        } else {

            $(".is-fixed").removeClass("color-fill");

        }

    }

    

	



/*--------------------------------------------------------------------------------------------

	document.ready ALL FUNCTION START

---------------------------------------------------------------------------------------------*/

	jQuery(document).ready(function() {

		// Image Popover = jquery.prettyPhoto.js ================= // 	

		image_popover(),

		// > Video responsive function by = custom.js 

		video_responsive(),

        // Bootstrap Select box function by  = bootstrap-select.min.js

        Bootstrap_Select(),

        // Bootstrap Slider function by  = bootstrap-slider.min.js   

        Bootstrap_Slider(),

		 // > LIGHTBOX Gallery Popup function	by = lc_lightbox.lite.js =========================== //      

		lightbox_popup(),

		// > magnificPopup for video function	by = magnific-popup.js

		magnific_video(),

		// > magnificPopup function	by = magnific-popup.js =========================== //

		magnific_popup()

		// > Vertically center Bootstrap modal popup function by = custom.js

		popup_vertical_center();

		// > Main menu sticky on top  when scroll down function by = custom.js		

		sticky_header(),

	    // > Sidebar sticky  when scroll down function by = theia-sticky-sidebar.js ========== //		

		sticky_sidebar(),

		// > page scroll top on button click function by = custom.js	

		scroll_top(),

		// > input type file function by = custom.js	 	

		input_type_file_form(),



		// > accordion active calss function by = custom.js ========================= //			

		accordion_active(),

		// > Nav submenu on off function by = custome.js ===================//

		mobile_nav(),

		// Mobile side drawer function by = custom.js

		mobile_side_drawer(),

        //  Search Panel function by = custom.js

        search_filter_panel()          

        // Categories carousel function by = owl.js

        categories_carousel_owl(),

        // Featurd Provider Carousel function by = owl.js

        featurd_provider_carousel(),

            

        // Featurd Provider Two Carousel function by = owl.js

        aon_vendor_provider_two_carousel(),

        

        // Testimonials Carousel function by = slick.js

        slick_testimonials_carousel(),             

            

        // Related Provider Sidebar Carousel function by = owl.js

        aon_related_provi_sidebar (),

		// Job Related Provider Sidebar Carousel function by = owl.js

		aon_jobrelated_carousel (),         

            

        // Testimonials Two Carousel function by = owl.js

        testimonials_two_carousel_owl (),       

        // Video Gallery Carousel function by = owl.js

        aon_video_carousel (),        

		// > TouchSpin box function by  = jquery.bootstrap-touchspin.js 

		input_number_vertical_form(),

		//  Counter Section function by = counterup.min.js

		counter_section()

        // CustomScrollbar function by = custom.js	

	    sidebar_admin_wraper()

        // Before After Image function by = twentytwenty.js

	    image_BeforeAfter()

        

        // CustomScrollbar function by = custom.js	

        msg_list_wrap()



        // CustomScrollbar function by = custom.js	

        msg_chat_wrap()

        

        //  On off button

        on_off_buttom()



        // Notification Scroll function by = custom.js	

        notification_scroll()        



        // DataTable function by = custom.js	

        DataTable() 

        

        //  plan selected

        Upgrade_account_plans()  

        

        // clock run = jquery.prettyPhoto.js ================= // 	

	    countdown_clock()

        

        // Link Click Page Scroll = custom.js ================= // 

        //link_scrolling()        

				

	}); 	



/*--------------------------------------------------------------------------------------------

	Window Load START

---------------------------------------------------------------------------------------------*/

	jQuery(window).on('load', function () {

		// > masonry function function by = isotope.pkgd.min.js		

		masonryBox(),

		// > page loader function by = custom.js		

		page_loader();

});



 /*===========================

	Window Scroll ALL FUNCTION START

===========================*/



	jQuery(window).on('scroll', function () {

	// > Window on scroll header color fill 

		color_fill_header();

	});

	

/*===========================

	Window Resize ALL FUNCTION START

===========================*/



	jQuery(window).on('resize', function () {





	});

	

	/*Submot contact form*/

	jQuery(document).on('submit', 'form.contact-form', function(e){

		e.preventDefault();

		var form = jQuery(this);

		/* sending message */

		jQuery.ajax({

			url: 'http://serviothemes.com/designer/doctor/contact-form.php',

			data: form.serialize() + "&action=contactform",

			type: 'POST',

			dataType: 'JSON',

			beforeSend: function() {

				jQuery('.alert').remove();

				jQuery('.loading-area').show();

			},

			success:function(data){

				jQuery('.loading-area').hide();

				if(data['success']){

				jQuery("<div class='alert alert-success'>"+data['message']+"</div>").insertBefore('form.contact-form');

				jQuery('.alert-success').delay(20000).fadeOut(500);

				}else{

				jQuery("<div class='alert alert-danger'>"+data['message']+"</div>").insertBefore('form.contact-form');	

				}

			}

		});

	});	

	

	

})(window.jQuery);









