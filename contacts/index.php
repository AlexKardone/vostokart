<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Телефоны, адреса в Москве и Санкт-Петербурге - как добраться и с кем можно связаться.");
$APPLICATION->SetPageProperty("title", "Контакты \"Галерея Махараджей\" - телефоны, адреса, как проехать");
$APPLICATION->SetTitle("Контактная информация");
?>
<div class="container">
	<br>
	<div class="content-wrap pages">
		<h1>Контакты</h1>
		
		<div class="row">
			<div class="col-md-6">
				<h2>Галерея «Интерьеры Махараджей»</h2>
				<div><b>адрес</b>: ARTPLAY - Москва, Нижняя Сыромятническая д.10, стр.2</div>
				<div><b>режим работы</b>: ежедневно <strong>11:00–20:00</strong>.</div>
				<div><b>телефон</b>: <strong class="call_phone_1_3">+7 (903) 103-53-09</strong></div>
			</div>
			<div class="col-md-6">
				<?$APPLICATION->IncludeComponent(
					"bitrix:map.yandex.view",
					".default",
					array(
						"COMPONENT_TEMPLATE" => ".default",
						"CONTROLS" => array(
							0 => "SMALLZOOM",
						),
						"INIT_MAP_TYPE" => "MAP",
						"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.75195899999372;s:10:\"yandex_lon\";d:37.67094999999996;s:12:\"yandex_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.670858804893;s:3:\"LAT\";d:55.752111026716;s:4:\"TEXT\";s:60:\"Нижняя Сыромятническая д. 10 стр. 2\";}}}",
						"MAP_HEIGHT" => "300",
						"MAP_ID" => "",
						"MAP_WIDTH" => "600",
						"OPTIONS" => array(
							0 => "ENABLE_DRAGGING",
						)
					),
					false
				);?>
			</div>
		</div>
	</div>
	<div class="content-wrap pages">
		
		<div class="row">
			<div class="col-md-6">
				<h2>Мебельный центр «Гранд»</h2>
				<div><b>адрес</b>: ТК «Гранд» - Московская обл., г. Химки, Бутаково, д.4, вход №1, 2-й этаж.</div>
				<div><b>режим работы</b>: ежедневно <strong>11:00–21:00</strong>.</div>
				<div><b>телефон</b>: <strong class="call_phone_1_3">+7 (968) 867-62-85</strong></div>
			</div>
			<div class="col-md-6">
				<?$APPLICATION->IncludeComponent(
					"bitrix:map.yandex.view",
					".default",
					Array(
						"COMPONENT_TEMPLATE" => ".default",
						"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
						"INIT_MAP_TYPE" => "MAP",
						"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.88666690391156;s:10:\"yandex_lon\";d:37.43681718833397;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.436817188334;s:3:\"LAT\";d:55.886666903925;s:4:\"TEXT\";s:39:\"Интерьеры Махараджей\";}}}",
						"MAP_HEIGHT" => "300",
						"MAP_ID" => "",
						"MAP_WIDTH" => "600",
						"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
					)
				);?>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>