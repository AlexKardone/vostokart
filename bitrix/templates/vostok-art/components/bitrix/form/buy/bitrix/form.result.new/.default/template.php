<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?><?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>

<div style="max-width:400px">
  <h2>Оформление заказа</h2>
  <div>Оставьте ваши данные и наш менеджер свяжется с вами!</div><br>
<?
foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
  {
  ?>
  <div>
  <label for=""><?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
        <span class="error-fld" title="<?=$arResult["FORM_ERRORS"][$FIELD_SID]?>"></span>
        <?endif;?>
        <?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?>
        <?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>
        </label>
  <?=$arQuestion["HTML_CODE"]?>
</div>
  <?
  } //endwhile
  ?>



  <input class="button" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="Отправить запрос" onclick="yaCounter32349185.reachGoal('zayvka'); fbq('track', 'Lead'); ga('send', 'event', 'zayvka', 'click'); return true;" />
</div>
<br />
<?
/***********************************************************************************
            form questions
***********************************************************************************/
?>
<?
if($arResult["isUseCaptcha"] == "Y")
{
?>
    <tr>
      <th colspan="2"><b><?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?></b></th>
    </tr>
    <tr>
      <td> </td>
      <td><input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" /><img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" /></td>
    </tr>
    <tr>
      <td><?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?><?=$arResult["REQUIRED_SIGN"];?></td>
      <td><input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" /></td>
    </tr>
<?
} // isUseCaptcha
?>
<p>
<?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>
</p>
<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
?>