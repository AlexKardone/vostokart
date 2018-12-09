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
<div class="catalog-item" id="<? echo $arItemIDs['ID']; ?>">
    <div class="row">
        <div class="col-md-6">
            <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
            <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
            <div class="fotorama" data-autoplay="5000" data-width="100%" data-fit="contain" data-allow-fullscreen="true">
                <?
                if (isset($arResult['DETAIL_PICTURE']['SRC'])):
                    $img = $arResult['DETAIL_PICTURE']['SRC'];
                else:
                    $img = "/images/noimage_detail.jpg";
                endif;
                ?>
                <img id="<?=$arResult['DETAIL_PICTURE']['SRC']?>" src="<?=$img?>" alt="<? echo $strAlt; ?>" />
                <a href="<?=$arResult['DETAIL_PICTURE']['SRC']?>" class="images_preview"  rel="group1" onclick="return false;">
                    <img id="<? echo $arItemIDs['PICT']; ?>" src="<?=$img?>" alt="<? echo $strAlt; ?>" />
                </a>
                <?foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $files):?>
                    <? $arFile = CFile::GetFileArray($files);
                    if( $arFile) :?>
                        <?
                        $image = CFile::ResizeImageGet($files, array("width" => 200, "height" => 200), BX_RESIZE_IMAGE_EXACT, true);
                        ?>
                        <a href="<?=$arFile["SRC"]?>" data-title="<?=$arFile["ORIGINAL_NAME"]?>" style="margin-right: 25px;" class="images_preview" rel="group1" onclick="return false;">
                            <img src="<?=$image["src"]?>" alt="img" width="200" height="200">
                        </a>
                    <? endif; ?>
                <?endforeach?>
            </div>

        </div>
        <div class="col-md-6">
            <h1><?=$arResult['NAME']?></h1>

            <div class="info">
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
                <br>
                <?foreach($arResult['DISPLAY_PROPERTIES'] as $prop):?>
                    <?if($prop['NAME'] ==  'Глубина' && $prop['VALUE'] != 0):?>
                        <?=$prop['NAME']?>: <?=$prop['VALUE']?><br>
                    <?elseif($prop['NAME'] !=  'Глубина'):?>
                        <?=$prop['NAME']?>: <?=$prop['VALUE']?><br>
                    <?endif?>


                <?endforeach?>


                <?

                foreach ($arResult['PRICES'] as $price) {
                    // foreach ($arResult['OFFERS'][0]['PRICES'] as $price) {
                    ?>
                    <br>
                    <div class="buy-block">
                        <?
                        if ($arResult['PROPERTIES']['SKIDKA']['VALUE'])
                        {
                            $discount = $price['VALUE_VAT'] - ($price['VALUE_VAT'] / 100 * $arResult['PROPERTIES']['SKIDKA']['VALUE']);
                            ?>
                            <div class="price"><s><?=$price['PRINT_DISCOUNT_VALUE_VAT']?></s><div class="percents">
                                    -<?=$arResult['PROPERTIES']['SKIDKA']['VALUE']?>%
                                </div></div>
                            <div class="discount"><?=CurrencyFormat($discount , "RUB")?></div>
                            <?
                        }
                        else
                        {
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
                        }
                        ?>
                        <?php
                        $img = null;
                        if (isset($arResult['DETAIL_PICTURE']['SRC'])) {
                            $img = $arResult['DETAIL_PICTURE']['SRC'];
                        } else {
                            $img = "/images/noimage_detail.jpg";
                        }
                        ?>
                        <br>
                        <a href="#" onclick="return false;" class="button place-order popup-to-card" id="buy" data-name="<?=$arResult['NAME']?> (<?=$arResult['PROPERTIES']['CML2_ARTICLE']['VALUE']?>)" data-picture="<?=$img?>">Добавить в корзину</a>
                        <div class="remainder"><b>Остаток:</b> <? echo $arResult['CATALOG_QUANTITY']; ?></div>
                    </div>
                    <hr>
                    <?

                }
                ?>

            </div>
        </div>
    </div>
</div>