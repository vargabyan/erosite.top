let slidesPerView = 8;

action();
window.addEventListener('resize', action)

function action() {
    if (window.innerWidth <= 768) {
        slidesPerView = 3;

        document.querySelector('.desktop-header_logo-img').src = "/bitrix/templates/erosite_copy/img/header/logo_black.svg"
        document.querySelector('.desktop-header_logo-img').style = 'width: 100%;';
    } else {
        slidesPerView = 8;

        document.querySelector('.desktop-header_logo-img').src = "/best_masseuses/images/Vector.png"
        document.querySelector('.desktop-header_logo-img').style = 'width: 36.145px;\n' +
            'height: 33.163px;\n' +
            'flex-shrink: 0;';
    }
}

new Swiper('.pagination_swiper', {

    direction: 'horizontal',
    loop: false,

    navigation: {
        nextEl: '.pagination_swiper-button-next',
        prevEl: '.pagination_swiper-button-prev',
    },
    slidesPerView: slidesPerView,
});


