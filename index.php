<?php
$sessionId=$_POST["sessionId"]?$_POST["sessionId"]:"jckbckhvcwhkvhckvwkcv";
$serviceCode=$_POST["serviceCode"]?$_POST["serviceCode"]:"23423";
$phoneNumber=$_POST["phoneNumber"]?$_POST["phoneNumber"]:"";
$text=$_POST["text"]?$_POST["text"]:"3";

if ($text==""){
    $reponse="Que veux tu?\n";
    $reponse.="1. Paiement courent\n";
    $reponse.="2. balance";
}elseif ($text=="1"){
    $reponse="Quelle societe?\n";
    $reponse.="1. socode\n";
    $reponse.="2. virunga SARL\n";
    $reponse.="3. SNEL";
}elseif ($text=="1*1" || $text=="1*2" || $text=="1*2"){
    $reponse="Entre le montant";
}elseif ($text=="1*1*20" || $text=="1*2*20" || $text=="1*2*20"){
    $reponse="Confiremer votre achat";
}elseif ($text=="1*1*20*1234" || $text=="1*2*20*1234" || $text=="1*2*20*1234"){
$reponse="END Votre achat et avec succes";
}
elseif ($text=="2"){
    $reponse="END Votre balance et de 30 USD";
}
elseif ($text=="3"){
    $reponse="END Proble de con";
}
header('Content-type:text/plain');
echo $reponse;