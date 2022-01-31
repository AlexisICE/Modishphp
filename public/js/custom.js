$(function() {
  	'use strict';


	var $filters = $('.bseller-wrapper .filter-list [data-filter]'),
	    $boxes = $('.bseller-wrapper .filters-content [data-cat]');

	$filters.on('click', function(e) {
        e.preventDefault();
		var $filterColor = $(this).attr('data-filter');

		$filters.removeClass('active');
        $(this).addClass('active');

		if ($filterColor == "All") {
			$boxes.removeClass('is-animated')
            .fadeOut().promise().done(function() {
              $boxes.addClass('is-animated').fadeIn();
            });
		}
        else{
        	$boxes.removeClass('is-animated')
            	.fadeOut().promise().done(function() {
	            $boxes.filter(function(i,el){ 
	                return el.dataset.cat.split(',').indexOf($filterColor)!== -1;
	            })
                .addClass('is-animated').fadeIn();
            });
        }
	});


	$('#new-arrivals').owlCarousel({
	    loop:true,
	    margin:30,
	    nav:true,
	    // navText: ["<i class='icon-angle-pointing-to-left'></i>","<i class='icon-angle-pointing-to-left'></i>"],
	    dots:false,
	    autoplay:true,
	    responsive:{
	      0:{
	          items:1
	      },
	      576:{
	          items:2
	      },
	      992:{
	          items:3
	      },
	      1000:{
	          items:4
	      }
	    }
	});


	$('.plogo-carousel').owlCarousel({
      	loop:true,
      	margin:20,
      	nav:false,
      	dots:false,
      	center:true,
      	autoplay:true,
      	responsive:{
          	0:{
              items:1
          	},
          	576:{
              items:3
          	},
          	992:{
              items:5
          	},
          	1000:{
              items:5
          	}
      	}
  	});

  	$('#testi-carousel').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:false,
	    dots:false,
	    autoplay:true,
	    items:1
	});
	$('#testi-carousel5').owlCarousel({
	    loop:true,
	    margin:0,
	    nav:true,
	    dots:false,
	    autoplay:true,
	    items:1
	});

  	function asideBox(){
  		$('.asidepart-btn .aside-toggler .navbar-toggler').click(function(){
  			$('.aside-box-content .content-info').addClass('active');
  			$('.aside-box-content .bg-overlay').addClass('active');
  			$('html').addClass('overflowHidden');
  		});
  		$('.aside-box-content .remove').click(function(){
  			$('.aside-box-content .content-info').removeClass('active');
  			$('.aside-box-content .bg-overlay').removeClass('active');
  			$('html').removeClass('overflowHidden');
  		});
		if("$('.navbar-container').addClass('active');"){
			$('.aside-box-content .bg-overlay').click(function() {
				$('.remove').trigger('click');
			});
		}
  	}

  	asideBox();

	function navigation(){
		var $window = $(window),
		    $headerSticky = $('.header-sticky');

		if ($window.scrollTop() >= 200 && $window.width() > 991) {
			$headerSticky.addClass('is-sticky');
		}
		else {
			$headerSticky.removeClass('is-sticky');
		}
	}

	$(document).scroll(function(){
		navigation();
	});
  	

  	var MainNavigation = function() {
	    $('.header-main .navbar .logo-part  .navbar-toggler').on('click',function() {
	      $('.navbar .bg-overlay').addClass('show');
	      $('.header-main #MainNavigation').addClass('active');
	      $('html').css('overflow-y','hidden');
	    });
	    $('.header-main.style-5 .header-right .navigation-button  .navbar-toggler').on('click',function() {
	      $('.navbar .bg-overlay').addClass('show');
	      $('.header-main #MainNavigation').addClass('active');
	      $('html').css('overflow-y','hidden');
	    });
	    $('.navbar .remove').click(function(event) {
	      $('.navbar .bg-overlay').removeClass("show");
	      $('.navbar #MainNavigation').removeClass("active");
	      $('html').removeAttr('style');
	    });
	    if("$('.header-main').addClass('overlay');") {
	      $('.navbar .bg-overlay').click(function(){
	        $('.remove').trigger('click');
	      });
	    }
	    $('header .navbar-nav .has-children .expand').on('click',function(){
	      $(this).next().slideToggle();
	      $(this).toggleClass('minus');
	    });
	}
	MainNavigation();

	var quantityNumber = function() {
		$(".button").on("click", function() {
			var $button = $(this);
			var oldValue = $button.parent().find("input").val();

			if ($button.text() == "+") {
				var newVal = parseFloat(oldValue) + 1;
			}
			else {
				if (oldValue > 0) {
			   		var newVal = parseFloat(oldValue) - 1;
			   	} 
			   	else {
			   		newVal = 0;
			   	}
			}
			$button.parent().find("input").val(newVal);
		});
	};
	quantityNumber();
	var newsModal = function() {
	    setTimeout(function() {
	    	$('#myModalNews').modal('show');
	  	}, 1500);
	};
	newsModal();
});


