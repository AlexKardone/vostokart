<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("");

// $APPLICATION->IncludeComponent(
// 	"bitrix:main.map",
// 	"sitemap",
// 	array(
// 		"LEVEL" => "0",
// 		"COL_NUM" => "1",
// 		"SHOW_DESCRIPTION" => "N",
// 		"SET_TITLE" => "Y",
// 		"CACHE_TIME" => "3600",
// 		"COMPONENT_TEMPLATE" => "sitemap",
// 		"CACHE_TYPE" => "A"
// 	),
// 	false
// );
?><?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

// $APPLICATION->IncludeComponent(
// 	"bitrix:main.map",
// 	"sitemap",
// 	array(
// 		"LEVEL" => "0",
// 		"COL_NUM" => "1",
// 		"SHOW_DESCRIPTION" => "N",
// 		"SET_TITLE" => "Y",
// 		"CACHE_TIME" => "3600",
// 		"COMPONENT_TEMPLATE" => "sitemap",
// 		"CACHE_TYPE" => "A"
// 	),
// 	false
// );
?>
<div style="text-align:center;min-height: 300px;font-size:17px">
	<p>
		 Здравствуйте!<br>
		 Добро пожаловать на «страницу 404» нашего сайта.<br>
		 К сожалению, введенный Вами адрес недоступен.
	</p>
	<p>
 <a href="http://vostok-art.ru">Перейти на главную страницу</a><br>
 <br>
		 Если у Вас возникли какие-то вопросы – свяжитесь с нами<br>
		 по телефону в Москве +7 495 628-73-49 или напишите на e-mail: <a href="mailto:vopros@vostok-art.ru">vopros@vostok-art.ru</a>
	</p>
</div>
 <br>
 <br><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>