<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Эросайт | О портале");
$APPLICATION->SetTitle("О портале");
global $city_code;
?>
<div class="gray_bg mt_16">
        <div class="container ">
            <div class="content_with_right_sidebar">

                    <?/*$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"about_page", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "ID",
			2 => "CODE",
			3 => "XML_ID",
			4 => "NAME",
			5 => "TAGS",
			6 => "SORT",
			7 => "PREVIEW_TEXT",
			8 => "PREVIEW_PICTURE",
			9 => "DETAIL_TEXT",
			10 => "DETAIL_PICTURE",
			11 => "DATE_ACTIVE_FROM",
			12 => "ACTIVE_FROM",
			13 => "DATE_ACTIVE_TO",
			14 => "ACTIVE_TO",
			15 => "SHOW_COUNTER",
			16 => "SHOW_COUNTER_START",
			17 => "IBLOCK_TYPE_ID",
			18 => "IBLOCK_ID",
			19 => "IBLOCK_CODE",
			20 => "IBLOCK_NAME",
			21 => "IBLOCK_EXTERNAL_ID",
			22 => "DATE_CREATE",
			23 => "CREATED_BY",
			24 => "CREATED_USER_NAME",
			25 => "TIMESTAMP_X",
			26 => "MODIFIED_BY",
			27 => "USER_NAME",
			28 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "48",
		"IBLOCK_TYPE" => "service",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/about/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "about_page",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);*/?>
<div class="content_block">
                    

					<div class="promo_banner  promo_about" style="background-image: url('/upload/iblock/91b/91b984423fa10d7f15d9f0f1c92cad66.jpg')">
                        <h2 class="title">Вы владелец салона эротического массажа?</h2>
                        <div class="desc">
                        	<ul>
                        		<li>У нас вы получите постоянный поток трафика</li>
                        		<li>Мы всегда топе поисковых систем</li>
                        		<li>Вы будете БЕСПЛАТНО получать советы,<br>как увеличить кол-во клиентов</li>
                        	</ul>                        </div>
                        <a href="/about/for_salon/" class="button1">Подробнее</a>
                    </div>
                    <div class="small_mob_show line_about"></div>
					<div class="promo_banner  promo_about" style="background-image: url('/upload/iblock/407/40788574593daec2281230062cd04147.jpg')">
                        <h2 class="title">Вы ищите салон для массажа?</h2>
                        <div class="desc">
                        	<ul>
                        		<li>Лучшие салоны эротического массажа по всей России</li>
                        		<li>Актуальные, подтвержденные фотографии частных массажисток</li>
                        		<li>Отзывы реальных клиентов, проверенные нами!</li>
                        	</ul>                        </div>
                        <a href="/about/for_users/" class="button1">Подробнее</a>
                    </div>
                    <div class="small_mob_show line_about"></div>
					<div class="promo_banner  promo_about" style="background-image: url('/upload/iblock/239/23951f98d5b9ef12ef95f08802a1d14b.jpg')">
                        <h2 class="title">А так же, если Вы зарегистриуетесь, то сможете</h2>
                        <div class="desc">
                        	<ul>
                        		<li>Видеть фото 18+</li>
                        		<li>Общаться напрямую<br>с массажистками через сообщения</li>
                        		<li>Получать выгодные предложения<br>
и скидки на услуги салонов</li>
                        	</ul>                        </div>
                        <a href="/profile/register.php" class="button1">Регистрация</a>
                    </div>
                    <div class="small_mob_show line_about"></div>



                </div>
<?$APPLICATION->IncludeComponent(
  "bitrix:main.include",
  "",
  Array(
    "AREA_FILE_SHOW" => "file",
    "AREA_FILE_SUFFIX" => "inc",
    "EDIT_TEMPLATE" => "",
    "PATH" => SITE_TEMPLATE_PATH."/inc/right_sb.php"
  )
);?>
            </div>
        </div>
        </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>