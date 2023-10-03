<div class="heed-help-widget" data-popup="need-help">
    <img src="/salon_advertising/images/Ellipse%20579.png" alt="">
    <div class="heed-help_text">
        <p class="part_1">Нужна помощь?</p>
        <p class="part_2">Бесплатная консультация</p>
    </div>
</div>
<div class="popup" id="need-help">
    <div class="popup_content default-form">
        <?php
        /** @var CMain $APPLICATION */
        $APPLICATION->IncludeComponent("bitrix:form.result.new", "erosite", array(
                "AJAX_MODE" => "Y",
                'AJAX_OPTION_SHADOW' => 'N',
                "WEB_FORM_ID" => 6,
            )
        ); ?>
    </div>
</div>