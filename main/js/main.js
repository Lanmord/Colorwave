let slideIndex = 1,
    wrap = document.querySelector('.slider_wrap'),
    slides = document.getElementsByClassName('slider-item'),
    prev = document.querySelector('.prev'),
    next = document.querySelector('.next'),
    dotsWrap = document.querySelector('.slider-dots'),
    dots = document.getElementsByClassName('dot'),
    intervalTime = 3500;

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

prev.addEventListener('click', () => {
    moveSlide(-1);
});

next.addEventListener('click', () => {
    moveSlide(1);
});

dotsWrap.addEventListener('click', function (event) {
    for (let i = 0; i < dots.length + 1; ++i) {
        if (event.target.classList.contains('dot') && event.target === dots[i - 1]) {
            currentSlide(i);
        }
    }
});

let sliderInterval = setInterval(() => {moveSlide(1)}, intervalTime);

<<<<<<< HEAD:main/script.js
function onMouseOver() {
    clearInterval(sliderInterval);
}

wrap.addEventListener('mouseover', onMouseOver);
=======
/////////// МОДАЛЬНОЕ ОКНО ////////////
>>>>>>> master:main/js/main.js

wrap.addEventListener('mouseleave', () => {
    wrap.removeEventListener('mouseover', onMouseOver);
    sliderInterval = setInterval(() => moveSlide(1), intervalTime);
    wrap.addEventListener('mouseover', onMouseOver);
});
