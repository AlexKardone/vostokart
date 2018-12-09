<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
	'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME']
);

$strMainID = $this->GetEditAreaId($arResult['ID']);
$arItemIDs = array(
	'ID' => $strMainID,
	'PICT' => $strMainID.'_pict',
	'DISCOUNT_PICT_ID' => $strMainID.'_dsc_pict',
	'STICKER_ID' => $strMainID.'_sticker',
	'BIG_SLIDER_ID' => $strMainID.'_big_slider',
	'BIG_IMG_CONT_ID' => $strMainID.'_bigimg_cont',
	'SLIDER_CONT_ID' => $strMainID.'_slider_cont',
	'SLIDER_LIST' => $strMainID.'_slider_list',
	'SLIDER_LEFT' => $strMainID.'_slider_left',
	'SLIDER_RIGHT' => $strMainID.'_slider_right',
	'OLD_PRICE' => $strMainID.'_old_price',
	'PRICE' => $strMainID.'_price',
	'DISCOUNT_PRICE' => $strMainID.'_price_discount',
	'SLIDER_CONT_OF_ID' => $strMainID.'_slider_cont_',
	'SLIDER_LIST_OF_ID' => $strMainID.'_slider_list_',
	'SLIDER_LEFT_OF_ID' => $strMainID.'_slider_left_',
	'SLIDER_RIGHT_OF_ID' => $strMainID.'_slider_right_',
	'QUANTITY' => $strMainID.'_quantity',
	'QUANTITY_DOWN' => $strMainID.'_quant_down',
	'QUANTITY_UP' => $strMainID.'_quant_up',
	'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
	'QUANTITY_LIMIT' => $strMainID.'_quant_limit',
	'BUY_LINK' => $strMainID.'_buy_link',
	'ADD_BASKET_LINK' => $strMainID.'_add_basket_link',
	'COMPARE_LINK' => $strMainID.'_compare_link',
	'PROP' => $strMainID.'_prop_',
	'PROP_DIV' => $strMainID.'_skudiv',
	'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
	'OFFER_GROUP' => $strMainID.'_set_group_',
	'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
);
$strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);
$templateData['JS_OBJ'] = $strObName;

$strTitle = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]) && '' != $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_TITLE"]
	: $arResult['NAME']
);
$strAlt = (
	isset($arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]) && '' != $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	? $arResult["IPROPERTY_VALUES"]["ELEMENT_DETAIL_PICTURE_FILE_ALT"]
	: $arResult['NAME']
);
?>



<div class="row catalog-element" id="<? echo $arItemIDs['ID']; ?>">

	<div class="large-6 columns text-center">
		<?
			if (isset($arResult['DETAIL_PICTURE']['SRC'])):
				$img = $arResult['DETAIL_PICTURE']['SRC'];
			else:
				$img = "/images/noimage_detail.jpg";
			endif;
		?>
		<img id="<? echo $arItemIDs['PICT']; ?>" src="<?=$img?>" alt="<? echo $strAlt; ?>" />
	</div>
	<div class="large-6 columns">

		<div class="small-12 columns">

			<h1><?=$arResult['NAME']?></h1>

			<div class="info">
				<br>
				Артикул: <?=$arResult['PROPERTIES']['CML2_ARTICLE']['VALUE']?>
				<?
					$strReturn = '';

						if ($arResult['PROPERTIES']['SHIRINA']['VALUE'] > 0)
							$strReturn = $arResult['PROPERTIES']['SHIRINA']['VALUE']." x ";

						if ($arResult['PROPERTIES']['VYSOTA']['VALUE'] > 0)
							$strReturn .= $arResult['PROPERTIES']['VYSOTA']['VALUE']." x ";

						if ($arResult['PROPERTIES']['GLUBINA']['VALUE'] > 0)
							$strReturn .= $arResult['PROPERTIES']['GLUBINA']['VALUE'];

				?>

				<?=(strlen($strReturn) > 0) ? '<br>Габариты: '.$strReturn.' см.<br>' : ''?>


				<?
					foreach ($arResult['PRICES'] as $price) {
						if ($price['CAN_ACCESS'] == "Y") {

							if ($price['VALUE_VAT'] > $price['DISCOUNT_VALUE_VAT']) {
							?>
								<div class="price"><s><?=$price['PRINT_VALUE_VAT']?></s></div>
								<div class="discount"><?=$price['PRINT_DISCOUNT_VALUE_VAT']?></div>;
							<?
							} else {
							?>
								<div class="price"><?=$price['PRINT_VALUE_VAT']?></div>
							<?
							}
							?>
							<hr>
							<a class="button place-order">Купить</a>
							<a class="button ask">Задать вопрос</a>
							<hr>
							<?

						}
					}
				?>

				<?
					if ($arResult['DETAIL_TEXT_TYPE'] == 'html')
					{
						echo $arResult['DETAIL_TEXT'];
					}
					else
					{
					?>
						<p><?=$arResult['DETAIL_TEXT'];?></p>
					<?
					}
				?>


				<?//print_r($arResult)?>

			</div>

		</div>


	</div>
</div>