<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вы ищите салон для массажа?");
global $city_code;
?>
<div class="gray_bg mt_16">
        <div class="container ">
            <div class="content_with_right_sidebar">

<div class="content_block">
<h1>Удобный поиск салонов массажа</h1>                   
<p>Цель нашего каталога салонов эротического массажа и релакс услуг – собрать лучшие, проверенные места отдыха для людей с разными интересами и потребностями. Самая актуальная информация о салонах, реальные отзывы постоянных клиентов, фотографии интерьера и экстерьера позволяют подобрать салон эротического массажа по Вашим желаниям. 
<p><b>Выберите раздел сайта в соответствие с вашими желаниями!</b>


                <div class="service_list_wrap">
                    <div class="service_item s1">
                        <a href="/promo/otdykh-dlya-muzhchin/"></a>
                        <div class="service_item_title">Отдых<br>для мужчин<br><img alt="Отдых для мужчин" title="Отдых для мужчин" src="<?=SITE_TEMPLATE_PATH;?>/img/strelka_vidi_massaga.svg"></div>
                    </div>
                    <div class="service_item s2">
                        <a href="/promo/otdykh-dlya-devushek/"></a>
                        <div class="service_item_title">Отдых<br>для девушек<br><img alt="Отдых для девушек" title="Отдых для девушек" src="<?=SITE_TEMPLATE_PATH;?>/img/strelka_vidi_massaga.svg"></div>
                    </div>
                    <div class="service_item big">
                       <div class="service_item s3">
                            <a href="/promo/vidy-massazha/"></a>
                            <div class="service_item_title">Виды массажа<br><img alt="Виды массажа" title="Виды массажа" src="<?=SITE_TEMPLATE_PATH;?>/img/strelka_vidi_massaga.svg"></div>
                        </div>
                        <div class="service_item s4">
                            <a href="/promo/dopolnitelnye-uslugi/"></a>
                            <div class="service_item_title">Дополнительные услуги<br><img alt="Дополнительные услуги" title="Дополнительные услуги" src="<?=SITE_TEMPLATE_PATH;?>/img/strelka_vidi_massaga.svg"></div>
                        </div>
                    </div>
                </div>


<h2>Эрокарта – быстрый поиск салона рядом с Вами.</h2>
<p>Хотите найти салон массажа рядом с Вами? Мы предоставляем возможность каждому посетителю нашего сайта воспользоваться поиском салона на карте. При включенной геолокации на Вашем устройстве, мы покажем Вам ближайший салон, режим его работы, точный адрес и телефон. 



<h2>Частные анкеты</h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"all_girl_home", 
	array(
		"ACTION_VARIABLE" => "action",
		"ELEMENT_COUNT" => "24",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "/personal/basket.php",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "Y",
		"DETAIL_URL" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "HAS_PREVIEW_PICTURE",
		"ELEMENT_SORT_FIELD2" => "RAND",
		"ELEMENT_SORT_ORDER" => "desc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"ENLARGE_PRODUCT" => "STRICT",
		"FILTER_NAME" => "",
		"IBLOCK_ID" => "39",
		"IBLOCK_TYPE" => "girls",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "",
		"LAZY_LOAD" => "N",
		"LINE_ELEMENT_COUNT" => "3",
		"LOAD_ON_SCROLL" => "N",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_LIMIT" => "5",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "24",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"PROPERTY_CODE" => array(
			"FOTO",
		),
		"PROPERTY_CODE_MOBILE" => "",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"RCM_TYPE" => "personal",
		"SECTION_CODE" => $city_code,
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_FROM_SECTION" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SLIDER" => "Y",
		"SLIDER_INTERVAL" => "3000",
		"SLIDER_PROGRESS" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"COMPONENT_TEMPLATE" => "all_girl_home"
	),
	false
);?>
<p>Помимо салонов массажа на нашем сайте вы найдете частные анкеты массажисток, чтобы найти девушку предоставляющую услугу эротического массажа в вашем городе перейдите в раздел «<a href="/private/<?=$city_code;?>/">частные анкеты</a>»


<h3>Как посмотреть скрытые фото?</h3>
<quote>
	Важно: Соблюдения законодательства РФ является приоритетным для нас. Поэтому на сайте присутствуют скрытые фотографии девушек (предназначенные для пользователей 18+). Чтобы посмотреть скрытые контент Вам необходимо зарегистрироваться на нашем сайте.
</quote>

<h3>Воспользуйтесь всеми возможностями нашего каталога!</h3>

<a href="" class="button1">Регистрация</a>
<br><br>

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
        <style>
        	.all_girls_block .all_girls_item{
        		width: 60px
        	}
        	.all_girls_block .all_girls_item .img_box{
        		width: 60px;
        		height: 60px;
        	}
        </style>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>