const block_SEO_handle = document.querySelector('.block_SEO_handle');
const block_SEO_bottom_box = document.querySelector('.block_SEO_bottom_box');
const block_SEO_handle_span = document.querySelector('.block_SEO_handle_span');
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