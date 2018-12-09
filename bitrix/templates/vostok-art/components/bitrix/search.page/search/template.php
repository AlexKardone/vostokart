<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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

$arCloudParams = array(
	"SEARCH" => $arResult["REQUEST"]["~QUERY"],
	"TAGS" => $arResult["REQUEST"]["~TAGS"],
	"CHECK_DATES" => $arParams["CHECK_DATES"],
	"arrFILTER" => $arParams["arrFILTER"],
	"SORT" => $arParams["TAGS_SORT"],
	"PAGE_ELEMENTS" => $arParams["TAGS_PAGE_ELEMENTS"],
	"PERIOD" => $arParams["TAGS_PERIOD"],
	"URL_SEARCH" => $arParams["TAGS_URL_SEARCH"],
	"TAGS_INHERIT" => $arParams["TAGS_INHERIT"],
	"FONT_MAX" => $arParams["FONT_MAX"],
	"FONT_MIN" => $arParams["FONT_MIN"],
	"COLOR_NEW" => $arParams["COLOR_NEW"],
	"COLOR_OLD" => $arParams["COLOR_OLD"],
	"PERIOD_NEW_TAGS" => $arParams["PERIOD_NEW_TAGS"],
	"SHOW_CHAIN" => $arParams["SHOW_CHAIN"],
	"COLOR_TYPE" => $arParams["COLOR_TYPE"],
	"WIDTH" => $arParams["WIDTH"],
	"CACHE_TIME" => $arParams["CACHE_TIME"],
	"CACHE_TYPE" => $arParams["CACHE_TYPE"],
	"RESTART" => $arParams["RESTART"],
);

if(is_array($arCloudParams["arrFILTER"]))
{
	foreach($arCloudParams["arrFILTER"] as $strFILTER)
	{
		if($strFILTER=="main")
		{
			$arCloudParams["arrFILTER_main"] = $arParams["arrFILTER_main"];
		}
		elseif($strFILTER=="forum" && IsModuleInstalled("forum"))
		{
			$arCloudParams["arrFILTER_forum"] = $arParams["arrFILTER_forum"];
		}
		elseif(strpos($strFILTER,"iblock_")===0)
		{
			if (isset($arParams["arrFILTER_".$strFILTER]) && is_array($arParams["arrFILTER_".$strFILTER]))
			{
				foreach($arParams["arrFILTER_".$strFILTER] as $strIBlock)
					$arCloudParams["arrFILTER_".$strFILTER] = $arParams["arrFILTER_".$strFILTER];
			}
		}
		elseif($strFILTER=="blog")
		{
			$arCloudParams["arrFILTER_blog"] = $arParams["arrFILTER_blog"];
		}
		elseif($strFILTER=="socialnetwork")
		{
			$arCloudParams["arrFILTER_socialnetwork"] = $arParams["arrFILTER_socialnetwork"];
		}
	}
}

$APPLICATION->IncludeComponent("bitrix:search.tags.cloud", ".default", $arCloudParams, $component);

?>


<div class="container">
	<br>
	<div class="content-wrap">
		<h1><span>Поиск результатов по запросу</span> <strong><?=htmlspecialchars($_GET['q'])?></strong></h1>
		<?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>

		<?elseif($arResult["ERROR_CODE"]!=0):?>

		<?elseif(count($arResult["SEARCH"])>0):?>

			<?

// echo "<pre>";
// print_r($arResult["SEARCH"]);
// echo "</pre>";
// die;

			?>
			<div class="row">


			<?foreach($arResult["SEARCH"] as $arItem):?>
				<div class="col-md-3 col-6">
					<div class="cat-item-wrap">
						<a href="<?=$arItem["URL"]?>">
							<div class="image-wrap">
								<img src="<?=$arItem["PREVIEW_PICTURE_200"]["SRC"]?>" alt="">
							</div>
							<div class="title"><?=$arItem["TITLE"]?></div>
						</a>
					</div>
				</div>
			<?endforeach;?>

			<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N")
			{
				echo "<br><br>";
				echo $arResult["NAV_STRING"];
			}
			?>
			</div>
		<?else:?>
			<?ShowNote(GetMessage("SEARCH_NOTHING_TO_FOUND"));?>
		<?endif;?>
		<section class="block_another_search">
			<h1>Новый поиск:</h1>
			<form action="" method="get">
				<input type="hidden" name="tags" value="<?echo $arResult["REQUEST"]["TAGS"]?>" />

				<input type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" style="margin-right:20px;"><input type="submit" value="Поиск" class="button" />
				<input type="hidden" name="how" value="<?echo $arResult["REQUEST"]["HOW"]=="d"? "d": "r"?>" />

			</form>
		</section>
	</div>
</div>