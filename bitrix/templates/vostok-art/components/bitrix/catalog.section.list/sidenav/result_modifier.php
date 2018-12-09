<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$rootSectionsCount 	= 0;
$lastDepthLevel 	= 0;
$childCounter 		= 1;
$arStr 				= array();


//$curDir = $APPLICATION->GetCurDir();


// clean empty folders
foreach ($arResult['SECTIONS'] as $key => $arSection)
{
	if ($arSection["ELEMENT_CNT"] == 0)
		unset($arResult['SECTIONS'][$key]);

	if ($arSection['DEPTH_LEVEL'] != 1)
		$childCounter++;
}

$totalSections = $arResult['SECTIONS_COUNT'];
$estimatedSectionsInCol = intval( $childCounter / 3 ) - 1;


$counter = 1;
$col = 0;

// make new columns
foreach ($arResult['SECTIONS'] as $key => $arSection)
{

//	if ($lastDepthLevel > $arSection['DEPTH_LEVEL'] && $counter >= $estimatedSectionsInCol) {
	if ($arSection['DEPTH_LEVEL'] == 1 && $counter >= $estimatedSectionsInCol) {

		$counter = 0;
		if ($col < 3)
			$col++;

	}

	$arStr[$col][] = $arSection;
	$counter++;
}

	$arFilterMore = array("PROPERTY_STRANA_PROISKHOZHDENIYA" => "Япония");


	$japan = array(
		'SECTION_PAGE_URL' => '/catalog/japan/',
		'NAME' => 'Япония',
		'RELATIVE_DEPTH_LEVEL' => 1,
		'ELEMENT_CNT' => CIBlockElement::GetList(false, $arFilterMore, array())

		);

$arFilterMore = array("PROPERTY_STRANA_PROISKHOZHDENIYA" => "Таиланд");
	$thailand = array(
		'SECTION_PAGE_URL' => '/catalog/thailand/',
		'NAME' => 'Таиланд',
		'RELATIVE_DEPTH_LEVEL' => 1,
		'ELEMENT_CNT' => CIBlockElement::GetList(false, $arFilterMore, array())
		);
$arFilterMore = array("PROPERTY_STRANA_PROISKHOZHDENIYA" => "Индия");
	$indian = array(
		'SECTION_PAGE_URL' => '/catalog/indian/',
		'NAME' => 'Индия',
		'RELATIVE_DEPTH_LEVEL' => 1,
		'ELEMENT_CNT' => CIBlockElement::GetList(false, $arFilterMore, array())
		);

$arResult['SECTIONS'] = $arStr;
// $arResult['SECTIONS'][][] = $japan;
// $arResult['SECTIONS'][][] = $thailand;
// $arResult['SECTIONS'][][] = $indian;

?>