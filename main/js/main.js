let slideIndex = 1,
    wrap = document.querySelector('.slider_wrap'),
    slides = document.getElementsByClassName('slider-item'),
    prev = document.querySelector('.prev'),
    next = document.querySelector('.next'),
    dotsWrap = document.querySelector('.slider-dots'),
    dots = document.getElementsByClassName('dot');

function showSlides(index) {
    if (index > slides.length) {
        slideIndex = 1;
    }
    if (index < 1) {
        slideIndex = slides.length;
    }
    for (let slide of slides) {
        slide.style.display = 'none';
    }
    for (let dot of dots) {
        dot.classList.remove('dot-active');
    }

    slides[slideIndex - 1].style.display = 'block';
    dots[slideIndex - 1].classList.add('dot-active');

}

showSlides(slideIndex);

function moveSlide(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

prev.addEventListener('click', function () {
    moveSlide(-1);
});

next.addEventListener('click', function () {
    moveSlide(1);
});

dotsWrap.addEventListener('click', function (event) {
    for (let i = 0; i < dots.length + 1; ++i) {
        if (event.target.classList.contains('dot') && event.target === dots[i - 1]) {
            currentSlide(i);
        }
    }
});

<<<<<<< HEAD:main/js/main.js
let sliderInterval = setInterval(() => {moveSlide(1)}, intervalTime);

<<<<<<< HEAD:main/script.js
function onMouseOver() {
    clearInterval(sliderInterval);
}

wrap.addEventListener('mouseover', onMouseOver);
=======
/////////// МОДАЛЬНОЕ ОКНО ////////////
>>>>>>> master:main/js/main.js
=======
setInterval(function (){
    moveSlide(1);
}, 5000);

>>>>>>> parent of 848c783... Merge branch 'newbranch' of github.com:ArturWk4/Colorwave into newbranch:main/script.js

