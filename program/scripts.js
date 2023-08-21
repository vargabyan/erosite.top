let slidesPerViewValue = 8;

action();
window.addEventListener('resize', action)

function action() {
    if (window.innerWidth <= 768) {
        slidesPerViewValue = 1;
    } else {
        slidesPerViewValue = 3;
    }

    if (window.innerWidth >= 768 && window.innerWidth <= 1230) {
        slidesPerViewValue = 1;
    } else if (window.innerWidth >= 1230) {
        slidesPerViewValue = 3;
    }
}


new Swiper('.block_container__2__bottom_box_swiper', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: slidesPerViewValue,

    navigation: {
        nextEl: '.block_container__2_button_next',
    },

})

new Swiper('.block_container__3__bottom_box_swiper', {
    // Optional parameters
    direction: 'horizontal',
    // slidesPerView: slidesPerView,
    slidesPerView: 3,

    navigation: {
        nextEl: '.block_container__3_button_next',
    },

})

const block_container__3_handle = document.querySelector('.block_container__3_handle');
const block_container__3_bottom_box = document.querySelector('.block_container__3_bottom_box');
const block_container__3_opacity_box = document.querySelector('.block_container__3_opacity_box');

block_container__3_handle.addEventListener('click', () => {
    if (block_container__3_bottom_box.style['height'] !== '100%') {

        block_container__3_bottom_box.style['height'] = '100%';
        block_container__3_opacity_box.style['display'] = 'none';
    } else {
        block_container__3_bottom_box.style['height'] = '1056px';
        block_container__3_opacity_box.style['display'] = 'block';
    }
})


document.addEventListener('click', event => {
    const button = event.target.closest('[data-switch-what-is-included-in-the-program]');

    if (button) {
        const articleBlock = button.closest('[data-article-what-is-included-in-the-program-block]');
        const changeElement = articleBlock.querySelector('[data-article-what-is-included-in-the-program]');

        changeElement.classList.toggle('block-container-1__hidden-element')
    }

})

document.addEventListener('click', event => {
    const button1 = event.target.closest('[data-change-element-state]');
    const button2 = event.target.closest('[data-change-element-state-read-more]');


    if (button1) {
        const changeElement = button1.closest('[data-hidden-element]');

        changeElement.classList.toggle('block-container-1__hidden-element')
        button1.classList.toggle('change-element-state-button')
    }
    if (button2) {
        const changeElement = button2.closest('[data-hidden-element]');

        changeElement.classList.toggle('block-container-1__hidden-element')
        button2.classList.toggle('block-container__1-col-2_part-2_a')
        button2.style['display'] = 'none';
    }

})

document.addEventListener('DOMContentLoaded', () => {

    const changeElement = document.querySelector('[data-hidden-element]');
    const button2 = document.querySelector('[data-change-element-state-read-more]');

    if (changeElement.textContent.length <= 469 ) {
        button2.style['display'] = 'none';
    }

} )
