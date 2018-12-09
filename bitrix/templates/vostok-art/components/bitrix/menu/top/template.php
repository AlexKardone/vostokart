<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
<dl class="sub-nav top">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<dd><a href="<?=$arItem["LINK"]?>" class="active"><?=$arItem["TEXT"]?></a></dd>
	<?else:?>
		<dd><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></dd>
	<?endif?>
	
<?endforeach?>

</dl>

<?endif?>