<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/** @var CMain $APPLICATION */
$APPLICATION->SetTitle("Контакты");

/*global $USER;
$USER->Authorize(1);*/

?>
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/contact_mobil.css">
    <div class="contact_block maxWidth_1216">
        <div class="Breadcrumb-box">
            <a href="/">Главная</a>
            <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="0.566987" y1="7.21387" x2="4.56699" y2="0.285664" stroke="black"/>
            </svg>
            <p>Контакты</p>
        </div>
        <div class="header-box">
            <p>Контакты</p>
        </div>
        <div class="columns-container">
            <div class="column-1 contacts-block">
                <p>По общим вопросам</p>
                <div class="container-box">
                    <div class="phone-box contacts-block_contact-column">
                        <p>телефон</p>
                        <span class="part-1">
                            <a href="tel:<?php
                            echo $APPLICATION->subdomain->getCommonPhoneForUrl() ?>"><?php
                                echo $APPLICATION->subdomain->getCommonPhone() ?></a>
                        </span>
                        <a class="part-2" data-popup="call-order">Заказать звонок</a>
                        <div class="popup" id="call-order">
                            <div class="popup_content default-form">
                                <?php
                                $APPLICATION->IncludeComponent("bitrix:form.result.new","erosite",Array(
                                        "AJAX_MODE" => "Y",
                                        'AJAX_OPTION_SHADOW' => 'N',
                                        "WEB_FORM_ID" => 1,
                                    )
                                );?>
                            </div>
                        </div>
                    </div>
                    <div class="mail-box contacts-block_contact-column">
                        <p>e-mail</p>
                        <a href="<?php
                        echo $APPLICATION->subdomain->getCommonMail() ?>"><?php
                            echo $APPLICATION->subdomain->getCommonMail() ?></a>
                    </div>
                    <div class="messengers-box contacts-block_contact-column">
                        <p>Мессенджеры</p>
                        <div class="button-box">
                            <a target="_blank" href="<?php
                            echo $APPLICATION->subdomain->getWhatsappUrl() ?>">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.9598 8.03704C17.3148 7.38879 16.5466 6.87481 15.6998 6.52508C14.8531 6.17535 13.9449 5.99686 13.0281 6.00004C9.18693 6.00004 6.05628 9.11503 6.05628 12.937C6.05628 14.162 6.3799 15.352 6.98492 16.402L6 20L9.69347 19.034C10.7136 19.587 11.8603 19.881 13.0281 19.881C16.8693 19.881 20 16.766 20 12.944C20 11.089 19.2754 9.34603 17.9598 8.03704ZM13.0281 18.705C11.9869 18.705 10.9668 18.425 10.0734 17.9L9.86231 17.774L7.66734 18.348L8.25126 16.22L8.11055 16.003C7.53208 15.0839 7.22492 14.0215 7.22412 12.937C7.22412 9.75903 9.82714 7.16904 13.0211 7.16904C14.5688 7.16904 16.0251 7.77104 17.1156 8.86303C17.6555 9.39781 18.0834 10.0339 18.3744 10.7344C18.6655 11.435 18.8139 12.186 18.8111 12.944C18.8251 16.122 16.2221 18.705 13.0281 18.705ZM16.208 14.393C16.0322 14.309 15.1739 13.889 15.0191 13.826C14.8573 13.77 14.7447 13.742 14.6251 13.91C14.5055 14.085 14.1749 14.477 14.0764 14.589C13.9779 14.708 13.8724 14.722 13.6965 14.631C13.5206 14.547 12.9578 14.358 12.2965 13.77C11.7759 13.308 11.4312 12.741 11.3256 12.566C11.2271 12.391 11.3116 12.3 11.403 12.209C11.4804 12.132 11.5789 12.006 11.6633 11.908C11.7477 11.81 11.7829 11.733 11.8392 11.621C11.8955 11.502 11.8673 11.404 11.8251 11.32C11.7829 11.236 11.4312 10.382 11.2905 10.032C11.1497 9.69603 11.002 9.73803 10.8965 9.73103H10.5588C10.4392 9.73103 10.2563 9.77303 10.0945 9.94803C9.9397 10.123 9.48945 10.543 9.48945 11.397C9.48945 12.251 10.1156 13.077 10.2 13.189C10.2844 13.308 11.4312 15.058 13.1759 15.807C13.591 15.989 13.9146 16.094 14.1678 16.171C14.5829 16.304 14.9628 16.283 15.2653 16.241C15.603 16.192 16.2995 15.821 16.4402 15.415C16.5879 15.009 16.5879 14.666 16.5387 14.589C16.4894 14.512 16.3839 14.477 16.208 14.393Z"
                                          fill="#231A23"/>
                                </svg>
                                whatsapp
                            </a>
                            <a target="_blank" href="<?php
                            echo $APPLICATION->subdomain->getTelegramUrl() ?>">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M17.6299 9.78284C17.7921 9.95016 17.8428 10.1963 17.7598 10.4141L14.9596 17.7647C14.8872 17.9548 14.7233 18.0953 14.5244 18.1379C14.3254 18.1804 14.1185 18.1193 13.9746 17.9754L10.9245 14.9253L7.90865 13.92C7.66485 13.8387 7.49988 13.6112 7.4984 13.3542C7.49692 13.0972 7.65927 12.8679 7.90212 12.7838L17.0029 9.63354C17.2231 9.5573 17.4676 9.61551 17.6299 9.78284ZM12.1766 14.4803L14.168 16.4717L15.9382 11.825L12.1766 14.4803ZM13.3925 12.1531L9.9636 13.3401L11.1505 13.7357L13.3925 12.1531Z"
                                          fill="#231A23"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M5.39844 13.0003C5.39844 8.80289 8.80093 5.40039 12.9984 5.40039C17.1958 5.40039 20.5983 8.80289 20.5983 13.0003C20.5983 17.1978 17.1958 20.6002 12.9984 20.6002C8.80093 20.6002 5.39844 17.1978 5.39844 13.0003ZM12.9984 6.60039C9.46368 6.60039 6.59844 9.46563 6.59844 13.0003C6.59844 16.535 9.46368 19.4002 12.9984 19.4002C16.5331 19.4002 19.3983 16.535 19.3983 13.0003C19.3983 9.46563 16.5331 6.60039 12.9984 6.60039Z"
                                          fill="#231A23"/>
                                </svg>
                                telegram
                            </a>
                        </div>
                    </div>
                </div>
                <div class="address-box contacts-block_contact-column">
                    <p>адрес</p>
                    <a target="_blank" href="<?php
                    echo $APPLICATION->subdomain->getAddressYandexMapsUrl() ?>"><?php
                        echo $APPLICATION->subdomain->getAddress() ?></a>
                </div>
            </div>

            <div class="column-2 contacts-block">
                <div class="left-box">
                    <P>По вопросам рекламы</P>
                    <div>
                        <div class="part-1 contacts-block_contact-column">
                            <p>телефон</p>
                            <span class="phone-box">
                                <a href="tel:<?php
                                echo $APPLICATION->subdomain->getMarketingPhoneForUrl() ?>"><?php
                                    echo $APPLICATION->subdomain->getMarketingPhone() ?></a>
                            </span>
                            <a class="order-call" data-popup="call-marketing-order">Заказать звонок</a>
                            <div class="popup" id="call-marketing-order">
                                <div class="popup_content default-form">
                                    <?php
                                    $APPLICATION->IncludeComponent("bitrix:form.result.new","erosite",Array(
                                            "AJAX_MODE" => "Y",
                                            'AJAX_OPTION_SHADOW' => 'N',
                                            "WEB_FORM_ID" => 2,
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                        <div class="part-2 contacts-block_contact-column">
                            <p>e-mail</p>
                            <a href="<?php
                            echo $APPLICATION->subdomain->getMarketingMail() ?>"><?php
                                echo $APPLICATION->subdomain->getMarketingMail() ?></a>
                        </div>
                    </div>
                </div>
                <div class="right-box">
                    <a class="" href="/salon_advertising/">Реклама салонов</a>
                    <a class="" href="/promotion_profiles/">Продвижение анкеты</a>
                </div>
            </div>
            <div class="column-3 contacts-block">
                <div class="left-box">
                    <p>По вопросам раздела “вакансии”</p>
                    <p class="hidden-box">По вопросам трудоустройства</p>
                    <div>
                        <div class="part-1 contacts-block_contact-column">
                            <p>телефон</p>
                            <span class="phone-box">
                            <a href="tel:<?php
                            echo $APPLICATION->subdomain->getVacancyPhoneForUrl() ?>"><?php
                                echo $APPLICATION->subdomain->getVacancyPhone() ?></a>
                            </span>
                            <a class="order-call" data-popup="call-vacancies-order">Заказать звонок</a>
                            <div class="popup" id="call-vacancies-order">
                                <div class="popup_content default-form">
                                    <?php
                                    $APPLICATION->IncludeComponent("bitrix:form.result.new","erosite",Array(
                                            "AJAX_MODE" => "Y",
                                            'AJAX_OPTION_SHADOW' => 'N',
                                            "WEB_FORM_ID" => 3
                                        )
                                    );?>
                                </div>
                            </div>
                        </div>
                        <div class="part-2 contacts-block_contact-column">
                            <p>e-mail</p>
                            <a href="<?php
                            echo $APPLICATION->subdomain->getVacancyMail() ?>"><?php
                                echo $APPLICATION->subdomain->getVacancyMail() ?></a>
                        </div>
                    </div>
                </div>
                <DIV class="right-box">
                    <a href="#">Вакансии</a>
                </DIV>
            </div>
        </div>
    </div>
<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>