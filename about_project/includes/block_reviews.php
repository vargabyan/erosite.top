<?php


?>


<div class="block-reviews">

    <p>Свежие отзывы на сайте</p>

    <div class="item_box" data-reviews-item-box>
        <?php
        foreach (Reviews::getAll() as $review) {
            ?>
            <div class="item" data-id="<?php echo $review['ID']?>">
                <div class="top_box">
                    <?php
                    for ($i = 0; $i < 5; $i++) { ?>
                        <?php
                        if ($i < $review['PROPERTY_RATING_VALUE']) { ?>
                            <div class="icon-star-active"></div>
                            <?php
                        } else { ?>
                            <div class="icon-star-not-active"></div>
                            <?php
                        } ?>
                        <?php
                    } ?>
                </div>
                <div class="bottom_box" data-reviews-wrapper-learn-more>
                    <p><?php
                        echo $review['PREVIEW_TEXT'] ?><span data-reviews-learn-more>Читать далее</span>
                    </p>
                </div>
            </div>
            <?php
        } ?>
    </div>
    <button data-reviews-show-more>
        <p>Показать ещё</p>
        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M7 13C7 12.4869 7.41597 12.0709 7.9291 12.0709H13H18.0709C18.584 12.0709 19 12.4869 19 13C19 13.5131 18.584 13.9291 18.0709 13.9291H7.9291C7.41597 13.9291 7 13.5131 7 13Z"
                  fill="#D2D2D2"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M13.0002 7C13.5134 7 13.9293 7.41597 13.9293 7.9291V18.0709C13.9293 18.584 13.5134 19 13.0002 19C12.4871 19 12.0711 18.584 12.0711 18.0709V7.9291C12.0711 7.41597 12.4871 7 13.0002 7Z"
                  fill="#D2D2D2"/>
        </svg>
    </button>

</div>