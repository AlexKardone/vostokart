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


$curDir = $APPLICATION->GetCurDir();


$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>

<ul id="sidenav">

<?
if ($arResult["SECTIONS_COUNT"] > 0)
{
	foreach($arResult['SECTIONS'] as $arColumn) {

		$intCurrentDepth = 1;
		$boolFirst = true;
		
			
			
		foreach ($arColumn as &$arSection)
		{
			if($arSection['UF_SITE_VIEW']!=0) {
				continue;
			}
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
         if ($_GET['dev'] =='Y')
           {
           	// var_dump($curDir);
           }
						?>
							<li id="<?=$this->GetEditAreaId($arSection['ID']);?>" class="sidenav-item<?=($curDir == $arSection['SECTION_PAGE_URL']) ? ' active' : ''?>">

								<a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>" class="<?=($arSection['RELATIVE_DEPTH_LEVEL'] == 1) ? ' rootcat' : ' childcat'?>">
									<? if ($arSection['RELATIVE_DEPTH_LEVEL'] == 1):?>
										<div class="icon-more"></div>
									<? endif; ?>
									<div class="title"><? echo $arSection["NAME"];?></div>
									<? if ($arParams['COUNT_ELEMENTS']):?>
									<div class="num"><? echo $arSection["ELEMENT_CNT"] ?></div>
									<? endif; ?>
								</a>
								<?

						$intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
						$boolFirst = false;
					}
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
}
?>
</ul>