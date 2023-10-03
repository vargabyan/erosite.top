let slidesPerView = 8;

action();
window.addEventListener('resize', action)

function action() {
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

const block_SEO_handle = document.getElementsByClassName('block_SEO_handle')[0];
const block_SEO_bottom_box = document.getElementsByClassName('block_SEO_bottom_box')[0];
const block_SEO_handle_span = document.getElementsByClassName('block_SEO_handle_span')[0];
const block_SEO_handle_span_p = document.querySelector('.block_SEO_handle_span p');

block_SEO_handle.addEventListener('click', actions_block_SEO);
block_SEO_handle_span.addEventListener('click', actions_block_SEO);

function actions_block_SEO() {
    if (block_SEO_bottom_box.style['height'] !== '100%') {
        block_SEO_bottom_box.style['height'] = '100%';
        block_SEO_handle_span.style = 'position: inherit; max-width: max-content; bottom: 3px;';
        block_SEO_handle_span_p.style['display'] = 'none';
    } else {
        block_SEO_bottom_box.style['height'] = window.innerWidth <= 768 ? '258px' : '135px';
        block_SEO_handle_span.style = 'position: absolute; max-width: 647px;';
        block_SEO_handle_span_p.style['display'] = 'block';
    }
}

const block_button_more_a = document.querySelector('.block_button_more a');
const block_button_more_opacity_box = document.querySelector('.block_button_more .opacity-box');
const block_button_more = document.querySelector('.block_button_more');

block_button_more_a.addEventListener('click', () => {

    if (window.getComputedStyle(block_button_more_opacity_box).display !== 'block') {
        block_button_more_opacity_box.style['display'] = 'block';
        block_button_more.style['margin-top'] = '-120px';
    } else {
        block_button_more_opacity_box.style['display'] = 'none';
        block_button_more.style['margin-top'] = '68px';
    }

})
