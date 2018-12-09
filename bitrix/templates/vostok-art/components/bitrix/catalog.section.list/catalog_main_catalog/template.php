<div class="row">

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
		if($arColumn['UF_SITE_VIEW']!=0) {
			continue;
		}
?>

	 <div class="col-md-2 col-6">
		 <div class="cat-item-wrap">
			 <a href="<? echo $arColumn["SECTION_PAGE_URL"];?>">
				 <div class="image-wrap">
					 <img src="<?=$arColumn['PICTURE']['SRC']?>">
				 </div>
				 <div class="title"><? echo $arColumn["NAME"];?></div>
			 </a>
		 </div>
	 </div>
<?
}

}
?>
</div>