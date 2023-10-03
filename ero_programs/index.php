<?php
/** @var string $prepositional_city_name */

/** @var CMain $APPLICATION */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Лучшие массажистки");
require($_SERVER["DOCUMENT_ROOT"] . "/breadcrumb/index.php");
?>

    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/ero_programs/css/ero_programs.css">
    <link rel="stylesheet" href="/ero_programs/css/ero_programs_mobil.css">

    <div class="container_block maxWidth_1216">

        <?php
        breadcrumb('Салоны');
        ?>

        <div class="header-box">
            <p>Эротические программы в&nbsp;<?php
                echo $prepositional_city_name ?></p>
        </div>

        <div class="header-part-2-box">
            <p>
                <?php
                $APPLICATION->IncludeFile(
                    '/ero_programs/intro_text.php'
                );
                ?>
            </p>
        </div>

        <?php
        /** @var CMain $APPLICATION */
        $APPLICATION->IncludeComponent(
            "bitrix:catalog.smart.filter",
            "programs",
            array(
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "DISPLAY_ELEMENT_COUNT" => "Y",
                "FILTER_NAME" => "performanceProgram",
                "FILTER_VIEW_MODE" => "horizontal",
                "IBLOCK_ID" => "54",
                "IBLOCK_TYPE" => "service",
                "PAGER_PARAMS_NAME" => "performanceProgramPager",
                "PREFILTER_NAME" => "smartPreFilter",
                "SAVE_IN_SESSION" => "N",
                "SECTION_CODE" => "",
                "SECTION_DESCRIPTION" => "-",
                "SECTION_ID" => $_REQUEST["SECTION_ID"],
                "SECTION_TITLE" => "-",
                "SEF_MODE" => "N",
                "TEMPLATE_THEME" => "blue",
                "XML_EXPORT" => "N",
                "SEF_RULE" => "/ero_programs/#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
                "COMPONENT_TEMPLATE" => "programs",
                "POPUP_POSITION" => "left"
            ),
            false
        ); ?>

        <div class="block_showcase">

            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "flat",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "FILTER_NAME" => "performanceProgram",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "54",
                    "IBLOCK_TYPE" => "-",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MEDIA_PROPERTY" => "",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "10",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "konline",
                    "PAGER_TITLE" => "Программы",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "WOR_HWON",
                        1 => "TIME",
                        2 => "PRICE",
                        3 => "",
                    ),
                    "SEARCH_PAGE" => "/search/",
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SLIDER_PROPERTY" => "",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "TEMPLATE_THEME" => "blue",
                    "USE_RATING" => "N",
                    "USE_SHARE" => "N",
                    "COMPONENT_TEMPLATE" => "flat"
                ),
                false
            ); ?>
        </div>
        <div class="block_showcase">

            <?php
            for ($n = 0; $n < 22; $n++) {
                echo '
                <div class="item">
                    <div class="col_1">
                        <p>Название программы</p>
                        <div>';
                for ($i = 0; $i < 5; $i++) {
                    echo '
                                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.3184 26.8121L15.3711 25.4357C15.8876 24.7598 16.1239 23.9109 16.0307 23.0653C15.9374 22.2197 15.522 21.4426 14.8706 20.8955C13.7756 19.9804 13.0253 18.7194 12.7434 17.3205C9.95493 21.3066 11.4028 23.5052 12.7434 25.4536L11.7603 26.8121C9.89344 26.4604 8.21698 25.4448 7.04068 23.9531C5.86439 22.4614 5.26777 20.5943 5.36106 18.6969C5.36106 18.6969 4.98568 14.8359 9.43656 11.0642C9.43656 11.0642 14.4773 6.39886 12.7256 2.94898L13.9947 1.78711C15.9309 3.14476 17.4121 5.05531 18.2445 7.26872C19.077 9.48213 19.2218 11.8953 18.6601 14.1924C19.0839 13.7788 19.4238 13.2871 19.6611 12.7445L21.2162 12.6194C21.3413 12.8339 24.5052 17.8567 22.8071 22.0931C22.2022 23.3565 21.2924 24.4494 20.1596 25.2733C19.0268 26.0971 17.7067 26.626 16.3184 26.8121Z" fill="#DD9E5C"/>
                                        </svg>
                                    ';
                }
                echo '</div>
                    </div>
                    <div class="col_2">
                        <p>
                            Доводящая до предела всех мысленных и не мысленных ощущений программа позволит вам прикоснуться к вершине полной релаксации.
                        </p>
                    </div>
                    <div class="col_3">
                        <p>от <span>2000</span> ₽/час</p>
                        <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 3.69608C11.061 3.69608 9.16549 4.27106 7.55324 5.34833C5.94099 6.42559 4.6844 7.95675 3.94236 9.74819C3.20033 11.5396 3.00618 13.5109 3.38446 15.4127C3.76275 17.3144 4.69649 19.0613 6.06759 20.4324C7.43869 21.8035 9.18557 22.7373 11.0873 23.1155C12.9891 23.4938 14.9604 23.2997 16.7518 22.5576C18.5432 21.8156 20.0744 20.559 21.1517 18.9468C22.2289 17.3345 22.8039 15.439 22.8039 13.5C22.801 10.9007 21.7671 8.40878 19.9292 6.57082C18.0912 4.73287 15.5993 3.69903 13 3.69608ZM13 21.967C11.3254 21.967 9.68836 21.4705 8.29597 20.5401C6.90358 19.6097 5.81834 18.2873 5.17749 16.7402C4.53664 15.193 4.36897 13.4906 4.69567 11.8482C5.02237 10.2057 5.82878 8.69703 7.01291 7.5129C8.19705 6.32876 9.70572 5.52238 11.3482 5.19568C12.9906 4.86898 14.693 5.03664 16.2402 5.67749C17.7873 6.31834 19.1097 7.4036 20.0401 8.796C20.9704 10.1884 21.467 11.8254 21.467 13.5C21.467 15.7456 20.575 17.8992 18.9871 19.4871C17.3992 21.075 15.2456 21.967 13 21.967ZM17.4563 13.0544H13.4456V8.15241C13.4456 7.97512 13.3752 7.8051 13.2499 7.67974C13.1245 7.55438 12.9545 7.48396 12.7772 7.48396C12.5999 7.48396 12.4299 7.55438 12.3045 7.67974C12.1792 7.8051 12.1087 7.97512 12.1087 8.15241V14.3913H17.4563C17.6336 14.3913 17.8036 14.3208 17.929 14.1955C18.0544 14.0701 18.1248 13.9001 18.1248 13.7228C18.1248 13.5455 18.0544 13.3755 17.929 13.2501C17.8036 13.1248 17.6336 13.0544 17.4563 13.0544Z" fill="#DD9E5C"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0002 3.5C15.6514 3.50301 18.1931 4.5575 20.0678 6.43217C21.9425 8.30685 22.997 10.8486 23 13.4998C23 15.4776 22.4135 17.4112 21.3147 19.0557C20.2159 20.7002 18.6541 21.9819 16.8268 22.7388C14.9996 23.4957 12.9889 23.6937 11.0491 23.3079C9.10929 22.922 7.32747 21.9696 5.92894 20.5711C4.53042 19.1726 3.578 17.3907 3.19215 15.4509C2.8063 13.5111 3.00433 11.5004 3.76121 9.67315C4.51808 7.84589 5.79981 6.28411 7.4443 5.18529C9.0888 4.08648 11.0224 3.5 13.0002 3.5ZM12.1087 14.3913V8.15241C12.1087 7.97512 12.1792 7.8051 12.3045 7.67974C12.4299 7.55438 12.5999 7.48396 12.7772 7.48396C12.9545 7.48396 13.1245 7.55438 13.2499 7.67974C13.3752 7.8051 13.4456 7.97512 13.4456 8.15241V13.0544H17.4563C17.6336 13.0544 17.8036 13.1248 17.929 13.2501C18.0544 13.3755 18.1248 13.5455 18.1248 13.7228C18.1248 13.9001 18.0544 14.0701 17.929 14.1955C17.8036 14.3208 17.6336 14.3913 17.4563 14.3913H12.1087ZM13.6417 12.8583H17.4563C17.6856 12.8583 17.9055 12.9494 18.0676 13.1115C18.2298 13.2736 18.3209 13.4935 18.3209 13.7228C18.3209 13.9521 18.2298 14.172 18.0676 14.3341C17.9055 14.4963 17.6856 14.5873 17.4563 14.5873H11.9127V8.15241C11.9127 7.92312 12.0037 7.70322 12.1659 7.54109C12.328 7.37896 12.5479 7.28788 12.7772 7.28788C13.0065 7.28788 13.2264 7.37896 13.3885 7.54109C13.5506 7.70322 13.6417 7.92312 13.6417 8.15241V12.8583ZM22.8039 13.5C22.8039 15.439 22.2289 17.3345 21.1517 18.9468C20.0744 20.559 18.5432 21.8156 16.7518 22.5576C14.9604 23.2997 12.9891 23.4938 11.0873 23.1155C9.18557 22.7373 7.43869 21.8035 6.06759 20.4324C4.69649 19.0613 3.76275 17.3144 3.38446 15.4127C3.00618 13.5109 3.20033 11.5396 3.94236 9.74819C4.6844 7.95675 5.94099 6.42559 7.55324 5.34833C9.16549 4.27106 11.061 3.69608 13 3.69608C15.5993 3.69903 18.0912 4.73287 19.9292 6.57082C21.7671 8.40878 22.801 10.9007 22.8039 13.5ZM8.40491 20.3771C9.76505 21.2859 11.3642 21.7709 13 21.7709C15.1936 21.7709 17.2973 20.8996 18.8484 19.3485C20.3995 17.7974 21.2709 15.6936 21.2709 13.5C21.2709 11.8642 20.7859 10.2651 19.877 8.90493C18.9682 7.54478 17.6765 6.48465 16.1652 5.85864C14.6538 5.23264 12.9908 5.06886 11.3864 5.38799C9.78201 5.70713 8.30827 6.49483 7.15156 7.65155C5.99485 8.80826 5.20712 10.282 4.88798 11.8864C4.56885 13.4908 4.73264 15.1538 5.35865 16.6652C5.98465 18.1765 7.04476 19.4682 8.40491 20.3771ZM8.29597 20.5401C9.68836 21.4705 11.3254 21.967 13 21.967C15.2456 21.967 17.3992 21.075 18.9871 19.4871C20.575 17.8992 21.467 15.7456 21.467 13.5C21.467 11.8254 20.9704 10.1884 20.0401 8.796C19.1097 7.4036 17.7873 6.31834 16.2402 5.67749C14.693 5.03664 12.9906 4.86898 11.3482 5.19568C9.70572 5.52238 8.19705 6.32876 7.01291 7.5129C5.82878 8.69703 5.02237 10.2057 4.69567 11.8482C4.36897 13.4906 4.53664 15.193 5.17749 16.7402C5.81834 18.2873 6.90358 19.6097 8.29597 20.5401Z" fill="#DD9E5C"/>
                        </svg>
                        <p>1 час</p>
                    </div>
                    <div class="col_4">
                        <a href="#">Подробнее</a>
                    </div>
                </div>';
            }
            ?>


        </div>

        <div class="block_button_more">
            <div class="opacity-box"></div>
            <a href="#">
                <P>Загрузить ещё <span>40</span></P>
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M7 13C7 12.4869 7.41597 12.0709 7.9291 12.0709H13H18.0709C18.584 12.0709 19 12.4869 19 13C19 13.5131 18.584 13.9291 18.0709 13.9291H7.9291C7.41597 13.9291 7 13.5131 7 13Z"
                          fill="#D2D2D2"/>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.0002 7C13.5134 7 13.9293 7.41597 13.9293 7.9291V18.0709C13.9293 18.584 13.5134 19 13.0002 19C12.4871 19 12.0711 18.584 12.0711 18.0709V7.9291C12.0711 7.41597 12.4871 7 13.0002 7Z"
                          fill="#D2D2D2"/>
                </svg>
            </a>
        </div>

        <div class="block_pagination">

            <div class="pagination_swiper-button-prev pagination_button">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.4688 3.8047C8.72915 3.54435 8.72915 3.12224 8.4688 2.86189C8.20845 2.60154 7.78634 2.60154 7.52599 2.86189L2.85932 7.52855C2.59898 7.7889 2.59898 8.21101 2.85932 8.47136L7.52599 13.138C7.78634 13.3984 8.20845 13.3984 8.4688 13.138C8.72915 12.8777 8.72915 12.4556 8.4688 12.1952L4.94021 8.66663H12.6641C13.0323 8.66663 13.3307 8.36815 13.3307 7.99996C13.3307 7.63177 13.0323 7.33329 12.6641 7.33329H4.9402L8.4688 3.8047Z"
                          fill="#DADADA"/>
                </svg>
                <p>Назад</p>
            </div>
            <div class="pagination_swiper_box">
                <div class="pagination_swiper">
                    <div class="swiper-wrapper">
                        <?php
                        for ($i = 1; $i <= 30; $i++) {
                            $currentPage = $_GET['page'];
                            $active = isset($currentPage) && $currentPage == $i ? ' pagination_item_active' : '';

                            echo '
                                    <div class="swiper-slide">
                                        <a class="pagination_button_page' . $active . '" href="?page=' . $i . '">
                                        ' .
                                $i
                                . '
                                        </a>
                                    </div>
                                ';
                        }
                        ?>
                    </div>
                </div>
                <div class="more_page pagination_button_page"><a class="pagination_button_page" href="#">...</a></div>
                <div class="max_value_pages pagination_button_page"><a class="pagination_button_page" href="#">30</a>
                </div>
            </div>
            <div class="pagination_swiper-button-next pagination_button">
                <p>Вперед</p>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M8.4688 2.86189C8.20845 2.60154 7.78634 2.60154 7.52599 2.86189C7.26564 3.12224 7.26564 3.54435 7.52599 3.8047L11.0546 7.33329H3.33073C2.96254 7.33329 2.66406 7.63177 2.66406 7.99996C2.66406 8.36815 2.96254 8.66663 3.33073 8.66663H11.0546L7.52599 12.1952C7.26564 12.4556 7.26564 12.8777 7.52599 13.138C7.78634 13.3984 8.20845 13.3984 8.4688 13.138L13.1355 8.47136C13.3958 8.21101 13.3958 7.7889 13.1355 7.52855L8.4688 2.86189Z"
                          fill="white"/>
                </svg>
            </div>

        </div>

        <div class="block_SEO">

            <p class="top_box">Заголовок SEO текст</p>

            <div class="bottom_box block_SEO_bottom_box">
                Добро пожаловать в нашу уникальную студию эротического массажа, где мы создаем незабываемые впечатления
                и помогаем вам насладиться полной релаксацией и удовольствием. Наша команда опытных массажисток с
                горячими телами и нежными руками предлагает вам самые чувственные и эротические сеансы массажа.
                <br>
                Мы понимаем важность вашего комфорта и конфиденциальности. Поэтому наша студия создана в уютном и
                безопасном месте, где вы сможете отключиться от суеты и насладиться интимным и расслабляющим опытом.
                Наши массажистки владеют различными техниками массажа, которые позволят вам ощутить глубокое
                расслабление, освободиться от напряжения и открыть новые грани своей сексуальности.
                Мы предлагаем широкий спектр услуг, включая классический эротический массаж, тайский массаж, нуро-массаж
                и многое другое. Каждая сессия массажа индивидуально настраивается под ваши предпочтения и желания,
                чтобы обеспечить вам максимальное удовольствие и релаксацию.
                Наша студия эротического массажа открыта для мужчин, женщин и пар. Мы ценим и уважаем всех наших
                клиентов, независимо от их пола, ориентации и предпочтений. Ваше благополучие и полное удовлетворение -
                наш главный приоритет.
                Запишитесь на сеанс массажа уже сегодня и позвольте нам позаботиться о вашем теле, разуме и душе. Наша
                студия эротического массажа готова предложить вам незабываемый опыт, который оставит вас восторженными и
                желающими возвращаться снова и снова.
                <div class="block_SEO_handle_span">
                    <p>&#8230;</p>
                    <button>показать больше</button>
                </div>
            </div>

            <div class="button_box">
                <button class="block_SEO_handle">показать больше</button>
            </div>

        </div>

    </div>


    <script src="./js/ero_programs.js"></script>


<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");