const js_item_background = document.getElementsByClassName('js_item_background');
const js_item_background_length = js_item_background.length;

for (let i = 0; i < js_item_background_length; i++) {
    if (i % 2 !== 0 ) {

        js_item_background[i].style['background'] = '#F8F8F8';
    }
}

const js_block_container__8_item_bottom_box = document.getElementsByClassName('js_block_container__8_item_bottom_box');
const plus_item = document.getElementsByClassName('plus_item');
const minus_item = document.getElementsByClassName('minus_item');
const js_block_container__8_item_bottom_box_length = document.getElementsByClassName('js_block_container__8_item_bottom_box').length;

for (let i = 0; i < js_block_container__8_item_bottom_box_length; i++) {

    plus_item[i].addEventListener('click', () => {
        js_block_container__8_item_bottom_box[i].style['display'] = 'block';
        minus_item[i].style['display'] = 'block';
        plus_item[i].style['display'] = 'none';
    })
    minus_item[i].addEventListener('click', () => {
        js_block_container__8_item_bottom_box[i].style['display'] = 'none';
        minus_item[i].style['display'] = 'none';
        plus_item[i].style['display'] = 'block';
    })

}

const js_order_advertising = document.getElementsByClassName('js_order_advertising');
const js_order_advertising_length = document.getElementsByClassName('js_order_advertising').length;
const pop_up_order_advertising = document.querySelector('.pop_up_order_advertising');

for (i = 0; i < js_order_advertising_length; i++) {

    js_order_advertising[i].addEventListener('click', () => {

        pop_up_order_advertising.style['display'] = 'flex';
    })
}


