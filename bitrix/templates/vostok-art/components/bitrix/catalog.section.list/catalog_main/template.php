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

	if ($key%4==0)
	{
		?>
		<ul class="block_catalog_ul">
		<?
	}
?>


<li><a href="<? echo $arColumn["SECTION_PAGE_URL"];?>"><? echo $arColumn["NAME"];?></a></li>

<?
	if ($key%4==3)
	{
		?>
		</ul>
		<?
	}
	if ($key == 15)
		break;
}

}
?>
</div>
