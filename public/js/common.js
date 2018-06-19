$(function() {
var lastId,
    topMenu = $("#navigation"),
    topMenuHeight = topMenu.outerHeight()+15,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });
 
$(window).scroll(function(){
   var fromTop = $(this).scrollTop()+topMenuHeight;
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});

    setTimeout(function () {
        $('input, select').styler();
    }, 100);

  	$('#navigation').removeClass('default');
  	$(window).scroll(function () {
			if($(this).scrollTop() > 40) {
  				$('#navigation').addClass("default").fadeIn("fast");
					$("#logo").attr("src","img/svg/logo_grey.svg");
					$("#menu_img").attr("src","img/svg/menu_grey.svg");
					$(".icon-menu").css("color", "#b2b2b2");
  			}
  			else {
  				$('#navigation').removeClass("default").fadeIn("fast");
  				$("#logo").attr("src","img/svg/logo.svg");
  				$("#menu_img").attr("src","img/svg/menu.svg");
  				$(".icon-menu").css("color", "#fff");
  			}
  	});

$(".menu").on("click","a", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var id  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: top - 100}, 1500);
	});

  	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});

$(document).ready(function(){
 $('.icon-menu').click(function() { /* выбираем класс icon-menu и
               добавляем метод click с функцией, вызываемой при клике */
 
        $('.menu_ham').animate({ //выбираем класс menu и метод animate
 
            right: '0px' /* теперь при клике по иконке, меню, скрытое за
               левой границей на 285px, изменит свое положение на 0px и станет видимым */
 
        }, 200); //скорость движения меню в мс
         
       
    });

/* Закрытие меню */
 
    $('.icon-close').click(function() { //выбираем класс icon-close и метод click
 
        $('.menu_ham').animate({ //выбираем класс menu и метод animate
 
            right: '-285px' /* при клике на крестик меню вернется назад в свое
               положение и скроется */
 
        }, 200); //скорость движения меню в мс
         
    
    });
});

$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

	$(".navigation").animated("fadeInDown", "fadeInDown");
	$(".utp").animated("fadeInLeft", "fadeInDown");
	/* не появляеться на планшете пока не начнешь скролить*/
	/*$(".navigation").animated("fadeInUp", "fadeInDown");*/

	//$(".logo").animated("zoomIn", "fadeInDown");

	$(".animated_1").animated("fadeInLeft", "fadeOutLeft");
	$(".image").animated("fadeInRight", "fadeOutLeft");
	$(".services").animated("fadeInRight", "fadeOutRight");
	$(".triangle").animated("fadeInLeft", "fadeOutLeft");
	$(".romb_1").animated("fadeInUp", "fadeOutDown");
	$(".romb_2").animated("fadeInRight", "fadeOutRight");
	$("#3").animated("fadeInLeft", "fadeOutLeft");

	$(".top_block").animated("fadeInDown", "fadeOutDown");
	$(".top_block.bottom").animated("fadeInUp", "fadeOutUp");
	$(".animated_2").animated("fadeInRight", "fadeOutRight");
	$(".back_img_right").animated("fadeInRight", "fadeOutDown");
	$(".varanty").animated("fadeInLeft", "fadeOutLeft");
	$(".contacts").animated("fadeInLeft", "fadeOutDown");

});
