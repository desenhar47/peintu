function additionalCarousel(sliderId){
	/*======  curosol For Additional ==== */
	 var tmadditional = $(sliderId);
      tmadditional.owlCarousel({
     	 items : 4, //10 items above 1000px browser width
     	 itemsDesktop : [1200,3], 
     	 itemsDesktopSmall : [991,2], 
     	 itemsTablet: [767,1], 
     	 itemsMobile : [320,1] 
      });
      // Custom Navigation Events
      $(".additional_next").click(function(){
        tmadditional.trigger('owl.next');
      })
      $(".additional_prev").click(function(){
        tmadditional.trigger('owl.prev');
      });
}

$(document).ready(function(){
	
	bindGrid();
	additionalCarousel("#main #additional-carousel");
	
	// JS for calling parallax
	jQuery(window).load(function(){	 
		"use strict";
		var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
		if(!isMobile) {
			if(jQuery(".parallax").length){  jQuery(".parallax").sitManParallex({  invert: false });};    
		}else{
			jQuery(".parallax").sitManParallex({  invert: true });
			
			}
	});

	$('.cart_block .block_content').on('click', function (event) {
		event.stopPropagation();
	});
	
	//breadcumb//
	$('h1.h1').prependTo('.breadcrumb .container');
	//breadcumb//
	
	
	// ---------------- start more menu setting ----------------------

		var max_elem = 6;
		var items = $('.menu ul#top-menu > li');	
		var surplus = items.slice(max_elem, items.length);
		
		surplus.wrapAll('<li class="category more_menu" id="more_menu"><div id="top_moremenu" class="popover sub-menu js-sub-menu collapse"><ul class="top-menu more_sub_menu">');
	
		$('.menu ul#top-menu .more_menu').prepend('<a href="#" class="dropdown-item" data-depth="0"><span class="pull-xs-right hidden-md-up"><span data-target="#top_moremenu" data-toggle="collapse" class="navbar-toggler collapse-icons"><i class="material-icons add">&#xE313;</i><i class="material-icons remove">&#xE316;</i></span></span></span>More</a>');
	
		$('.menu ul#top-menu .more_menu').mouseover(function(){
			$(this).children('div').css('display', 'block');
		})
		.mouseout(function(){
			$(this).children('div').css('display', 'none');
		});
	// ---------------- end more menu setting ----------------------

});


// Add/Remove acttive class on menu active in responsive  
	$('#menu-icon').on('click', function() {
		$(this).toggleClass('active');
	});

// Loading image before flex slider load
	$(window).load(function() { 
		$(".loadingdiv").removeClass("spinner"); 
	});

// Flex slider load
	$(window).load(function() {
		if($('.flexslider').length > 0){ 
			$('.flexslider').flexslider({		
				slideshowSpeed: $('.flexslider').data('interval'),
				pauseOnHover: $('.flexslider').data('pause'),
				animation: "fade"
			});
		}
	});		

// Scroll page bottom to top
	$(window).scroll(function() {
		if ($(this).scrollTop() > 500) {
			$('.top_button').fadeIn(500);
		} else {
			$('.top_button').fadeOut(500);
		}
	});							
	$('.top_button').click(function(event) {
		event.preventDefault();		
		$('html, body').animate({scrollTop: 0}, 800);
	});



/*======  Carousel Slider For Feature Product ==== */
	
	var tmfeature = $("#feature-carousel");
	tmfeature.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [479,2] 
	});
	// Custom Navigation Events
	$(".feature_next").click(function(){
		tmfeature.trigger('owl.next');
	})
	$(".feature_prev").click(function(){
		tmfeature.trigger('owl.prev');
	});



/*======  Carousel Slider For New Product ==== */
	
	var tmnewproduct = $("#newproduct-carousel");

var x =  tmnewproduct.children();
		 for (i = 0; i < x.length+1 ; i += 2) {
		   	x.slice(i,i+2).wrapAll('<div class="'+ i +'"></div>');

		}

	tmnewproduct.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [479,2] 
	});
	// Custom Navigation Events
	$(".newproduct_next").click(function(){
		tmnewproduct.trigger('owl.next');
	})
	$(".newproduct_prev").click(function(){
		tmnewproduct.trigger('owl.prev');
	});



