<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Интерьеры Махараджей, Индийская мебель, Восточная мебель, Японская мебель, Тайская мебель");
$APPLICATION->SetPageProperty("title", "Мебель из массива дерева. Светильники. Антиквариат - Галерея \"Интерьеры Махараджей\" - Индийская мебель | Восточная мебель");
$APPLICATION->SetPageProperty("description", "Мебель из массива дерева. Светильники. Антиквариат. Индийская мебель,  текстиль и аксессуары из Индии и Азии, резные шкафы и комоды из дорогих пород дерева, столы, стулья, ширмы, зеркала, сундуки и ажурные шкатулки, двери на заказ, бронзовые статуи, восточный текстиль и многое другое для интерьера вашего дома или офиса");
$APPLICATION->SetPageProperty("keywords", "Мебель из массива дерева. Светильники. Антиквариат - Галерея \"Интерьеры Махараджей\"");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");

$APPLICATION->SetTitle("Мебель из массива дерева. Светильники. Антиквариат - Галерея \"Интерьеры Махараджей\" - Индийская мебель | Восточная мебель");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"wide_banner",
	Array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "wide_banner",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"DETAIL_PICTURE",2=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "banners",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"URL",2=>"SMALL_PIC",3=>"",),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC"
	)
);?> <?//-- banner end--?> <!-- <hr> --> <?//-- intro end--?> <!-- <div class="padding_hr">&nbsp;</div> --> <?//-- catalog --?>
<div class="block_catalog">
	<div class="content_center">
		<h2>КАТАЛОГ</h2>
		<div class="main_catalog_with_pic">
			 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"catalog_main_catalog",
	Array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "catalog_main_catalog",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "1c_catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_ID" => "",
		"SECTION_URL" => "/catalog/#SECTION_CODE#/",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	)
);?>
		</div>
	</div>
</div>
 <?//-- catalog end --?>
<div class="content_center">
	<hr>
	 <?//-- new arrivals --?>
	<div class="row">
		 <!-- <div class="small-12 columns"><h2 class="typo">Новые поступления</h2></div> --> <?
    // $picFilter = array("!PREVIEW_PICTURE" => false);
  ?> <?
