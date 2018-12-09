<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="block_collections">
	<a href="<?=$arResult["ITEMS"][0]['DETAIL_URL']?>">
		<img src="<?=$arResult["ITEMS"][0]['DETAIL_IMG_280']['SRC']?>" width="280" height="95">
	</a>
	<h3><?=$arResult["ITEMS"][0]['NAME']?></h3>

	<div class="block_collections_img clearfix">
		<?foreach($arResult["ITEMS"] as $key => $arElement):?>
			<?if($key > 0):?>
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
					<img src="<?=$arElement['DETAIL_IMG_72']['SRC']?>" width="72" height="72" alt="">
				</a>
			<?endif?>
		<?endforeach?>
		<a href="/catalog/" class="more">вся коллекция</a>
	</div>
</div>