/*======  Carousel Slider For Bestseller Product ==== */
	
	var tmbestseller = $("#bestseller-carousel");
	tmbestseller.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [479,2] 
	});
	// Custom Navigation Events
	$(".bestseller_next").click(function(){
		tmbestseller.trigger('owl.next');
	})
	$(".bestseller_prev").click(function(){
		tmbestseller.trigger('owl.prev');
	});



/*======  Carousel Slider For Special Product ==== */
	var tmspecial = $("#special-carousel");
	tmspecial.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [479,2]  
	});
	// Custom Navigation Events
	$(".special_next").click(function(){
		tmspecial.trigger('owl.next');
	})
	$(".special_prev").click(function(){
		tmspecial.trigger('owl.prev');
	});


/*======  Carousel Slider For Accessories Product ==== */

	var tmaccessories = $("#accessories-carousel");
	tmaccessories.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [479,2]  
	});
	// Custom Navigation Events
	$(".accessories_next").click(function(){
		tmaccessories.trigger('owl.next');
	})
	$(".accessories_prev").click(function(){
		tmaccessories.trigger('owl.prev');
	});


/*======  Carousel Slider For Category Product ==== */

	var tmproductscategory = $("#productscategory-carousel");
	tmproductscategory.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [479,2]  
	});
	// Custom Navigation Events
	$(".productscategory_next").click(function(){
		tmproductscategory.trigger('owl.next');
	})
	$(".productscategory_prev").click(function(){
		tmproductscategory.trigger('owl.prev');
	});


/*======  Carousel Slider For Viewed Product ==== */

	var tmviewed = $("#viewed-carousel");
	tmviewed.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [479,2] 
	});
	// Custom Navigation Events
	$(".viewed_next").click(function(){
		tmviewed.trigger('owl.next');
	})
	$(".viewed_prev").click(function(){
		tmviewed.trigger('owl.prev');
	});

/*======  Carousel Slider For Crosssell Product ==== */

	var tmcrosssell = $("#crosssell-carousel");
	tmcrosssell.owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1199,4], 
		itemsDesktopSmall : [991,3], 
		itemsTablet: [767,2], 
		itemsMobile : [479,2]  
	});
	// Custom Navigation Events
	$(".crosssell_next").click(function(){
		tmcrosssell.trigger('owl.next');
	})
	$(".crosssell_prev").click(function(){
		tmcrosssell.trigger('owl.prev');
	});

/*======  curosol For Manufacture ==== */
	 var tmbrand = $("#brand-carousel");
      tmbrand.owlCarousel({
     	 items : 5, //10 items above 1000px browser width
     	 itemsDesktop : [1200,5], 
     	 itemsDesktopSmall : [1199,4],
     	 itemsTablet: [991,3], 
     	 itemsTabletSmall: [767,2], 
     	 itemsMobile : [479,1] 
      });
      // Custom Navigation Events
      $(".brand_next").click(function(){
        tmbrand.trigger('owl.next');
      })
      $(".brand_prev").click(function(){
        tmbrand.trigger('owl.prev');
      });
	  

/*======  Carousel Slider For blog  ==== */
	
	var tmblog = $("#blog-carousel");
	tmblog.owlCarousel({
		items : 3, //10 items above 1000px browser width
		itemsDesktop : [1199,3], 
		itemsDesktopSmall : [991,2], 
		itemsTablet: [767,2], 
		itemsMobile : [480,1] 
	});

	$(".blog_next").click(function(){
		tmblog.trigger('owl.next');
	})
	$(".blog_prev").click(function(){
		tmblog.trigger('owl.prev');
	});
	


