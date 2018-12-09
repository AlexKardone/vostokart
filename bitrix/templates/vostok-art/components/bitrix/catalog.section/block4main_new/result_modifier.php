<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//Make all properties present in order
//to prevent html table corruption


foreach($arResult["ITEMS"] as $key => $arItem)
 {
  if (is_array($arItem["DETAIL_PICTURE"]))
   {

    $arFileTmp = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array("width" => 72, "height" => 72), BX_RESIZE_IMAGE_EXACT, true);


                $arResult["ITEMS"][$key]["DETAIL_IMG_72"] = array(
                        "SRC" => $arFileTmp["src"],
                        "WIDTH" => 72,
                        "HEIGHT" => 72,
                );


    $arFileTmp = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array("width" => 280, "height" => 95), BX_RESIZE_IMAGE_EXACT, true);


                $arResult["ITEMS"][$key]["DETAIL_IMG_280"] = array(
                        "SRC" => $arFileTmp["src"],
                        "WIDTH" => 280,
                        "HEIGHT" => 95,
                );


        }

}


?>