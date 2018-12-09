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

if (!empty($arResult['ITEMS']))
{
	$templateData = array(
		'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
		'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME']
	);

	if ($arParams["DISPLAY_TOP_PAGER"])
	{
		?><? echo $arResult["NAV_STRING"]; ?><?
	}

	$strElementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
	$strElementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
	$arElementDeleteParams = array("CONFIRM" => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));
?>


	<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-<?=intval($arParams['NUM_OF_COLS'] > 0) ? intval($arParams['NUM_OF_COLS']) : '5'?> arrivals">
	
	<?
	foreach ($arResult['ITEMS'] as $key => $arItem)
	{

	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

			<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<a class="item" href="<?=$arItem['DETAIL_PAGE_URL']?>">
					<?
						if (isset($arItem["DETAIL_PICTURE"]["SRC"]))
							$img = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array("width" => 300, "height" => 300), BX_RESIZE_IMAGE_EXACT);
						else
							$img['src'] = '/images/noimage.jpg';
					?>
					<img src="<?=$img['src']//=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />					
					<span class="info">
						<?=$arItem['NAME']?>
					</span>
				</a>
			</li>

	<?
	}
	?>
	
	</ul>

	<?
	if ($arParams["DISPLAY_BOTTOM_PAGER"])
	{
		?><? echo $arResult["NAV_STRING"]; ?><?
	}

}
?>