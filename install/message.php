<?php
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

global $APPLICATION, $geoipErrors; 

if (empty($geoipErrors))
    echo \CAdminMessage::ShowNote(Loc::getMessage("MOD_INST_OK"));
else
    echo \CAdminMessage::ShowMessage(
        Array(
            "TYPE"      => "ERROR",
            "MESSAGE"   => Loc::getMessage("MOD_INST_ERR"), 
            "DETAILS"   => implode("<br>", $geoipErrors),
            "HTML"      => true
        ));

?>
<form action="<?echo $APPLICATION->GetCurPage()?>">
	<input type="hidden" name="lang" value="<?=LANG?>">
	<input type="submit" name="" value="<?=Loc::getMessage("MOD_BACK")?>">
<form>