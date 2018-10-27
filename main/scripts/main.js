// Отправка заявки 
$(document).ready(function() {
	$('form').submit(function() { // проверка на пустоту заполненных полей. Атрибут html5 — required не подходит (не поддерживается Safari)
		if (document.form.name.value == '' || document.form.phone.value == '' ) {
			valid = false;
			return valid;
		}
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$('.js-overlay-thank-you').fadeIn();
			$(this).find('input').val('');
			$('form').trigger('reset');
		});
		return false;
	});
});

// Закрыть попап «спасибо»
$('.js-close-thank-you').click(function() { // по клику на крестик
	$('.js-overlay-thank-you').fadeOut();
});

$(document).mouseup(function (e) { // по клику вне попапа
    var popup = $('.popup');
    if (e.target!=popup[0]&&popup.has(e.target).length === 0){
        $('.js-overlay-thank-you').fadeOut();
    }
});
 
// слайдеры 
$(document).ready(function () {
	$('.slider_best_inner').slick({
	  
	  dots: false,
infinite: false,
speed: 300,
slidesToShow: 4,
slidesToScroll: 1,
prevArrow:('#slide1'),
nextArrow:('#slide2'),
swipe: false,
responsive: [
{
  breakpoint: 1290,
  settings: {
	slidesToShow: 3,
	slidesToScroll: 1,
	infinite: true,
	dots: false
  }
},
{
  breakpoint: 1025,
  settings: {
	slidesToShow: 2,
	slidesToScroll: 1,
	swipe: true,
  }
},
{
  breakpoint: 780,
  settings: {
	slidesToShow: 1,
	slidesToScroll: 1,
	swipe: true,
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
	 
	
	});
	$('.slider_best_inner2').slick({
	  
	  dots: false,
infinite: false,
speed: 300,
slidesToShow: 4,
slidesToScroll: 1,
prevArrow:('.owl-left'),
nextArrow:('.owl-right'),
swipe: false,
responsive: [
{
  breakpoint: 1290,
  settings: {
	slidesToShow: 3,
	slidesToScroll: 1,
	infinite: true,
	dots: false
  }
},
{
  breakpoint: 1025,
  settings: {
	slidesToShow: 2,
	slidesToScroll: 1,
	swipe: true,
  }
},
{
  breakpoint: 780,
  settings: {
	slidesToShow: 1,
	slidesToScroll: 1,
	swipe: true,
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
	 
	
	});
	$('.slider_news_inner').slick({
	  
	  dots: false,
infinite: false,
speed: 300,
slidesToShow: 3,
slidesToScroll: 1,
prevArrow:('.owl1-left'),
nextArrow:('.owl2-right'),
// swipe: false,
responsive: [
{
  breakpoint: 1400,
  settings: {
	slidesToShow: 2,
	slidesToScroll: 1,
	infinite: true,
	dots: false
  }
},
{
  breakpoint: 890,
  settings: {
	slidesToShow: 1,
	slidesToScroll: 1
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
	 
	
	});
	$('.slider_wrap_inner').slick({
	  dots:true,
	  autoplay:false,
	  autoplaySpeed: 5000,
	  prevArrow:('.prev'),
	  nextArrow:('.next'),
	});
	});
	
	$(".sub_menu").click(function() {
		$('.drop-menu').toggleClass('active');
		$('.mob_btn .lnr-chevron-right').toggleClass('active');
	});

	$(".toggle-menu").click(function() {
	 
		if ($(".menu-mobile").hasClass("active")) {

			$(".menu-mobile").removeClass('active');
			$("html").css("overflow-y","scroll");
		} 
		else {
			$('.menu-mobile').toggleClass('active');
			$("html").css("overflow-y","hidden");
		}
		});
	
	  // МОДАЛЬНОЕ ОКНО //
	jQuery(function($){
			$("#phone-place").mask("+375 (99) 999-99-99");
	 });
	 
 $("#feedback, .closeBtn").click(function() {
	 
 if ($(".modal:visible").size() > 0) {
 
		 $("#modal-panel").css("display","none");
		 $("html").css("overflow-y","scroll");
 
 } else {
 
		 $(".modal").css("display","block");
		 $("html").css("overflow-y","hidden");
 
 }
 });
 
 $(".modal").mouseup(function (e) {
		 var container = $(".modal");
		 if (container.has(e.target).length === 0) {
 
			 if ($(".modal:visible").size() > 0) {
 
				 $("#modal-panel").css("display", "none");
				 $("html").css("overflow-y", "scroll");
 
			 } else {
 
				 $(".modal").css("display", "block");
				 $("html").css("overflow-y", "hidden");
				 
 
			 }
		 }
 });
 
 
// Стрелочки
$(".menu-left-mob-btn").click(function() {
	 
	if ($(".menu-left-mob").hasClass("active")) {

		$(".menu-left-mob").removeClass('active');
		$("html").css("overflow-y","scroll");
		$(".menu-left-mob-btn").removeClass('menu-left-mob-btn-active');
	} 
	else {
		$('.menu-left-mob').addClass('active');
		$("html").css("overflow-y","hidden");
		$(".menu-left-mob-btn").addClass('menu-left-mob-btn-active');
	}
	});


	 
//  $("#first_sub").click(function() {
	 
// 	 if ($("#first_ul:visible").size() > 0) {
		 
// 		 $('#first_arrow').removeClass('active');
// 		 }
		 
// 		 else {
// 		 $('#first_arrow').addClass('active');
// 		 }
//  });
//  $("#second_sub").click(function() {
	 
// 	 if ($("#second_ul:visible").size() > 0) {
		 
// 		 $('#second_arrow').removeClass('active');

// 		 } 
// 		 else {
// 		 $('#second_arrow').addClass('active');
// 		 }
//  });
