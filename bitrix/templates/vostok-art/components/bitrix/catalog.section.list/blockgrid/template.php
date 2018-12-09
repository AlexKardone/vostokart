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


if ($arResult["SECTIONS_COUNT"] > 0)
{

		?>
		
		<?/*?>
			<pre>
				<?print_r($arResult)?>
			</pre>
		<?*/?>	
		
		
			<div class="large-12 columns">
				<ul class="small-block-grid-1 medium-block-grid-3 large-block-grid-5 arrivals">			
				<?


	foreach($arResult['SECTIONS'] as $arSection) {
			
					$intCurrentDepth = 1;
					$boolFirst = true;
//					foreach ($arColumn as &$arSection)
//					{
						$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
						$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
		
						if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL'])
						{
							if (0 < $intCurrentDepth)
								echo "\n",str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']),'<ul>';
						}
						elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL'])
						{
							if (!$boolFirst)
								echo '</li>';
						}
						else
						{
							while ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL'])
							{
								echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
								$intCurrentDepth--;
							}
							echo str_repeat("\t", $intCurrentDepth-1),'</li>';
						}
		
						echo (!$boolFirst ? "\n" : ''),str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);
						/*
						?>
							<li id="<?=$this->GetEditAreaId($arSection['ID']);?>"<?=($curDir == $arSection['SECTION_PAGE_URL']) ? ' class="active"' : ''?>>
								<a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>">
									<? echo $arSection["NAME"];?>
									<?
										if ($arParams["COUNT_ELEMENTS"])
										{
											?> (<? echo $arSection["ELEMENT_CNT"]; ?>) <?
										}
									?>
								</a>
								<?
								*/
								?>
								
							<li id="<?=$this->GetEditAreaId($arSection['ID']);?>"<?=($curDir == $arSection['SECTION_PAGE_URL']) ? ' class="active"' : ''?>>
								<a class="item" href="<?=$arSection['SECTION_PAGE_URL']?>">

									<?
										if (isset($arSection["PICTURE"]) && intval($arSection["PICTURE"]) > 0)
											$img = CFile::ResizeImageGet($arSection["PICTURE"], array("width" => 300, "height" => 300), BX_RESIZE_IMAGE_EXACT);
										else
											$img['src'] = '/images/noimage.jpg';
									?>
				
									<img src="<?=$img['src']//=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />					
									<span class="info">
										<?=$arSection['NAME']?>
									</span>
								</a>

								
								<?
		
						$intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
						$boolFirst = false;
//					}
					unset($arSection);
					while ($intCurrentDepth > 1)
					{
						echo '</li>',"\n",str_repeat("\t", $intCurrentDepth),'</ul>',"\n",str_repeat("\t", $intCurrentDepth-1);
						$intCurrentDepth--;
					}
					if ($intCurrentDepth > 0)
					{
						echo '</li>',"\n";
					}
	}

	
					
				?>
				</ul>
			</div>
		<?
}
?>