let slidesPerView = 8;

action();
window.addEventListener('resize', action)

function action() {
    console.log(window.innerWidth)
    if (window.innerWidth <= 768) {
        slidesPerView = 3;
    } else {
        slidesPerView = 8;
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

