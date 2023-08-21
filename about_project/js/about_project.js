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

document.addEventListener('DOMContentLoaded', (e) => {
    const dataReviewsLearnWrapperMore = document.querySelectorAll('[data-reviews-wrapper-learn-more]');

    dataReviewsLearnWrapperMore.forEach((value, index) => {
        const dataReviewsLearnWrapperMore_p_length = dataReviewsLearnWrapperMore[index].querySelector('p').textContent.length;

        if (dataReviewsLearnWrapperMore_p_length < 612) {

            const dataReviewsLearnMore = dataReviewsLearnWrapperMore[index].querySelector('[data-reviews-learn-more]');
            dataReviewsLearnMore.style['display'] = 'none';
        }
    })
})

document.addEventListener('click', (e) => {
    const dataReviewsLearnMore = e.target.closest('[data-reviews-learn-more]');

    if (dataReviewsLearnMore) {
        const dataReviewsLearnWrapperMore = dataReviewsLearnMore.closest('[data-reviews-wrapper-learn-more]');

        dataReviewsLearnWrapperMore.style['height'] = '100%'
        dataReviewsLearnMore.style['display'] = 'none';

        const dataReviewsItemBox = dataReviewsLearnWrapperMore.closest('[data-reviews-item-box]');
        const dataReviewsLearnWrapperMore_height = window.getComputedStyle(dataReviewsLearnWrapperMore).height;

        console.log(dataReviewsLearnWrapperMore_height)

        if ( dataReviewsItemBox.style['height'] !== "100%" ) {

            dataReviewsItemBox.style['height'] = dataReviewsLearnWrapperMore_height;

        }
    }
})

document.addEventListener('click', (e) => {
    const dataReviewsShowMore = e.target.closest('[data-reviews-show-more]');

    if (dataReviewsShowMore) {
        const dataReviewsItemBox = dataReviewsShowMore.closest('.block-reviews').querySelector('[data-reviews-item-box]');
        dataReviewsItemBox.style['height'] = '100%'
        dataReviewsShowMore.style['display'] = 'none';
    }
})
