let saleIndex = 1,
    saleSlides = document.getElementsByClassName('sale-item'),
    prevsale = document.querySelector('#prev-btn-sale'),
    nextsale = document.querySelector('#next-btn-sale'),
    dotssaleWrap = document.querySelector('.sale-dots'),
    saleDots = document.getElementsByClassName('dot-sale');

function showsaleSlides(index) {
    if (index > saleSlides.length) {
        saleIndex = 1;
    }
    if (index < 1) {
        saleIndex = saleSlides.length;
    }
    for (let slide of saleSlides) {
        slide.style.display = 'none';
    }
    for (let dot of saleDots) {
        dot.classList.remove('dot-sale-active');
    }

    saleSlides[saleIndex - 1].style.display = 'block';
    saleDots[saleIndex - 1].classList.add('dot-sale-active');
}

showsaleSlides(saleIndex);

function movesaleSlide(n) {
    showsaleSlides(saleIndex += n);
}

function currentsaleSlide(n) {
    showsaleSlides(saleIndex = n);
}

prevsale.addEventListener('click', () => {
    movesaleSlide(-1);
});

nextsale.addEventListener('click', () => {
    movesaleSlide(1);
});

dotssaleWrap.addEventListener('click', function (event) {
    for (let i = 0; i < saleDots.length + 1; ++i) {
        if (event.target.classList.contains('dot-sale') && event.target === saleDots[i - 1]) {
            currentsaleSlide(i);
        }
    }
});