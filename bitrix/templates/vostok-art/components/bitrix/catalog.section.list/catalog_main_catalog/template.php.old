			<div class="block_catalog_inn">
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


$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));


$curDir = $APPLICATION->GetCurDir();

// echo "<pre>"; print_r($arResult); echo "</pre>";

if ($arResult["SECTIONS_COUNT"] > 0)
	{
?>

<?

foreach($arResult['SECTIONS'] as $key =>  $arColumn)
 {
               if ($arColumn['ID'] == 246)
             continue;
?>

<a href="<? echo $arColumn["SECTION_PAGE_URL"];?>" class="block_arrivals block_arrivals__border">
				<img src="<?=$arColumn['PICTURE']['SRC']?>" width="200" height="200" alt="" style="height:200px">
				<span><i><? echo $arColumn["NAME"];?></i></span>
			</a>

<?
}

}
?>
</div>