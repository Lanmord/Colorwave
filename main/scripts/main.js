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
  breakpoint: 1020,
  settings: {
	slidesToShow: 2,
	slidesToScroll: 1
  }
},
{
  breakpoint: 780,
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
  breakpoint: 1020,
  settings: {
	slidesToShow: 2,
	slidesToScroll: 1
  }
},
{
  breakpoint: 780,
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

	$(document).ready(function(){
			$('.toggle-menu').click(function(){
				$('.menu-mobile').toggleClass('active')
			});
	});