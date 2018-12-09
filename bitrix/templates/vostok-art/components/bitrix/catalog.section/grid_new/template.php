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

if (!empty($arResult['ITEMS']))
{

  $templateData = array(
    'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/style.css',
    'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME']
  );

  CJSCore::Init(array("popup"));
  $arSkuTemplate = array();
  if (!empty($arResult['SKU_PROPS']))
  {
    foreach ($arResult['SKU_PROPS'] as &$arProp)
    {
      ob_start();
      if ('TEXT' == $arProp['SHOW_MODE'])
      {
        if (5 < $arProp['VALUES_COUNT'])
        {
          $strClass = 'bx_item_detail_size full';
          $strWidth = ($arProp['VALUES_COUNT']*20).'%';
          $strOneWidth = (100/$arProp['VALUES_COUNT']).'%';
          $strSlideStyle = '';
        }
        else
        {
          $strClass = 'bx_item_detail_size';
          $strWidth = '100%';
          $strOneWidth = '20%';
          $strSlideStyle = 'display: none;';
        }
      }
      elseif ('PICT' == $arProp['SHOW_MODE'])
      {
        if (5 < $arProp['VALUES_COUNT'])
        {
          $strClass = 'bx_item_detail_scu full';
          $strWidth = ($arProp['VALUES_COUNT']*20).'%';
          $strOneWidth = (100/$arProp['VALUES_COUNT']).'%';
          $strSlideStyle = '';
        }
        else
        {
          $strClass = 'bx_item_detail_scu';
          $strWidth = '100%';
          $strOneWidth = '20%';
          $strSlideStyle = 'display: none;';
        }
      }
      $arSkuTemplate[$arProp['CODE']] = ob_get_contents();
      ob_end_clean();
    }
    unset($arProp);
  }

  if ($arParams["DISPLAY_TOP_PAGER"])
  {
    ?><? echo $arResult["NAV_STRING"]; ?><?
  }

  $strElementEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT");
  $strElementDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE");
  $arElementDeleteParams = array("CONFIRM" => GetMessage('CT_BCS_TPL_ELEMENT_DELETE_CONFIRM'));
?>



<?
$i = 0;
foreach ($arResult['ITEMS'] as $key => $arItem)
{

  if (!$arItem['DETAIL_PICTURE']['SRC'])
    continue;

  // if ($i > 4)
    // break;

  $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strElementEdit);
  $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strElementDelete, $arElementDeleteParams);
  $strMainID = $this->GetEditAreaId($arItem['ID']);

  $arItemIDs = array(
    'ID' => $strMainID,
    'PICT' => $strMainID.'_pict',
    'SECOND_PICT' => $strMainID.'_secondpict',

    'QUANTITY' => $strMainID.'_quantity',
    'QUANTITY_DOWN' => $strMainID.'_quant_down',
    'QUANTITY_UP' => $strMainID.'_quant_up',
    'QUANTITY_MEASURE' => $strMainID.'_quant_measure',
    'BUY_LINK' => $strMainID.'_buy_link',
    'SUBSCRIBE_LINK' => $strMainID.'_subscribe',

    'PRICE' => $strMainID.'_price',
    'DSC_PERC' => $strMainID.'_dsc_perc',
    'SECOND_DSC_PERC' => $strMainID.'_second_dsc_perc',

    'PROP_DIV' => $strMainID.'_sku_tree',
    'PROP' => $strMainID.'_prop_',
    'DISPLAY_PROP_DIV' => $strMainID.'_sku_prop',
    'BASKET_PROP_DIV' => $strMainID.'_basket_prop',
  );

  $strObName = 'ob'.preg_replace("/[^a-zA-Z0-9_]/", "x", $strMainID);

  $strTitle = (
    isset($arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"]) && '' != isset($arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"])
    ? $arItem["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"]
    : $arItem['NAME']
  );

      $img = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array("width" => 200, "height" => 200), BX_RESIZE_IMAGE_EXACT);
  ?>
    <div class="col-md-4 col-6">
        <div class="cat-item-wrap">
                  <a href="<? echo $arItem['DETAIL_PAGE_URL']; ?>">
                      <div class="image-wrap"><img src="<? echo $img['src']; ?>"></div>
                      <div class="title"><? echo $strTitle; ?></div>
                      <div class="article">Артикул: <?=$arItem['PROPERTIES']['CML2_ARTICLE']['VALUE']?></div>
                        <?if($arItem['CATALOG_PRICE_2']):?><div class="price" style="text-align:center;padding-bottom:10px "><?=$arItem['CATALOG_PRICE_2']?> руб.</div><?endif;?>
                  </a>
        </div>
    </div>
<?

$i++;?>
<?
}
?>

<?
  if ($arParams["DISPLAY_BOTTOM_PAGER"])
  {
    ?><? echo $arResult["NAV_STRING"]; ?><?
  }
}
?>
</div>