//   $APPLICATION->IncludeComponent(
// 	"bitrix:catalog.section",
// 	"grid_new_5elem",
// 	array(
// 		"IBLOCK_TYPE" => "1c_catalog",
// 		"IBLOCK_ID" => "6",
// 		"SECTION_ID" => "246",
// 		"SECTION_CODE" => "",
// 		"SECTION_USER_FIELDS" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"ELEMENT_SORT_FIELD" => "shows",
// 		"ELEMENT_SORT_ORDER" => "asc",
// 		"ELEMENT_SORT_FIELD2" => "id",
// 		"ELEMENT_SORT_ORDER2" => "desc",
// 		"FILTER_NAME" => "arrFilter",
// 		"INCLUDE_SUBSECTIONS" => "Y",
// 		"SHOW_ALL_WO_SECTION" => "Y",
// 		"HIDE_NOT_AVAILABLE" => "N",
// 		"PAGE_ELEMENT_COUNT" => "30",
// 		"LINE_ELEMENT_COUNT" => "3",
// 		"PROPERTY_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_LIMIT" => "0",
// 		"TEMPLATE_THEME" => "blue",
// 		"ADD_PICT_PROP" => "-",
// 		"LABEL_PROP" => "-",
// 		"PRODUCT_SUBSCRIPTION" => "N",
// 		"SHOW_DISCOUNT_PERCENT" => "N",
// 		"SHOW_OLD_PRICE" => "N",
// 		"MESS_BTN_BUY" => "Купить",
// 		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
// 		"MESS_BTN_SUBSCRIBE" => "Подписаться",
// 		"MESS_BTN_DETAIL" => "Подробнее",
// 		"MESS_NOT_AVAILABLE" => "Нет в наличии",
// 		"SECTION_URL" => "",
// 		"DETAIL_URL" => "",
// 		"SECTION_ID_VARIABLE" => "SECTION_ID",
// 		"AJAX_MODE" => "N",
// 		"AJAX_OPTION_JUMP" => "N",
// 		"AJAX_OPTION_STYLE" => "Y",
// 		"AJAX_OPTION_HISTORY" => "N",
// 		"CACHE_TYPE" => "A",
// 		"CACHE_TIME" => "36000000",
// 		"CACHE_GROUPS" => "Y",
// 		"SET_META_KEYWORDS" => "Y",
// 		"META_KEYWORDS" => "-",
// 		"SET_META_DESCRIPTION" => "Y",
// 		"META_DESCRIPTION" => "-",
// 		"BROWSER_TITLE" => "-",
// 		"ADD_SECTIONS_CHAIN" => "N",
// 		"DISPLAY_COMPARE" => "N",
// 		"SET_TITLE" => "Y",
// 		"SET_STATUS_404" => "N",
// 		"CACHE_FILTER" => "N",
// 		"PRICE_CODE" => array(
// 		),
// 		"USE_PRICE_COUNT" => "N",
// 		"SHOW_PRICE_COUNT" => "1",
// 		"PRICE_VAT_INCLUDE" => "Y",
// 		"CONVERT_CURRENCY" => "N",
// 		"BASKET_URL" => "/personal/basket.php",
// 		"ACTION_VARIABLE" => "action",
// 		"PRODUCT_ID_VARIABLE" => "id",
// 		"USE_PRODUCT_QUANTITY" => "N",
// 		"ADD_PROPERTIES_TO_BASKET" => "Y",
// 		"PRODUCT_PROPS_VARIABLE" => "prop",
// 		"PARTIAL_PRODUCT_PROPERTIES" => "N",
// 		"PRODUCT_PROPERTIES" => array(
// 		),
// 		"PAGER_TEMPLATE" => ".default",
// 		"DISPLAY_TOP_PAGER" => "N",
// 		"DISPLAY_BOTTOM_PAGER" => "N",
// 		"PAGER_TITLE" => "Товары",
// 		"PAGER_SHOW_ALWAYS" => "N",
// 		"PAGER_DESC_NUMBERING" => "N",
// 		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
// 		"PAGER_SHOW_ALL" => "Y",
// 		"AJAX_OPTION_ADDITIONAL" => "",
// 		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
// 		"OFFERS_FIELD_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_PROPERTY_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_SORT_FIELD" => "sort",
// 		"OFFERS_SORT_ORDER" => "asc",
// 		"OFFERS_SORT_FIELD2" => "id",
// 		"OFFERS_SORT_ORDER2" => "desc",
// 		"SET_BROWSER_TITLE" => "Y",
// 		"OFFERS_CART_PROPERTIES" => "",
// 		"PRODUCT_DISPLAY_MODE" => "N",
// 		"COMPONENT_TEMPLATE" => "grid_new_5elem",
// 		"SEF_MODE" => "N",
// 		"SET_LAST_MODIFIED" => "N",
// 		"USE_MAIN_ELEMENT_SECTION" => "N",
// 		"PAGER_BASE_LINK_ENABLE" => "N",
// 		"SHOW_404" => "N",
// 		"MESSAGE_404" => "",
// 		"BACKGROUND_IMAGE" => "-"
// 	),
// 	false
// );
?>
	</div>
	<hr>
	 <?//-- sale --?>
	<div class="row">
		<div class="small-12 columns">
			<h2 class="typo">Распродажа</h2>
		</div>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"grid_new_5elem",
	Array(
		"ACTION_VARIABLE" => "action",
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
		"COMPONENT_TEMPLATE" => "grid_new_5elem",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "1c_catalog",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "10",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"OFFERS_CART_PROPERTIES" => "",
		"OFFERS_FIELD_CODE" => array(0=>"",1=>"",),
		"OFFERS_LIMIT" => "10",
		"OFFERS_PROPERTY_CODE" => array(0=>"",1=>"",),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "100",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SECTION_CODE" => "",
		"SECTION_ID" => "255",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"TEMPLATE_THEME" => "blue",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N"
	)
);?>
	</div>
	 <!-- <div class="row"> --> <!-- <div class="small-12 columns"><h2 class="typo">Тайланд</h2></div> --> <?

