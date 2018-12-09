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
$this->setFrameMode(true);?>

<form action="<?=$arResult["FORM_ACTION"]?>" class="row search-aside">
	
	<div class="large-12 medium-12 small-12 columns">
		<div class="row collapse">
			<div class="small-9 columns">
				<?if($arParams["USE_SUGGEST"] === "Y"):?>
					<?$APPLICATION->IncludeComponent(
								"bitrix:search.suggest.input",
								"",
								array(
									"NAME" => "q",
									"VALUE" => "",
									"INPUT_SIZE" => 15,
									"DROPDOWN_SIZE" => 10,
								),
								$component, array("HIDE_ICONS" => "Y")
					);?>
				<?else:?>
					<input type="text" name="q" value="" size="15" maxlength="50" placeholder="Поиск по сайту" />
				<?endif;?>
			</div>
			<div class="small-3 columns">
				<input name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" class="button postfix radius secondary" />
			</div>
		</div>
		
	</div>

</form>