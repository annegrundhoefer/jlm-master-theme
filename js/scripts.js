(function( root, $, undefined ) {
	"use strict";

	$(function () {
		
		$(".menu-toggle").click(function(){
			$(this).toggleClass("is-active");
			$(".sub-menu").fadeToggle();
			$(".header .menu ul ").toggleClass("is-active");
		});
		
		$(".sub-menu li a").click(function(){
			$(".sub-menu").hide();
		});

	});

} ( this, jQuery ));