// global $arrFilterTai;
// $arrFilterTai = array("PROPERTY_STRANA_PROISKHOZHDENIYA" => "Таиланд");

//   $APPLICATION->IncludeComponent("bitrix:catalog.section", "grid_new_5elem", Array(
// 	"IBLOCK_TYPE" => "1c_catalog",	// Тип инфоблока
// 		"IBLOCK_ID" => "6",	// Инфоблок
// 		"SECTION_ID" => "0",	// ID раздела
// 		"SECTION_CODE" => "",	// Код раздела
// 		"SECTION_USER_FIELDS" => array(	// Свойства раздела
// 			0 => "",
// 			1 => "",
// 		),
// 		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
// 		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
// 		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
// 		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
// 		"FILTER_NAME" => "arrFilterTai",	// Имя массива со значениями фильтра для фильтрации элементов
// 		"USE_FILTER" => "Y",
// 		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
// 		"SHOW_ALL_WO_SECTION" => "Y",	// Показывать все элементы, если не указан раздел
// 		"HIDE_NOT_AVAILABLE" => "N",	// Не отображать товары, которых нет на складах
// 		"PAGE_ELEMENT_COUNT" => 20,	// Количество элементов на странице
// 		"LINE_ELEMENT_COUNT" => "1",	// Количество элементов выводимых в одной строке таблицы
// 		"PROPERTY_CODE" => array(	// Свойства
// 			0 => "STRANA_PROISKHOZHDENIYA",
// 			1 => "",
// 		),
// 		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
// 		"TEMPLATE_THEME" => "blue",	// Цветовая тема
// 		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
// 		"LABEL_PROP" => "-",	// Свойство меток товара
// 		"PRODUCT_SUBSCRIPTION" => "N",	// Разрешить оповещения для отсутствующих товаров
// 		"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
// 		"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
// 		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
// 		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
// 		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
// 		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
// 		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
// 		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
// 		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
// 		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
// 		"AJAX_MODE" => "N",	// Включить режим AJAX
// 		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
// 		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
// 		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
// 		"CACHE_TYPE" => "A",	// Тип кеширования
// 		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
// 		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
// 		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
// 		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
// 		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
// 		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
// 		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
// 		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
// 		"DISPLAY_COMPARE" => "N",
// 		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
// 		"SET_STATUS_404" => "N",	// Устанавливать статус 404
// 		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
// 		"PRICE_CODE" => "",	// Тип цены
// 		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
// 		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
// 		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
// 		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
// 		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
// 		"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
// 		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
// 		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
// 		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
// 		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
// 		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
// 		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
// 		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
// 		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
// 		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
// 		"PAGER_TITLE" => "Товары",	// Название категорий
// 		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
// 		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
// 		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
// 		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
// 		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
// 		"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
// 		"OFFERS_FIELD_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_PROPERTY_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_SORT_FIELD" => "sort",
// 		"OFFERS_SORT_ORDER" => "asc",
// 		"OFFERS_SORT_FIELD2" => "id",
// 		"OFFERS_SORT_ORDER2" => "desc",
// 		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
// 		"OFFERS_CART_PROPERTIES" => "",
// 		"PRODUCT_DISPLAY_MODE" => "N",
// 		"COMPONENT_TEMPLATE" => "grid_new",
// 		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
// 		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
// 		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
// 		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
// 		"SHOW_404" => "N",	// Показ специальной страницы
// 		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
// 	),
// 	false
// );
?> <!-- </div> --> <!-- <div class="row"> --> <!-- <div class="small-12 columns"><h2 class="typo">Япония</h2></div> --> <?

// global $arrFilterJap;
// $arrFilterJap = array("PROPERTY_STRANA_PROISKHOZHDENIYA" => "Япония");

