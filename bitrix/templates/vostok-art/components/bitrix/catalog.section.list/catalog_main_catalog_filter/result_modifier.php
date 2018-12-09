<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach($arResult["SECTIONS"] as &$arItem)
{


  $res = CIBlockElement::GetByID($arItem["ID"]);



  if($ar_res = $res->GetNext())
  {
     $arItem["PREVIEW_PICTURE"] = CFile::GetFileArray($ar_res["PREVIEW_PICTURE"]);

  }



    if (is_array($arItem["PREVIEW_PICTURE"]))
      {

    $arFileTmp = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"], array("width" => 200, "height" => 200), BX_RESIZE_IMAGE_EXACT, true);


                $arResult["ITEMS"][$key]["PREVIEW_PICTURE_200"] = array(
                        "SRC" => $arFileTmp["src"],
                        "WIDTH" => 200,
                        "HEIGHT" => 200,
                );

        }

}

?>