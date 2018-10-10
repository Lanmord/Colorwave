let goodsIndex = 1,
    goodsSlides = document.getElementsByClassName('best-goods-item'),
    prevGoods = document.querySelector('#prev-btn'),
    nextGoods = document.querySelector('#next-btn'),
    dotsGoodsWrap = document.querySelector('.goods-dots'),
    goodsDots = document.getElementsByClassName('dot-goods');

function showgoodsSlides(index) {
    if (index > goodsSlides.length) {
        goodsIndex = 1;
    }
    if (index < 1) {
        goodsIndex = goodsSlides.length;
    }
    for (let slide of goodsSlides) {
        slide.style.display = 'none';
    }
    for (let dot of goodsDots) {
        dot.classList.remove('dot-goods-active');
    }

    goodsSlides[goodsIndex - 1].style.display = 'block';
    goodsDots[goodsIndex - 1].classList.add('dot-goods-active');
}

showgoodsSlides(goodsIndex);

function moveGoodsSlide(n) {
    showgoodsSlides(goodsIndex += n);
}

function currentGoodsSlide(n) {
    showgoodsSlides(goodsIndex = n);
}

prevGoods.addEventListener('click', () => {
    moveGoodsSlide(-1);
});

nextGoods.addEventListener('click', () => {
    moveGoodsSlide(1);
});

dotsGoodsWrap.addEventListener('click', function (event) {
    for (let i = 0; i < goodsDots.length + 1; ++i) {
        if (event.target.classList.contains('dot-goods') && event.target === goodsDots[i - 1]) {
            currentGoodsSlide(i);
        }
    }
});