//   $APPLICATION->IncludeComponent(
// 	"bitrix:catalog.section",
// 	"grid_new_5elem",
// 	array(
// 		"IBLOCK_TYPE" => "1c_catalog",
// 		"IBLOCK_ID" => "6",
// 		"SECTION_ID" => "",
// 		"SECTION_CODE" => "",
// 		"SECTION_USER_FIELDS" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"ELEMENT_SORT_FIELD" => "sort",
// 		"ELEMENT_SORT_ORDER" => "asc",
// 		"ELEMENT_SORT_FIELD2" => "id",
// 		"ELEMENT_SORT_ORDER2" => "desc",
// 		"FILTER_NAME" => "arrFilterJap",
// 		"USE_FILTER" => "Y",
// 		"INCLUDE_SUBSECTIONS" => "Y",
// 		"SHOW_ALL_WO_SECTION" => "Y",
// 		"HIDE_NOT_AVAILABLE" => "N",
// 		"PAGE_ELEMENT_COUNT" => "20",
// 		"LINE_ELEMENT_COUNT" => "3",
// 		"PROPERTY_CODE" => array(
// 			0 => "STRANA_PROISKHOZHDENIYA",
// 			1 => "",
// 		),
// 		"OFFERS_LIMIT" => "5",
// 		"TEMPLATE_THEME" => "blue",
// 		"ADD_PICT_PROP" => "-",
// 		"LABEL_PROP" => "-",
// 		"PRODUCT_SUBSCRIPTION" => "N",
// 		"SHOW_DISCOUNT_PERCENT" => "N",
// 		"SHOW_OLD_PRICE" => "N",
// 		"MESS_BTN_BUY" => "Купить",
// 		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
// 		"MESS_BTN_SUBSCRIBE" => "Подписаться",
// 		"MESS_BTN_DETAIL" => "Подробнее",
// 		"MESS_NOT_AVAILABLE" => "Нет в наличии",
// 		"SECTION_URL" => "",
// 		"DETAIL_URL" => "",
// 		"SECTION_ID_VARIABLE" => "SECTION_ID",
// 		"AJAX_MODE" => "N",
// 		"AJAX_OPTION_JUMP" => "N",
// 		"AJAX_OPTION_STYLE" => "Y",
// 		"AJAX_OPTION_HISTORY" => "N",
// 		"CACHE_TYPE" => "A",
// 		"CACHE_TIME" => "36000000",
// 		"CACHE_GROUPS" => "Y",
// 		"SET_META_KEYWORDS" => "Y",
// 		"META_KEYWORDS" => "-",
// 		"SET_META_DESCRIPTION" => "Y",
// 		"META_DESCRIPTION" => "-",
// 		"BROWSER_TITLE" => "-",
// 		"ADD_SECTIONS_CHAIN" => "N",
// 		"DISPLAY_COMPARE" => "N",
// 		"SET_TITLE" => "Y",
// 		"SET_STATUS_404" => "N",
// 		"CACHE_FILTER" => "N",
// 		"PRICE_CODE" => array(
// 		),
// 		"USE_PRICE_COUNT" => "N",
// 		"SHOW_PRICE_COUNT" => "1",
// 		"PRICE_VAT_INCLUDE" => "Y",
// 		"CONVERT_CURRENCY" => "N",
// 		"BASKET_URL" => "/personal/basket.php",
// 		"ACTION_VARIABLE" => "action",
// 		"PRODUCT_ID_VARIABLE" => "id",
// 		"USE_PRODUCT_QUANTITY" => "N",
// 		"ADD_PROPERTIES_TO_BASKET" => "Y",
// 		"PRODUCT_PROPS_VARIABLE" => "prop",
// 		"PARTIAL_PRODUCT_PROPERTIES" => "N",
// 		"PRODUCT_PROPERTIES" => array(
// 		),
// 		"PAGER_TEMPLATE" => ".default",
// 		"DISPLAY_TOP_PAGER" => "N",
// 		"DISPLAY_BOTTOM_PAGER" => "N",
// 		"PAGER_TITLE" => "Товары",
// 		"PAGER_SHOW_ALWAYS" => "N",
// 		"PAGER_DESC_NUMBERING" => "N",
// 		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
// 		"PAGER_SHOW_ALL" => "Y",
// 		"AJAX_OPTION_ADDITIONAL" => "",
// 		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
// 		"OFFERS_FIELD_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_PROPERTY_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_SORT_FIELD" => "sort",
// 		"OFFERS_SORT_ORDER" => "asc",
// 		"OFFERS_SORT_FIELD2" => "id",
// 		"OFFERS_SORT_ORDER2" => "desc",
// 		"SET_BROWSER_TITLE" => "Y",
// 		"OFFERS_CART_PROPERTIES" => "",
// 		"PRODUCT_DISPLAY_MODE" => "N",
// 		"COMPONENT_TEMPLATE" => "grid_new_5elem",
// 		"SEF_MODE" => "N",
// 		"SET_LAST_MODIFIED" => "N",
// 		"USE_MAIN_ELEMENT_SECTION" => "N",
// 		"PAGER_BASE_LINK_ENABLE" => "N",
// 		"SHOW_404" => "N",
// 		"MESSAGE_404" => "",
// 		"BACKGROUND_IMAGE" => "-"
// 	),
// 	false
// );
?> <!-- </div> --> <!-- <div class="row"> --> <!-- <div class="small-12 columns"><h2 class="typo">Индия</h2></div> --> <?