/*======  Carousel Slider For testimonial block ==== */

		var tmtestimonial = $("#testimonial_carousel");
		tmtestimonial.owlCarousel({
		//autoPlay: true,
		pagination:true,
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1199,1], 
		itemsDesktopSmall : [991,1], 
		itemsTablet: [479,1], 
		itemsMobile : [319,1] 
		});
		// Custom Navigation Events
      $(".tmtestimonial_next").click(function(){
        tmtestimonial.trigger('owl.next');
      })
      $(".tmtestimonial_prev").click(function(){
        tmtestimonial.trigger('owl.prev');
      });
	  
/*======  curosol For TM Category Block ==== */
	 
	  var tmcategory = $("#tmcategory-carousel");
     	 tmcategory.owlCarousel({
     	 items :5, //10 items above 1000px browser width
     	 itemsDesktop : [1199,4], 
     	 itemsDesktopSmall : [991,3], 
     	 itemsTablet: [767,2], 
     	 itemsMobile : [479,2] 
      });

$('#product #productCommentsBlock').appendTo('#product #tab-content #rating');

function bindGrid()
{
	var view = $.totalStorage("display");

	if (view && view != 'grid')
		display(view);
	else
		$('.display').find('li#grid').addClass('selected');

	$(document).on('click', '#grid', function(e){
		e.preventDefault();
		display('grid');
	});

	$(document).on('click', '#list', function(e){
		e.preventDefault();
		display('list');		
	});	
}


function display(view)
{
	if (view == 'list')
	{
		$('#products ul.product_list').removeClass('grid').addClass('list');
		$('#products .product_list > li').removeClass('col-xs-12 col-sm-6 col-md-6 col-lg-4').addClass('col-xs-12');

		$('#products .product_list > li .thumbnail-container').addClass('col-xs-4 col-xs-5 col-md-4');
		$('#products .product_list > li .product-description ').addClass('center-block col-xs-4 col-xs-7 col-md-8');


		$('.display').find('li#list').addClass('selected');
		$('.display').find('li#grid').removeAttr('class');
		$.totalStorage('display', 'list');
	}
	else
	{
		$('#products ul.product_list').removeClass('list').addClass('grid');
		$('#products .product_list > li').removeClass('col-xs-12').addClass('col-xs-12 col-sm-6 col-md-6 col-lg-4');
		$('#products .product_list > li .thumbnail-container').removeClass('col-xs-4 col-xs-5 col-md-4');
		$('#products .product_list > li .product-description').removeClass('center-block col-xs-4 col-xs-7 col-md-8');


		$('.display').find('li#grid').addClass('selected');
		$('.display').find('li#list').removeAttr('class');
		$.totalStorage('display', 'grid');
	}
}


function headerfixnormal() {
 		if ($(window).width() <= 991){
	 			if ($(this).scrollTop() >80) {
							$('.header-nav').addClass('fixed');
							
							
				}else{
							$('.header-nav').removeClass('fixed');
							
		}
		}else{
							$('.header-nav').removeClass('fixed');
							
		}
		if ($(window).width() >= 992){
	 			if ($(this).scrollTop() >250) {
							$('.header-top').addClass('fixed');
							
							
							
				}else{
							$('.header-top').removeClass('fixed');
							
				}
		}else{
							$('.header-top').removeClass('fixed');
		}
}
jQuery(document).ready(function() {headerfixnormal();});
jQuery(window).scroll(function() {headerfixnormal();});


function responsivecolumn(){
	
	
	
	if ($(window).width() <= 991)
	{
		$('.container #columns_inner #left-column').appendTo('.container #columns_inner');
		$('.header-top #search_widget').detach().insertAfter('.header-nav #_mobile_user_info');			
	}
	else if($(window).width() >= 992)
	{
		$('.container #columns_inner #left-column').prependTo('.container #columns_inner');
		$('.header-nav #search_widget').detach().insertAfter('.header-top #_desktop_user_info');
	}
}
$(document).ready(function(){responsivecolumn();});
$(window).resize(function(){responsivecolumn();});
$(window).scroll(function() {responsivecolumn();});

