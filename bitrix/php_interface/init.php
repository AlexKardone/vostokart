<?
AddEventHandler("search", "BeforeIndex", "BeforeIndexHandler") ;

function BeforeIndexHandler($arFields) {
$arrIblock = array(6); //ID инфоблоков, для которых производить модификацию

$arDelFields = array("DETAIL_TEXT", "PREVIEW_TEXT") ; //стандартные поля, которые нужно исключить

if (CModule::IncludeModule('iblock') && $arFields["MODULE_ID"] == 'iblock' && in_array($arFields["PARAM2"], $arrIblock) && intval($arFields["ITEM_ID"]) > 0){

$dbElement = CIblockElement::GetByID($arFields["ITEM_ID"]) ;
if ($arElement = $dbElement->Fetch()){
foreach ($arDelFields as $value){
if (isset ($arElement[$value]) && strlen($arElement[$value]) > 0){
$arFields["BODY"] = str_replace (CSearch::KillTags($arElement[$value]) , "", CSearch::KillTags($arFields["BODY"] ) );
}
}
}

return $arFields;
}
}
AddEventHandler('form', 'onAfterResultAdd', Array("MyClass","onAfterResultAddHandler"));
    class MyClass
    {

    function onAfterResultAddHandler($WEB_FORM_ID, $RESULT_ID){

        if ($WEB_FORM_ID == 1)
        {
        $arAnswer = CFormResult::GetDataByID($RESULT_ID,array(),
    $arResult,$arAnswer2);

        $name = $arAnswer['SIMPLE_QUESTION_601']['0']['USER_TEXT'];
        $phone = $arAnswer['SIMPLE_QUESTION_151']['0']['USER_TEXT'];
        $text = $arAnswer['SIMPLE_QUESTION_522']['0']['USER_TEXT'];
        $email = $arAnswer['SIMPLE_QUESTION_669']['0']['USER_TEXT'];

        $arSend = array(
            "FIO" => $name,
            "CURRENT_ITEM" => $current,
            "PHONE" => $phone,
            "EMAIL" => $email,
            "QUESTION" => $text,
            'RS_RESULT_ID' => $RESULT_ID,
            'RS_FORM_ID' => 1
            );

        CEvent::Send('FORM_FILLING_SIMPLE_FORM_1', SITE_ID ,$arSend);
        }

        }
    }

?>