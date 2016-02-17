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
				animation: "slide",
				controlNav: false
			});
		});

		$(document).ready(function($) {
      		$("#owl-example").owlCarousel({
	      		items : 3,
	      		navigation : true,
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
      $("html body").animate({"scrollTop":$($(this).attr('href')).offset().top-82},1400);
      return false;
         }
});



$('.contenedor-acordeon').hide();   
	$('.acordeon').on('click',function(){
		if($(this).next().is(':visible')){
			$(this).next().slideUp();
		}

		if($(this).next().is(':hidden')){
			$('.acordeon').next().slideUp();
			$(this).next().slideDown();
	}
});


$('.btn-enviar-modal').click(function(event){
	event.preventDefault();

	var nombre = $("input[name='nombre']").val();
	var email = $("input[name='email']").val();
	var telefono = $("input[name='telefono']").val();
	var mensaje = $("textarea[name='mensaje']").val();

	if(nombre===''){
		$("input[name='nombre']").focus();
		alert("por favor escribe un nombre o escribe un nombre valido")
		return false;

	}if(email===''){
		$("input[name='email']").focus();
		alert("por favor escribe un email");
		return false;

	}if(telefono===''){
		$("input[name='telefono']").focus();
		alert("por favor escribe tu telefono");
		return false;

	}if(mensaje===''){
		$("textarea[name='mensaje']").focus();
		alert("por favor escribe un nombre o escribe un mensaje");
		return false;
	} 

	$.ajax({
                type: "POST",
                url: "../../envio-form/envio.php",
            	dataType: 'json',
                data: {'nombre': nombre, 'email': email, 'telefono': telefono, 'mensaje': mensaje},
                success: function() {

            	 $('.modalwindow').fadeOut(500);
                      
                }
            });
});








 
    //select all the a tag with name equal to modal
    $('a[name=modal]').click(function(e) {
        //Cancel the link behavior
        e.preventDefault();
        //Get the A tag
        var id = $(this).attr('href');
 
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();
 
        //Set the popup window to center
        $(id).css('left', winW/2-$(id).width()/2);
 
        //transition effect
        $(id).fadeIn(500); 
 
    });
 
    //if close button is clicked
    $('.modalwindow .close').click(function (e) {
        //Cancel the link behavior
        e.preventDefault();
        $('.modalwindow').fadeOut(500);
    }); 



$(window).scroll(function() {
    if($(this).scrollTop() >= 189) {
        $(".man-1").addClass('fadeIn');
        console.log($(this).scrollTop());
    }

    if($(this).scrollTop() >= 731) {
        $(".man-2").addClass('expandOpen');
        //console.log($('section.paso1').offset().top);
    }

    if($(this).scrollTop() >= 189) {
        $(".man-3").addClass('fadeIn');
        // console.log($('section.paso1').offset().top);
    }
    if($(this).scrollTop() >= 189) {
        $(".man-4").addClass('fadeIn');
        //console.log($('section.paso1').offset().top);
    }
});


                

	});
})(jQuery);