// global $arrFilterInd;
// $arrFilterInd = array("PROPERTY_STRANA_PROISKHOZHDENIYA" => "Индия");

//   $APPLICATION->IncludeComponent(
// 	"bitrix:catalog.section",
// 	"grid_new_5elem",
// 	array(
// 		"IBLOCK_TYPE" => "1c_catalog",
// 		"IBLOCK_ID" => "6",
// 		"SECTION_ID" => "",
// 		"SECTION_CODE" => "",
// 		"SECTION_USER_FIELDS" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"ELEMENT_SORT_FIELD" => "sort",
// 		"ELEMENT_SORT_ORDER" => "asc",
// 		"ELEMENT_SORT_FIELD2" => "id",
// 		"ELEMENT_SORT_ORDER2" => "desc",
// 		"FILTER_NAME" => "arrFilterInd",
// 		"USE_FILTER" => "Y",
// 		"INCLUDE_SUBSECTIONS" => "Y",
// 		"SHOW_ALL_WO_SECTION" => "Y",
// 		"HIDE_NOT_AVAILABLE" => "N",
// 		"PAGE_ELEMENT_COUNT" => "20",
// 		"LINE_ELEMENT_COUNT" => "3",
// 		"PROPERTY_CODE" => array(
// 			0 => "STRANA_PROISKHOZHDENIYA",
// 			1 => "",
// 		),
// 		"OFFERS_LIMIT" => "5",
// 		"TEMPLATE_THEME" => "blue",
// 		"ADD_PICT_PROP" => "-",
// 		"LABEL_PROP" => "-",
// 		"PRODUCT_SUBSCRIPTION" => "N",
// 		"SHOW_DISCOUNT_PERCENT" => "N",
// 		"SHOW_OLD_PRICE" => "N",
// 		"MESS_BTN_BUY" => "Купить",
// 		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
// 		"MESS_BTN_SUBSCRIBE" => "Подписаться",
// 		"MESS_BTN_DETAIL" => "Подробнее",
// 		"MESS_NOT_AVAILABLE" => "Нет в наличии",
// 		"SECTION_URL" => "",
// 		"DETAIL_URL" => "",
// 		"SECTION_ID_VARIABLE" => "SECTION_ID",
// 		"AJAX_MODE" => "N",
// 		"AJAX_OPTION_JUMP" => "N",
// 		"AJAX_OPTION_STYLE" => "Y",
// 		"AJAX_OPTION_HISTORY" => "N",
// 		"CACHE_TYPE" => "A",
// 		"CACHE_TIME" => "36000000",
// 		"CACHE_GROUPS" => "Y",
// 		"SET_META_KEYWORDS" => "Y",
// 		"META_KEYWORDS" => "-",
// 		"SET_META_DESCRIPTION" => "Y",
// 		"META_DESCRIPTION" => "-",
// 		"BROWSER_TITLE" => "-",
// 		"ADD_SECTIONS_CHAIN" => "N",
// 		"DISPLAY_COMPARE" => "N",
// 		"SET_TITLE" => "Y",
// 		"SET_STATUS_404" => "N",
// 		"CACHE_FILTER" => "N",
// 		"PRICE_CODE" => array(
// 		),
// 		"USE_PRICE_COUNT" => "N",
// 		"SHOW_PRICE_COUNT" => "1",
// 		"PRICE_VAT_INCLUDE" => "Y",
// 		"CONVERT_CURRENCY" => "N",
// 		"BASKET_URL" => "/personal/basket.php",
// 		"ACTION_VARIABLE" => "action",
// 		"PRODUCT_ID_VARIABLE" => "id",
// 		"USE_PRODUCT_QUANTITY" => "N",
// 		"ADD_PROPERTIES_TO_BASKET" => "Y",
// 		"PRODUCT_PROPS_VARIABLE" => "prop",
// 		"PARTIAL_PRODUCT_PROPERTIES" => "N",
// 		"PRODUCT_PROPERTIES" => array(
// 		),
// 		"PAGER_TEMPLATE" => ".default",
// 		"DISPLAY_TOP_PAGER" => "N",
// 		"DISPLAY_BOTTOM_PAGER" => "N",
// 		"PAGER_TITLE" => "Товары",
// 		"PAGER_SHOW_ALWAYS" => "N",
// 		"PAGER_DESC_NUMBERING" => "N",
// 		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
// 		"PAGER_SHOW_ALL" => "Y",
// 		"AJAX_OPTION_ADDITIONAL" => "",
// 		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
// 		"OFFERS_FIELD_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_PROPERTY_CODE" => array(
// 			0 => "",
// 			1 => "",
// 		),
// 		"OFFERS_SORT_FIELD" => "sort",
// 		"OFFERS_SORT_ORDER" => "asc",
// 		"OFFERS_SORT_FIELD2" => "id",
// 		"OFFERS_SORT_ORDER2" => "desc",
// 		"SET_BROWSER_TITLE" => "Y",
// 		"OFFERS_CART_PROPERTIES" => "",
// 		"PRODUCT_DISPLAY_MODE" => "N",
// 		"COMPONENT_TEMPLATE" => "grid_new_5elem",
// 		"SEF_MODE" => "N",
// 		"SET_LAST_MODIFIED" => "N",
// 		"USE_MAIN_ELEMENT_SECTION" => "N",
// 		"PAGER_BASE_LINK_ENABLE" => "N",
// 		"SHOW_404" => "N",
// 		"MESSAGE_404" => "",
// 		"BACKGROUND_IMAGE" => "-"
// 	),
// 	false
// );
?> <!-- </div> -->
</div>
 <?//-- sale end --?><br>
 <br>
<div align="center">
 <br>
	 По всем вопросам пишите нам на&nbsp;<a href="mailto:vopros@vostok-art.ru" target="_blank">vopros@vostok-art.ru</a>.<br>
	 &nbsp; &nbsp; &nbsp;&nbsp;<br>
	 Присоединяйтесь к нам!<br>
 <br>
 <br>
 <a href="https://www.facebook.com/vostokart" rel="nofollow"><img width="32" alt="face.png" src="/upload/medialibrary/a00/a006bb17db098f939031ed98cc053e02.png" height="32" title="face.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://vk.com/vostok_art" rel="nofollow"><img width="32" alt="vk.png" src="/upload/medialibrary/005/0055a9ffe2c7178d8c02ba8e2049bdc6.png" height="32" title="vk.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/vostokart/" rel="nofollow"><img width="32" alt="insta.png" src="/upload/medialibrary/e15/e1570c723daa37351964f61c5ac53323.png" height="32" title="insta.png"></a><br>
 <br>
 <br>
 <br>

<p><a href="http://www.grandfs.ru/" rel="nofollow"><img src="http://vostok-art.ru/bitrix/templates/vostok-art/img/bannerG.gif"  alt=""></a></p>

</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>