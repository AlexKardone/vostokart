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
			<h1><?=$arResult['NAME']?></h1>
  <ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-<?=intval($arParams['NUM_OF_COLS'] > 0) ? intval($arParams['NUM_OF_COLS']) : '5'?> arrivals">

  <?
  if ($arResult['SECTIONS'])
{
  $is_cat = true;
  $arResult['ITEMS'] = $arResult['SECTIONS'];
}


  foreach ($arResult['ITEMS'] as $key => $arItem)
   {
		if($arItem['UF_SITE_VIEW']!=0) {
				continue;
			}
    if ($is_cat)
      $url = $arItem['SECTION_PAGE_URL'];
    else
     $url = $arItem['DETAIL_PAGE_URL'];


            if (isset($arItem["DETAIL_PICTURE"]["SRC"]))
              $img = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array("width" => 300, "height" => 300), BX_RESIZE_IMAGE_EXACT);
            else if (!$is_cat)
            {
                // continue;
              $img['src'] = '/images/noimage.jpg';
            }
            else {
                $img['src'] = CFile::GetPath($arItem['PICTURE']);
            }

  $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
  $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
  ?>

      <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <a class="item" href="<?=$url?>">
          <img src="<?=$img['src']//=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />
          <span class="info">
            <?=$arItem['NAME']?><br><br>
            <?if($arItem['PROPERTIES']['CML2_ARTICLE']['VALUE']):?>
              <div>Артикул: <?=$arItem['PROPERTIES']['CML2_ARTICLE']['VALUE']?></div>
            <?endif;?>
            <?if(!empty($arItem['PROPERTIES']['SKIDKA']['VALUE']) && $arItem['CATALOG_PRICE_2']):?>
<?
$discount = $arItem['CATALOG_PRICE_2'] - ($arItem['CATALOG_PRICE_2'] / 100 * $arItem['PROPERTIES']['SKIDKA']['VALUE']);
?>
<!--
<?
// echo "<pre>";
// print_r($arItem['PROPERTIES']['SKIDKA']['VALUE']);
// echo "</pre>";
?>
 -->
<div class="price_old"><s><?=$arItem['CATALOG_PRICE_2']?> руб.</s></div>
<div class="discount"><?=CurrencyFormat($discount , "RUB")?></div>

            <?else:?>

            <?if($arItem['CATALOG_PRICE_2']):?><div class="price"><?=$arItem['CATALOG_PRICE_2']?> руб.</div>
            <?endif;?>
            <?endif?>

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

<div class="category_text"><?=$arResult['DESCRIPTION']?></div>