//sign in toggle
$(document).ready(function(){
	
	 $('.tm_userinfotitle').click(function(event){
		  $(this).toggleClass('active');
		  event.stopPropagation();
		  $(".user-info").slideToggle("fast");
		});
		$(".user-info").on("click", function (event) {
		  event.stopPropagation();
		});
		
});


function headertoggle() {	
	$('.head-wishlist').css('display','block');
	$('.head-wishlist').appendTo('.user-info');
	$('.head-compare').appendTo('.user-info');
	$('.head-compare').css('display','block');	
}
$(document).ready(function() {headertoggle();});
$(window).resize(function() {headertoggle();});

    // JS for calling loadMore
		$(document).ready(function () {

			"use strict";	  
			var size_li_feat = $("#index #featureProduct .featured_grid li.product_item").size();
			var size_li_new = $("#index .newproduct_grid li.product_item").size();
			var size_li_best = $("#index #bestseller .bestseller_grid li.product_item").size();
			var size_li_special = $("#index .special-products .special_grid li.product_item").size();
			
			var x= 8;
			var y= 12;
			var z= 8;
			var a= 8;

			$('#index #featureProduct .featured_grid li.product_item:lt('+x+')').fadeIn('slow');
			$('#index .newproduct_grid li.product_item:lt('+y+')').fadeIn('slow');
			$('#index #bestseller .bestseller_grid li.product_item:lt('+z+')').fadeIn('slow');
			$('#index .special-products .special_grid li.product_item:lt('+a+')').fadeIn('slow');
			    	
			    $('.featured_grid .gridcount').click(function () {
			if(x==size_li_feat){	  	
			 $('.featured_grid .gridcount').hide();
			 $('.featured_grid .tm-message').show();
			}else{
			x= (x+5 <= size_li_feat) ? x+4 : size_li_feat;	
			        $('#index #featureProduct .featured_grid li.product_item:lt('+x+')').fadeIn(1000);	
			}
			    });	

			$('.newproduct_grid .gridcount').click(function () {
			if(y==size_li_new){	  
			$('.newproduct_grid .gridcount').hide();
			$('.newproduct_grid .tm-message').show();
			}else{
			y= (y+5 <= size_li_new) ? y+4 : size_li_new;
			        $('#index .newproduct_grid li.product_item:lt('+y+')').fadeIn('slow');
			}
			    });	   

			$('.bestseller_grid .gridcount').click(function () {
			if(z==size_li_best){	  
			$('.bestseller_grid .gridcount').hide();
			$('.bestseller_grid .tm-message').show();
			}else{
			z= (z+5 <= size_li_best) ? z+4 : size_li_best;
			        $('#index #bestseller .bestseller_grid li.product_item:lt('+z+')').fadeIn('slow');
			}
			    });
			
				$('.special_grid .gridcount').click(function () {
			if(z==size_li_special){									 
					$('.special_grid .gridcount').hide();
					$('.special_grid .tm-message').show();
			}else{
				z= (z+5 <= size_li_special) ? z+4 : size_li_special;
				$('#index .special-products .special_grid li.product_item:lt('+a+')').fadeIn('slow');
			}
			})
		});
		
	
function searchtoggle() {
	if($(window).width() > 0){

		$('#header .search_button').click(function(event){
			$(this).toggleClass('active');
			$('#header #search_widget').toggleClass('active');
			event.stopImmediatePropagation();
			$("#header .searchtoggle").slideToggle("fast");
			$('#header .search-widget form input[type="text"]').focus();
		});
			$("#header .searchtoggle").on("click", function (event) {
				event.stopImmediatePropagation();
			});
		}
		else{
			$('#header .search_button,#header .searchtoggle').unbind();
			$('#search_widget').unbind();
			$("#header .searchtoggle").show();
		}
	}
$(window).resize(function(){searchtoggle();});
$(window).ready(function() {searchtoggle();});


$('.menu-icon').on('click', function () {
$('#mobile_top_menu_wrapper').toggleClass('slide');
$('.menu-icon').toggleClass('active');
$('body').toggleClass('active');
$('#page').toggleClass('active');

  });