<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$rootSectionsCount 	= 0;
$lastDepthLevel 	= 0;
$childCounter 		= 1;
$arStr 				= array();


// clean empty folders
foreach ($arResult['SECTIONS'] as $key => &$arSection)
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
foreach ($arResult['SECTIONS'] as &$arSection)
{


	if (!$arSection['PICTURE']) {
			
		$arFilter = array('IBLOCK_ID' => 7, 'SECTION_ID' => $arSection['ID'], 'INCLUDE_SUBSECTIONS' => "Y" ,'!DETAIL_PICTURE' => false);


		CModule::IncludeModule("iblock");
		
		$arEl = CIBlockElement::GetList(Array("RAND" => "ASC"), $arFilter, false, Array("nTopCount" => 1));
				
		
		
		while($ob = $arEl->GetNext()) {

			$arSection['PICTURE'] = $ob['DETAIL_PICTURE'];
		}
		
		
		
	}
	
	/*
	
//	if ($lastDepthLevel > $arSection['DEPTH_LEVEL'] && $counter >= $estimatedSectionsInCol) {
	if ($arSection['DEPTH_LEVEL'] == 1 && $counter >= $estimatedSectionsInCol) {
	
		$counter = 0;
		if ($col < 3)
			$col++;
	
	}

	$arStr[$col][] = $arSection;	
	$counter++;
	*/
}


//$arResult['SECTIONS'] = $arStr;

?>