(function( root, $, undefined ) {
	"use strict";

	$(function () {	

		$("#menuToggle").click(function(){
			$(this).toggleClass("is-active");
			$(".sub-menu").fadeToggle();
			$(".header .menu ul ").toggleClass("is-active");
		});
		
		$(".sub-menu li a").click(function(){
			$(".sub-menu").hide();
		});

		if ($('body').hasClass('home')){
			$('ul li.home-link').addClass('active');
		}

	});

} ( this, jQuery ));