<?
foreach($arResult["SEARCH"] as &$arItem)
{
  $res = CIBlockElement::GetByID($arItem["ITEM_ID"]);

  if($ar_res = $res->GetNext())
    $arItem["DETAIL_PICTURE"] = CFile::GetFileArray($ar_res["DETAIL_PICTURE"]);



    if (is_array($arItem["DETAIL_PICTURE"]))
      {

    $arFileTmp = CFile::ResizeImageGet($arItem["DETAIL_PICTURE"], array("width" => 200, "height" => 200), BX_RESIZE_IMAGE_EXACT, true);


                $arItem["PREVIEW_PICTURE_200"] = array(
                        "SRC" => $arFileTmp["src"],
                        "WIDTH" => 200,
                        "HEIGHT" => 200,
                );

        }

}
?>