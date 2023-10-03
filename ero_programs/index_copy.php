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
    );?>

    <div class="block-filter">
        <div class="item_1">
            <div class="top_col">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2784_31384)">
                        <path d="M15.7712 0V1.22449H17.1524L14.4578 3.77952C13.5038 2.80336 12.1737 2.19633 10.7042 2.19633C8.72754 2.19633 7.00269 3.29445 6.10707 4.91254C6.03036 4.90917 5.95324 4.90715 5.87567 4.90715C2.98043 4.90715 0.625 7.26257 0.625 10.1579C0.625 12.846 2.65562 15.0684 5.26339 15.3726V16.9999H3.43031V18.2244H5.26348V20H6.48797V18.2243H8.40113V16.9998H6.48797V15.3726C8.20468 15.1723 9.67109 14.1409 10.4729 12.6923C10.5496 12.6956 10.6266 12.6976 10.7042 12.6976C13.5994 12.6976 15.9549 10.3422 15.9549 7.44699C15.9549 6.46313 15.6827 5.54176 15.2099 4.75386L18.1364 1.97895V3.49976H19.3609V0H15.7712ZM5.87574 14.184C3.65571 14.184 1.84957 12.3778 1.84957 10.1578C1.84957 8.02421 3.51773 6.27332 5.61821 6.14007C5.51075 6.55805 5.45356 6.99594 5.45356 7.44699C5.45356 9.80886 7.02121 11.8113 9.17062 12.4689C8.44148 13.5054 7.23644 14.184 5.87574 14.184ZM9.72129 11.3516C7.97484 10.9117 6.67808 9.32805 6.67808 7.44699C6.67808 7.03153 6.74137 6.63055 6.85874 6.2532C8.60519 6.69305 9.90196 8.27676 9.90196 10.1578C9.90196 10.5733 9.83863 10.9742 9.72129 11.3516ZM10.9618 11.4646C11.0693 11.0467 11.1264 10.6088 11.1264 10.1578C11.1264 7.7959 9.55879 5.79348 7.40942 5.13578C8.13856 4.09938 9.34363 3.42074 10.7043 3.42074C12.9244 3.42074 14.7306 5.22688 14.7306 7.44695C14.7304 9.58051 13.0623 11.3314 10.9618 11.4646Z" fill="#DD9E5C"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_2784_31384">
                            <rect width="20" height="20" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <p>Для кого</p>
            </div>

            <div class="bottom_col">
                <a class="part-1" href="#">
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.8185 3.56055H13.3933C13.3222 3.56055 13.2641 3.61867 13.2641 3.68972V4.89532C13.2641 4.96637 13.3222 5.02449 13.3933 5.02449H16.8465L12.5558 9.31515C11.4794 8.4863 10.1662 8.0385 8.78617 8.0385C7.13062 8.0385 5.57195 8.68436 4.40295 9.85552C3.23395 11.0267 2.58594 12.5832 2.58594 14.2388C2.58594 15.8943 3.23179 17.453 4.40295 18.622C5.57195 19.7931 7.13062 20.439 8.78617 20.439C10.4417 20.439 12.0004 19.7931 13.1694 18.622C14.3405 17.453 14.9864 15.8943 14.9864 14.2388C14.9864 12.8588 14.5386 11.5498 13.7119 10.4734L18.0004 6.18489V9.63162C18.0004 9.70267 18.0585 9.76079 18.1296 9.76079H19.3352C19.4062 9.76079 19.4643 9.70267 19.4643 9.63162V4.20641C19.4643 3.85118 19.1737 3.56055 18.8185 3.56055ZM8.78617 18.8028C6.26948 18.8028 4.22211 16.7554 4.22211 14.2388C4.22211 11.7221 6.26948 9.67468 8.78617 9.67468C11.3029 9.67468 13.3502 11.7221 13.3502 14.2388C13.3502 16.7554 11.3029 18.8028 8.78617 18.8028Z" fill="white"/>
                    </svg>
                    <p>Мужчинам</p>
                </a>
                <a class="part-2" href="#">
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.2339 12.7174C17.3879 11.5634 18.0251 10.0263 18.0251 8.39441C18.0251 6.76038 17.39 5.22539 16.2339 4.07146C15.08 2.91752 13.5429 2.28027 11.911 2.28027C10.2791 2.28027 8.74199 2.91537 7.58805 4.07146C6.43412 5.22754 5.79688 6.76038 5.79688 8.39441C5.79688 9.76793 6.24682 11.0726 7.07567 12.1382C7.23283 12.3406 7.40291 12.5322 7.5859 12.7174C7.76889 12.9003 7.96265 13.0704 8.16287 13.2276C9.0154 13.8907 10.0208 14.3126 11.0929 14.4547V16.7475H8.63865C8.54392 16.7475 8.46642 16.825 8.46642 16.9197V18.2115C8.46642 18.3062 8.54392 18.3837 8.63865 18.3837H11.0929V21.3977C11.0929 21.4924 11.1704 21.5699 11.2651 21.5699H12.5569C12.6516 21.5699 12.7291 21.4924 12.7291 21.3977V18.3837H15.1833C15.2781 18.3837 15.3556 18.3062 15.3556 18.2115V16.9197C15.3556 16.825 15.2781 16.7475 15.1833 16.7475H12.7291V14.4547C14.0531 14.2782 15.2738 13.6775 16.2339 12.7174ZM11.911 12.8724C10.714 12.8724 9.59236 12.4073 8.74414 11.5613C7.89806 10.7152 7.43305 9.5914 7.43305 8.39441C7.43305 7.19741 7.89806 6.07577 8.74414 5.22754C9.59021 4.37932 10.714 3.91645 11.911 3.91645C13.108 3.91645 14.2296 4.38147 15.0778 5.22754C15.9239 6.07362 16.3889 7.19741 16.3889 8.39441C16.3889 9.5914 15.9239 10.713 15.0778 11.5613C14.2296 12.4073 13.108 12.8724 11.911 12.8724Z" fill="white"/>
                    </svg>
                    <p>Женщинам</p>
                </a>
                <a class="part-3" href="#">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2784_31400)">
                            <path d="M16.5237 0V1.22449H17.9244L15.1918 3.77952C14.2244 2.80336 12.8755 2.19633 11.3853 2.19633C9.38081 2.19633 7.63165 3.29445 6.7234 4.91254C6.6456 4.90917 6.5674 4.90715 6.48874 4.90715C3.55269 4.90715 1.16406 7.26257 1.16406 10.1579C1.16406 12.846 3.2233 15.0684 5.86783 15.3726V16.9999H4.00891V18.2244H5.86792V20H7.10967V18.2243H9.04979V16.9998H7.10967V15.3726C8.85057 15.1723 10.3377 14.1409 11.1507 12.6923C11.2285 12.6956 11.3067 12.6976 11.3853 12.6976C14.3214 12.6976 16.7101 10.3422 16.7101 7.44699C16.7101 6.46313 16.434 5.54176 15.9546 4.75386L18.9223 1.97895V3.49976H20.1641V0H16.5237ZM6.48881 14.184C4.23749 14.184 2.40589 12.3778 2.40589 10.1578C2.40589 8.02421 4.09757 6.27332 6.22765 6.14007C6.11867 6.55805 6.06067 6.99594 6.06067 7.44699C6.06067 9.80886 7.65042 11.8113 9.83013 12.4689C9.09071 13.5054 7.86869 14.184 6.48881 14.184ZM10.3886 11.3516C8.6175 10.9117 7.30246 9.32805 7.30246 7.44699C7.30246 7.03153 7.36664 6.63055 7.48567 6.2532C9.25673 6.69305 10.5718 8.27676 10.5718 10.1578C10.5718 10.5733 10.5076 10.9742 10.3886 11.3516ZM11.6465 11.4646C11.7555 11.0467 11.8135 10.6088 11.8135 10.1578C11.8135 7.7959 10.2238 5.79348 8.0441 5.13578C8.78352 4.09938 10.0056 3.42074 11.3854 3.42074C13.6368 3.42074 15.4684 5.22688 15.4684 7.44695C15.4683 9.58051 13.7767 11.3314 11.6465 11.4646Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2784_31400">
                                <rect width="20" height="20" fill="white" transform="translate(0.164062)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <p>Парам</p>
                </a>
            </div>
        </div>

        <div class="item_3">
            <p>Стоимость программы</p>
            <div>
                <label>
                    от
                    <input type="text" placeholder="1200">
                </label>
                <svg width="17" height="2" viewBox="0 0 17 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.203125 0.248H16.2031V1.064H0.203125V0.248Z" fill="#BEBEBE"/>
                </svg>
                <label>
                    до
                    <input type="text" placeholder="10000">
                    руб
                </label>
            </div>
        </div>

        <div class="item_4">
            <div class="col_1">
                <p>Продолжительность</p>
                <select name="" id="">
                    <option>Любая</option>
                </select>
            </div>
            <div class="col_2">
                <p>Сортировать</p>
                <div>
                    <p>Популярное</p>
                    <svg width="2" height="18" viewBox="0 0 2 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.707031 0V18" stroke="#DADADA"/>
                    </svg>
                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.47656 10.2218C3.47656 9.95186 3.75389 9.73307 4.096 9.73307H11.0536C11.3957 9.73307 11.673 9.95186 11.673 10.2218C11.673 10.4917 11.3957 10.7104 11.0536 10.7104H4.096C3.75389 10.7104 3.47656 10.4917 3.47656 10.2218Z" fill="#BEBEBE"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.47656 12.6652C3.47656 12.3953 3.75389 12.1765 4.096 12.1765L14.6264 12.1765C14.9685 12.1765 15.2458 12.3953 15.2458 12.6652C15.2458 12.9351 14.9685 13.1539 14.6264 13.1539L4.096 13.1539C3.75389 13.1539 3.47656 12.9351 3.47656 12.6652Z" fill="#BEBEBE"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.47656 7.77832C3.47656 7.50842 3.75389 7.28963 4.096 7.28963L9.26716 7.28963C9.60926 7.28963 9.88659 7.50842 9.88659 7.77832C9.88659 8.04821 9.60926 8.26701 9.26716 8.26701H4.096C3.75389 8.26701 3.47656 8.04821 3.47656 7.77832Z" fill="#BEBEBE"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.47656 5.33488C3.47656 5.06498 3.75389 4.84619 4.096 4.84619L7.30562 4.84619C7.64772 4.84619 7.92505 5.06498 7.92505 5.33488C7.92505 5.60477 7.64772 5.82357 7.30562 5.82357L4.096 5.82357C3.75389 5.82357 3.47656 5.60477 3.47656 5.33488Z" fill="#BEBEBE"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden_block_button_filter">
        <a class="part-1" href="#">
            <p>Фильтр</p>
            <svg width="2" height="19" viewBox="0 0 2 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 0.5V18.5" stroke="#DADADA"/>
            </svg>
            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1843_26170)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.85654 5.82536H4.57206C4.65788 6.13199 4.8405 6.40196 5.09218 6.59421C5.34386 6.78646 5.65083 6.89048 5.96643 6.89048C6.28203 6.89048 6.58901 6.78646 6.84069 6.59421C7.09237 6.40196 7.27499 6.13199 7.3608 5.82536L14.1423 5.82536C14.2472 5.82536 14.3478 5.78329 14.422 5.70838C14.4962 5.63348 14.5379 5.53189 14.5379 5.42596C14.5379 5.32003 14.4962 5.21843 14.422 5.14353C14.3478 5.06863 14.2472 5.02655 14.1423 5.02655L7.3608 5.02655C7.27499 4.71992 7.09237 4.44995 6.84069 4.2577C6.58901 4.06545 6.28203 3.96143 5.96643 3.96143C5.65083 3.96143 5.34386 4.06545 5.09218 4.2577C4.8405 4.44995 4.65788 4.71992 4.57206 5.02655H3.85654C3.75162 5.02655 3.651 5.06863 3.57681 5.14353C3.50261 5.21843 3.46094 5.32003 3.46094 5.42596C3.46094 5.53189 3.50261 5.63348 3.57681 5.70838C3.651 5.78329 3.75162 5.82536 3.85654 5.82536ZM5.96643 4.76027C6.09684 4.76027 6.22431 4.79933 6.33274 4.87248C6.44117 4.94562 6.52568 5.04958 6.57558 5.17122C6.62549 5.29286 6.63855 5.42668 6.6131 5.55581C6.58766 5.68494 6.52487 5.80358 6.43265 5.89668C6.34044 5.98977 6.22296 6.05314 6.09506 6.07883C5.96717 6.10451 5.83459 6.09135 5.71411 6.04096C5.59363 5.99058 5.49066 5.90526 5.41821 5.79579C5.34576 5.68631 5.30709 5.55761 5.30709 5.42596C5.30709 5.24941 5.37656 5.08007 5.50021 4.95523C5.62386 4.83039 5.79156 4.76027 5.96643 4.76027ZM14.1423 8.75436L10.3492 8.75436C10.2434 8.47983 10.0579 8.24398 9.81702 8.07769C9.57617 7.9114 9.29119 7.82241 8.9994 7.82241C8.70761 7.82241 8.42263 7.9114 8.18178 8.07769C7.94092 8.24398 7.75544 8.47983 7.6496 8.75436H3.85654C3.75162 8.75436 3.651 8.79644 3.57681 8.87134C3.50261 8.94624 3.46094 9.04784 3.46094 9.15377C3.46094 9.2597 3.50261 9.36129 3.57681 9.43619C3.651 9.5111 3.75162 9.55317 3.85654 9.55317H7.57522C7.63662 9.88956 7.81283 10.1936 8.0732 10.4124C8.33357 10.6313 8.66166 10.7512 9.00046 10.7512C9.33926 10.7512 9.66734 10.6313 9.92771 10.4124C10.1881 10.1936 10.3643 9.88956 10.4257 9.55317L14.1444 9.55317C14.2493 9.55289 14.3498 9.51055 14.4238 9.43544C14.4978 9.36034 14.5392 9.25862 14.5389 9.15269C14.5386 9.04676 14.4967 8.9453 14.4223 8.87059C14.3479 8.79589 14.2472 8.75408 14.1423 8.75436ZM8.9994 9.95258C8.86899 9.95258 8.74152 9.91352 8.63309 9.84038C8.52466 9.76723 8.44015 9.66327 8.39025 9.54164C8.34035 9.42 8.32729 9.28618 8.35273 9.15705C8.37817 9.02792 8.44097 8.90928 8.53318 8.81618C8.62539 8.72308 8.74287 8.65971 8.87077 8.63403C8.99867 8.60834 9.13124 8.62151 9.25172 8.6719C9.3722 8.72228 9.47517 8.8076 9.54762 8.91707C9.62007 9.02654 9.65874 9.15524 9.65874 9.2869C9.65874 9.46345 9.58927 9.63278 9.46562 9.75762C9.34197 9.88246 9.17427 9.95258 8.9994 9.95258ZM14.1423 12.4822H13.4267C13.3409 12.1755 13.1583 11.9056 12.9066 11.7133C12.6549 11.5211 12.348 11.417 12.0324 11.417C11.7168 11.417 11.4098 11.5211 11.1581 11.7133C10.9064 11.9056 10.7238 12.1755 10.638 12.4822L3.85654 12.4822C3.75162 12.4822 3.651 12.5242 3.57681 12.5991C3.50261 12.6741 3.46094 12.7756 3.46094 12.8816C3.46094 12.9875 3.50261 13.0891 3.57681 13.164C3.651 13.2389 3.75162 13.281 3.85654 13.281L10.638 13.281C10.7238 13.5876 10.9064 13.8576 11.1581 14.0498C11.4098 14.2421 11.7168 14.3461 12.0324 14.3461C12.348 14.3461 12.6549 14.2421 12.9066 14.0498C13.1583 13.8576 13.3409 13.5876 13.4267 13.281H14.1423C14.2472 13.281 14.3478 13.2389 14.422 13.164C14.4962 13.0891 14.5379 12.9875 14.5379 12.8816C14.5379 12.7756 14.4962 12.6741 14.422 12.5991C14.3478 12.5242 14.2472 12.4822 14.1423 12.4822ZM12.0324 13.5473C11.902 13.5473 11.7745 13.5082 11.6661 13.4351C11.5576 13.3619 11.4731 13.2579 11.4232 13.1363C11.3733 13.0147 11.3603 12.8809 11.3857 12.7517C11.4111 12.6226 11.4739 12.504 11.5661 12.4109C11.6584 12.3178 11.7758 12.2544 11.9037 12.2287C12.0316 12.203 12.1642 12.2162 12.2847 12.2666C12.4052 12.317 12.5081 12.4023 12.5806 12.5117C12.653 12.6212 12.6917 12.7499 12.6917 12.8816C12.6917 13.0581 12.6222 13.2275 12.4986 13.3523C12.3749 13.4771 12.2072 13.5473 12.0324 13.5473Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_1843_26170">
                        <rect width="11.0769" height="10.3846" fill="white" transform="translate(3.46094 3.96143)"/>
                    </clipPath>
                </defs>
            </svg>
        </a>
        <a class="part-2" href="#">
            <p>Сортировка</p>
            <svg width="2" height="19" viewBox="0 0 2 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 0.5V18.5" stroke="#DADADA"/>
            </svg>
            <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.76953 10.7218C2.76953 10.4519 3.04686 10.2331 3.38896 10.2331H10.3465C10.6886 10.2331 10.966 10.4519 10.966 10.7218C10.966 10.9917 10.6886 11.2104 10.3465 11.2104H3.38896C3.04686 11.2104 2.76953 10.9917 2.76953 10.7218Z" fill="#BEBEBE"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.76953 13.1652C2.76953 12.8953 3.04686 12.6765 3.38896 12.6765L13.9193 12.6765C14.2614 12.6765 14.5388 12.8953 14.5388 13.1652C14.5388 13.4351 14.2614 13.6539 13.9193 13.6539L3.38896 13.6539C3.04686 13.6539 2.76953 13.4351 2.76953 13.1652Z" fill="#BEBEBE"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.76953 8.27832C2.76953 8.00842 3.04686 7.78963 3.38897 7.78963L8.56012 7.78963C8.90223 7.78963 9.17956 8.00842 9.17956 8.27832C9.17956 8.54821 8.90223 8.76701 8.56012 8.76701H3.38897C3.04686 8.76701 2.76953 8.54821 2.76953 8.27832Z" fill="#BEBEBE"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.76953 5.83488C2.76953 5.56498 3.04686 5.34619 3.38896 5.34619L6.59859 5.34619C6.94069 5.34619 7.21802 5.56498 7.21802 5.83488C7.21802 6.10477 6.94069 6.32357 6.59859 6.32357L3.38896 6.32357C3.04686 6.32357 2.76953 6.10477 2.76953 5.83488Z" fill="#BEBEBE"/>
            </svg>
        </a>
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
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 13C7 12.4869 7.41597 12.0709 7.9291 12.0709H13H18.0709C18.584 12.0709 19 12.4869 19 13C19 13.5131 18.584 13.9291 18.0709 13.9291H7.9291C7.41597 13.9291 7 13.5131 7 13Z" fill="#D2D2D2"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0002 7C13.5134 7 13.9293 7.41597 13.9293 7.9291V18.0709C13.9293 18.584 13.5134 19 13.0002 19C12.4871 19 12.0711 18.584 12.0711 18.0709V7.9291C12.0711 7.41597 12.4871 7 13.0002 7Z" fill="#D2D2D2"/>
            </svg>
        </a>
    </div>

    <div class="block_pagination">

        <div class="pagination_swiper-button-prev pagination_button">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.4688 3.8047C8.72915 3.54435 8.72915 3.12224 8.4688 2.86189C8.20845 2.60154 7.78634 2.60154 7.52599 2.86189L2.85932 7.52855C2.59898 7.7889 2.59898 8.21101 2.85932 8.47136L7.52599 13.138C7.78634 13.3984 8.20845 13.3984 8.4688 13.138C8.72915 12.8777 8.72915 12.4556 8.4688 12.1952L4.94021 8.66663H12.6641C13.0323 8.66663 13.3307 8.36815 13.3307 7.99996C13.3307 7.63177 13.0323 7.33329 12.6641 7.33329H4.9402L8.4688 3.8047Z" fill="#DADADA"/>
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
            <div class="max_value_pages pagination_button_page"><a class="pagination_button_page" href="#">30</a></div>
        </div>
        <div class="pagination_swiper-button-next pagination_button">
            <p>Вперед</p>
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.4688 2.86189C8.20845 2.60154 7.78634 2.60154 7.52599 2.86189C7.26564 3.12224 7.26564 3.54435 7.52599 3.8047L11.0546 7.33329H3.33073C2.96254 7.33329 2.66406 7.63177 2.66406 7.99996C2.66406 8.36815 2.96254 8.66663 3.33073 8.66663H11.0546L7.52599 12.1952C7.26564 12.4556 7.26564 12.8777 7.52599 13.138C7.78634 13.3984 8.20845 13.3984 8.4688 13.138L13.1355 8.47136C13.3958 8.21101 13.3958 7.7889 13.1355 7.52855L8.4688 2.86189Z" fill="white"/>
            </svg>
        </div>

    </div>

    <div class="block_SEO">

        <p class="top_box">Заголовок SEO текст</p>

        <div class="bottom_box block_SEO_bottom_box">
            Добро пожаловать в нашу уникальную студию эротического массажа, где мы создаем незабываемые впечатления и помогаем вам насладиться полной релаксацией и удовольствием. Наша команда опытных массажисток с горячими телами и нежными руками предлагает вам самые чувственные и эротические сеансы массажа.
            <br>
            Мы понимаем важность вашего комфорта и конфиденциальности. Поэтому наша студия создана в уютном и безопасном месте, где вы сможете отключиться от суеты и насладиться интимным и расслабляющим опытом. Наши массажистки владеют различными техниками массажа, которые позволят вам ощутить глубокое расслабление, освободиться от напряжения и открыть новые грани своей сексуальности.
            Мы предлагаем широкий спектр услуг, включая классический эротический массаж, тайский массаж, нуро-массаж и многое другое. Каждая сессия массажа индивидуально настраивается под ваши предпочтения и желания, чтобы обеспечить вам максимальное удовольствие и релаксацию.
            Наша студия эротического массажа открыта для мужчин, женщин и пар. Мы ценим и уважаем всех наших клиентов, независимо от их пола, ориентации и предпочтений. Ваше благополучие и полное удовлетворение - наш главный приоритет.
            Запишитесь на сеанс массажа уже сегодня и позвольте нам позаботиться о вашем теле, разуме и душе. Наша студия эротического массажа готова предложить вам незабываемый опыт, который оставит вас восторженными и желающими возвращаться снова и снова.
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


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");