<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-5 arrivals">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

			<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<a class="item" href="<?=$arItem['DETAIL_PAGE_URL']?>">
					<?
						$img = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array("width" => 300, "height" => 300), BX_RESIZE_IMAGE_EXACT);
					?>
					<img src="<?=$img['src']//=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />					
					<span class="info">
						<?=$arItem['NAME']?>
					</span>
				</a>
			</li>

<?endforeach;?>


</ul>