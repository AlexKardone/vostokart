<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<nav class="breadcrumbs">';

$num_items = count($arResult);

// echo "<pre>";
// print_r($arResult);
// echo "</pre>";
// die;

for($index = 0, $itemSize = $num_items; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a>';
	else
		$strReturn .= '<a class="current" href="#">'.$title.'</a>';
}

$strReturn .= '</nav>';

return $strReturn;
?>111