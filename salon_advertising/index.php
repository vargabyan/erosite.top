<?php

use Konline\SalonAdvertisingServices;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$advertisingServices = SalonAdvertisingServices::getAdvertisingServices();
/** @var CMain $APPLICATION */
$APPLICATION->SetTitle("Реклама салонов");
require($_SERVER["DOCUMENT_ROOT"]."/breadcrumb/index.php");


?>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/salon_advertising/css/salon_advertising_styles.css">
    <link rel="stylesheet" href="/salon_advertising/css/salon_advertising_mobil.css">

    <div class="max-width-1216">

        <?php
        breadcrumb('Реклама салонов');
        ?>

        <div class="block_container__1">

            <div class="top_box">
                <div class="col_1">
                    <p class="part_1">Продвигайте свой салон</p>
                    <h1 class="part_2">Реклама салонов</h1>
                    <p class="part_3"><?php
                        $APPLICATION->IncludeFile(
                            '/salon_advertising/top_text.php'
                        );
                        ?></p>
                </div>
                <div class="col_2">
                    <a class="part_1" data-popup="order-advertising">Заказать рекламу</a>
                    <div class="popup" id="order-advertising">
                        <div class="popup_content default-form">
                            <?php
                            $APPLICATION->IncludeComponent("bitrix:form.result.new", "erosite", array(
                                    "AJAX_MODE" => "Y",
                                    'AJAX_OPTION_SHADOW' => 'N',
                                    "WEB_FORM_ID" => 5,
                                )
                            ); ?>
                        </div>
                    </div>
                    <a class="part_2" data-popup="user-registration">+ Зарегистрировать салон</a>
                </div>
            </div>
            <?php
            $APPLICATION->IncludeFile(
                '/salon_advertising/advantages.php'
            );
            ?>
        </div>
        <?php
        $APPLICATION->IncludeFile(
            '/salon_advertising/how_to_raise_a_profile_salon.php'
        );
        ?>
        <?php
        $APPLICATION->IncludeFile(
            '/salon_advertising/promote_your_masters.php'
        );
        ?>
        <div class="block_container__4">

            <p>Эфективность рекламы</p>

            <?php

            $APPLICATION->IncludeFile(
                '/salon_advertising/advertising_effectiveness.php'
            );
            ?>

        </div>

        <div class="block_container__5">

            <p>Статистика</p>

            <?php

            $APPLICATION->IncludeFile(
                '/salon_advertising/statistic.php'
            );
            ?>

        </div>

        <div class="block_container__6">
            <div class="top_box">
                <p>Выгодные тарифы услуг</p>
                <?php
                $APPLICATION->IncludeFile(
                    '/salon_advertising/need_help.php'
                );
                ?>
            </div>

            <div class="bottom_box">
                <?php

                $APPLICATION->IncludeFile(
                    '/salon_advertising/tariff_start.php'
                );

                $APPLICATION->IncludeFile(
                    '/salon_advertising/tariff_optimum.php'
                );

                $APPLICATION->IncludeFile(
                    '/salon_advertising/tariff_custom.php'
                );
                ?>
            </div>
        </div>
        <div class="block_container__7 services">
            <p>Все услуги</p>
            <div data-tabs-block class="services-tabs">

                <div data-panes class="top_box">
                    <?php
                    $advertisingServicesCounter = 0;
                    foreach ($advertisingServices as $serviceTimeType) { ?>
                        <a data-pane class="part_1 services-tab <?php
                        echo $advertisingServicesCounter === 0 ? 'active' : '' ?>"><?php
                            echo $serviceTimeType['name'] ?></a>
                        <?php
                        $advertisingServicesCounter++;
                    } ?>
                </div>

                <div data-containers>
                    <?php
                    $advertisingServicesCounter = 0;
                    foreach ($advertisingServices as $serviceTimeType) { ?>
                        <div data-container class="bottom_box <?php
                        echo $advertisingServicesCounter === 0 ? 'active' : '' ?>">
                            <div class="header_box">
                                <p class="part_1">Название услуги</p>
                                <p class="part_2">Цена</p>
                            </div>
                            <div></div>

                            <?php
                            foreach ($serviceTimeType['services'] as $service ) { ?>
                                <div class="item js_item_background" data-order-salon-advertising>
                                    <div>
                                        <p class="part_1" data-order-salon-advertising-name><?php echo $service['NAME']?></p>
                                        <p class="part_2"><?php echo number_format($service['PROPERTY_PRICE_VALUE'], 0, ',', ' ')?> ₽</p>
                                    </div>
                                    <a data-popup="order-salon-advertising">Заказать</a>
                                </div>
                                <?php
                            } ?>
                        </div>
                        <?php
                        $advertisingServicesCounter++;
                    } ?>
                </div>

                <div class="popup" id="order-salon-advertising">
                    <div class="popup_content default-form">
                <?php
                $APPLICATION->IncludeComponent("bitrix:form.result.new", "erosite", array(
                        "AJAX_MODE" => "Y",
                        'AJAX_OPTION_SHADOW' => 'N',
                        "WEB_FORM_ID" => 7,
                    )
                ); ?>
                    </div>
                </div>


            </div>
        </div>

        <div class="block_container__8">

            <p>Частые вопросы</p>

            <div>

                <?php
                for ($i = 0; $i < 4; $i++) {
                    echo '
                        <div class="item">
                            <div class="top_box">
                                <p>Вопрос</p>
                                <div>
                                    <svg class="plus_item" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 12.998H13V18.998H11V12.998H5V10.998H11V4.998H13V10.998H19V12.998Z" fill="#231A23"/>
                                    </svg>
                                    <svg class="minus_item" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19 12.998H13H11H5V10.998H11H13H19V12.998Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="bottom_box js_block_container__8_item_bottom_box">
                                <p class="part_1">
                                    Вы можете сами управлять своей анкетой в личном кабинете. Включать и выключать ее хоть каждый день, а так же изменять основную информацию в ней!
                                </p>
                                <p class="part_1">
                                    Разместите анкету всего на не сколько дней, что бы убедится в эффективности
                                </p>
                            </div>
                        </div>
                    ';
                }
                ?>

            </div>

        </div>

        <div class="block_container__9">

            <div>
                <p>
                    Начни получать клиентов
                    с эросайта уже сейчас
                </p>

                <div>
                    <a class="part_1" href="#">Заказать рекламу</a>
                    <a class="part_2" href="#">
                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.632812 6.98909C0.632812 6.47035 1.05334 6.04983 1.57208 6.04983H6.69844H11.8248C12.3435 6.04983 12.7641 6.47035 12.7641 6.98909C12.7641 7.50784 12.3435 7.92836 11.8248 7.92836H1.57208C1.05334 7.92836 0.632812 7.50784 0.632812 6.98909Z"
                                  fill="#231A23"/>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.69868 0.923462C7.21742 0.923462 7.63795 1.34399 7.63795 1.86273V12.1155C7.63795 12.6342 7.21742 13.0547 6.69868 13.0547C6.17994 13.0547 5.75941 12.6342 5.75941 12.1155V1.86273C5.75941 1.34399 6.17994 0.923462 6.69868 0.923462Z"
                                  fill="#231A23"/>
                        </svg>
                        <p>Зарегистрировать салон</p>
                    </a>
                </div>
            </div>

        </div>

    </div>

    <script src="./scripts.js"></script>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
