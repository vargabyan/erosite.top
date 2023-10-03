const js_item_background = document.getElementsByClassName('js_item_background');
const js_item_background_length = js_item_background.length;

for (let i = 0; i < js_item_background_length; i++) {
    if (i % 2 !== 0) {

        js_item_background[i].style['background'] = '#F8F8F8';
    }
}

const js_block_container__8_item_bottom_box = document.getElementsByClassName('js_block_container__8_item_bottom_box');
const plus_item = document.getElementsByClassName('plus_item');
const minus_item = document.getElementsByClassName('minus_item');
const js_block_container__8_item_bottom_box_length = document.getElementsByClassName('js_block_container__8_item_bottom_box').length;

for (let i = 0; i < js_block_container__8_item_bottom_box_length; i++) {

    plus_item[i].addEventListener('click', () => {
        js_block_container__8_item_bottom_box[i].style['display'] = 'flex';
        minus_item[i].style['display'] = 'block';
        plus_item[i].style['display'] = 'none';
    })
    minus_item[i].addEventListener('click', () => {
        js_block_container__8_item_bottom_box[i].style['display'] = 'none';
        minus_item[i].style['display'] = 'none';
        plus_item[i].style['display'] = 'block';
    })

}


if (window.innerWidth <= 768) {
    const runAdvertising__parentalBlockForChangeElements = document.querySelectorAll('[run-advertising__parental-block-for-change-elements]');

    runAdvertising__parentalBlockForChangeElements.forEach((element, index) => {

        const runAdvertising__changePlacesElement1 = document.querySelectorAll('[run-advertising__change-places-element-1]')[index];
        const runAdvertising__changePlacesElement2 = document.querySelectorAll('[run-advertising__change-places-element-2]')[index];
        const takePlace_1 = runAdvertising__parentalBlockForChangeElements[index].querySelector('div');
        const takePlace_2 = runAdvertising__parentalBlockForChangeElements[index];

        takePlace_1.insertBefore(runAdvertising__changePlacesElement2, null)
        takePlace_2.insertBefore(runAdvertising__changePlacesElement1, null)

        runAdvertising__changePlacesElement1.classList.add('runAdvertising__changePlacesElement2')
        runAdvertising__changePlacesElement2.classList.add('runAdvertising__changePlacesElement2')

    })
}

if (window.innerWidth <= 768) {
    const PromoteYourSalon__parentalBlockForChangeElements = document.querySelector('[Promote-your-salon__parental-block-for-change-elements]');

    const promoteYourSalon__changePlacesElement1 = PromoteYourSalon__parentalBlockForChangeElements.querySelector('[Promote-your-salon__change-places-element-1]');
    const promoteYourSalon__changePlacesElement2 = PromoteYourSalon__parentalBlockForChangeElements.querySelector('[Promote-your-salon__change-places-element-2]');
    const takePlace_1 = PromoteYourSalon__parentalBlockForChangeElements.querySelector('.col_1');
    const takePlace_2 = PromoteYourSalon__parentalBlockForChangeElements.querySelector('.col_2');

    takePlace_1.insertBefore(promoteYourSalon__changePlacesElement2, null)
    takePlace_2.insertBefore(promoteYourSalon__changePlacesElement1, null)
}

document.addEventListener('click', (event) => {
    const orderSalonAdvertisingElement = event.target.closest('[data-popup=order-salon-advertising]');
    if(orderSalonAdvertisingElement) {
        const serviceContainer =  orderSalonAdvertisingElement.closest('[data-order-salon-advertising]');
        const serviceName = serviceContainer.querySelector('[data-order-salon-advertising-name]').textContent;
        const popupId = orderSalonAdvertisingElement.dataset.popup;
        const nameInput = document.querySelector(`#${popupId} [name="form_text_16"]`);
        nameInput.value = serviceName;
    }
})
