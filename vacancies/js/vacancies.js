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

const link_part_1 = document.getElementsByClassName('open__hidden_block')[0];
const link_part_2 = document.getElementsByClassName('open__hidden_block')[1];
const hidden_block__close = document.getElementsByClassName('hidden_block__close')[0];

link_part_1.addEventListener('click', handleOpen);
link_part_2.addEventListener('click', handleOpen);
hidden_block__close.addEventListener('click', handleClose);

function handleOpen() {
    document.getElementsByClassName('hidden_block')[0].style['display'] = 'flex';
}

function handleClose() {
    document.getElementsByClassName('hidden_block')[0].style['display'] = 'none';
}

document.addEventListener('click', event => {
    const showMoreButton = event.target.closest('[data-show-more]');
    if(showMoreButton) {
        const item = showMoreButton.closest('.item');
        item.classList.toggle('show-additional-buttons')
    }
})

document.addEventListener('click', event => {
    const copyVacancyHelloTextButton = event.target.closest('[data-copy-hello-text-button]');
    if(copyVacancyHelloTextButton) {
        const copyVacancyHelloTextContainer = copyVacancyHelloTextButton.closest('[data-copy-hello-text-container]');
        const copyVacancyHelloTextElement = copyVacancyHelloTextContainer.querySelector('[data-copy-hello-text-element]');
        const copyVacancyHelloText = copyVacancyHelloTextElement.textContent;

        const copyText = copyVacancyHelloText.replace(/\s+/g, ' ').trim();

        navigator.clipboard.writeText(copyText);
    }
})

document.addEventListener('click', event => {
    const showPopupButton = event.target.closest('[data-vacancy-popup]');
    if (showPopupButton) {
        const vacancyThumb = showPopupButton.closest('.vacancy-thumb');
        const companyName = vacancyThumb.querySelector('[data-company-name]').textContent;
        const vacancyName = vacancyThumb.querySelector('[data-vacancy-name]').textContent;
        const popupId = showPopupButton.dataset.popup;
        const popup = document.querySelector(`#${popupId}`);
        const positionInput = popup.querySelector('[name="form_text_9"]');
        positionInput.setAttribute('type', 'hidden');
        positionInput.value = `${companyName}, ${vacancyName}`;
        const positionInputBlock = positionInput.closest('.popup_input-wrapper');
        positionInputBlock.classList.add('display-hidden');
    }
});