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

setInterval(function (){
    moveSlide(1);
}, 5000);

/////////// МОДАЛЬНОЕ ОКНО ////////////

// Get modal element
var modal = document.getElementById('ModalPanel');
// Get open modal button
var modalBtn = document.getElementById('feedback');
// Get close button
var closeBtn = document.getElementsByClassName('closeBtn')[0];

// Listen for open click
modalBtn.addEventListener('click', openModal);
// Listen for close click
closeBtn.addEventListener('click', closeModal);
// Listen for outside click
window.addEventListener('click', outsideClick);

// Function to open modal
function openModal(){
  modal.style.display = 'block';
}

// Function to close modal
function closeModal(){
  modal.style.display = 'none';
}

// Function to close modal if outside click
function outsideClick(e){
  if(e.target == modal){
    modal.style.display = 'none';
  }
}
