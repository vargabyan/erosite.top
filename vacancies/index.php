<?php

/** @var CMain $APPLICATION */

/** @var string $prepositional_city_name */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
require($_SERVER["DOCUMENT_ROOT"]."/breadcrumb/index.php");
$APPLICATION->SetTitle("Лучшие массажистки");

?>

<link rel="stylesheet" href="/css/fonts.css">
<link rel="stylesheet" href="/vacancies/css/vacancies.css">
<link rel="stylesheet" href="/vacancies/css/vacancies_mobil.css">

<div class="container_block maxWidth_1216">

    <?php
    breadcrumb('Салоны');
    ?>

    <div class="header-box">
        <p>
            Вакансии в салоны эротического массажа
            В&nbsp;<?php
            echo $prepositional_city_name ?>
        </p>
    </div>

    <?php
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "vacancies_konline",
        array(
            "IBLOCK_ID" => 55,
            "COMPONENT_TEMPLATE" => "",
            "IBLOCK_TYPE" => "-",
            "NEWS_COUNT" => "2",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",
            "FILTER_NAME" => "",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "PROPERTY_CODE" => array(
                0 => "VACANCY",
                1 => "AGE",
                2 => "PAY_SCHEDULE",
                3 => "WORK_SCHEDULE",
                4 => "EMPLOYMENT",
                5 => "PAY_VALUE",
                6 => "EXPERIENCE",
                7 => 'COMPANY'
            ),
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "36000000",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "SET_TITLE" => "Y",
            "SET_BROWSER_TITLE" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_META_DESCRIPTION" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "STRICT_SECTION_CHECK" => "N",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "PAGER_TEMPLATE" => "konline",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "Вакансии",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "Y",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "SET_STATUS_404" => "N",
            "SHOW_404" => "N",
            "MESSAGE_404" => ""
        ),
        false
    );
    //arrows
    ?>

</div>

<script src="./js/vacancies.js"></script>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>

