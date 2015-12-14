(function($){

	"use strict";

	$(function(){


		console.log('hello from functions.js');


		/**
		 * Validación de emails
		 */
		window.validateEmail = function (email) {
			var regExp = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return regExp.test(email);
		};





		/**
		 * Regresa todos los valores de un formulario como un associative array 
		 */
		window.getFormData = function (selector) {
			var result = [],
				data   = $(selector).serializeArray();

			$.map(data, function (attr) {
				result[attr.name] = attr.value;
			});
			return result;
		}

		$("#slider3").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        maxwidth: 800,
        namespace: "large-btns"
      });

		$(window).load(function(){
			$('.flexslider').flexslider({
				animation: "slide"
			});
		});

		$(document).ready(function($) {
      $("#owl-example").owlCarousel({
      	items : 3,
      	 itemsDesktop : [1199,3],
      	itemsDesktopSmall : [979,3]
      });

    });
		/**
		 * CODIGO SHARE FACEBOOK
		 */
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s);
		  js.id = id;
		  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=692635144113519&version=v2.0";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'))

		if (localStorage.controlcookie>0){ 
document.getElementById('cookie1').style.bottom = '-50px';
}


$("a").on("click",function(){
   if(this.hash){
      //console.log($(this).attr('href'));
      $("html body").animate({"scrollTop":$($(this).attr('href')).offset().top-82},1400);
      return false;
         }
});





	});
})(jQuery);
