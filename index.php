<?php
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text==""){
    $reponse="CON Choisisez votre device\n";
    $reponse.="1. USD\n";
    $reponse.="2. CDF\n";
    $reponse.="3. Retour";
}

elseif ($text=="1"){
    $reponse="CON Paiement CDF?\n";
    $reponse.="1. Courant\n";
    $reponse.="2. Regideso";
    $reponse.="3. Retour";
}

elseif ($text=="2"){
    $reponse="CON Courant en CDF\n";
    $reponse.="1. Socode\n";
    $reponse.="2. Virunga SARL\n";
    $reponse.="3. SNEL";
    $reponse.="4. Retour";
}

elseif ($text=="2*1" || $text=="2*2" || $text=="2*3"){
    $reponse="CON Entrer le numero du compteur Socode : ";
}

elseif ($text=="2*1*3131"){
    $reponse="CON Acha en Kilo Watter\n";
    $reponse.="1. 10Kw\n";
    $reponse.="2. 20Kw\n";
    $reponse.="3. 30Kw\n";
    $reponse.="4. Autre\n";
    $reponse.="5. Retour\n";
}

elseif ($text=="2*1*3131*2" || $text=="2*1*3131*1" || $text=="2*1*3131*3"){
    $reponse="CON Confirmer votre achat";
}
elseif ($text=="2*1*3131*2*1234" || $text=="2*1*3131*1*1234" || $text=="2*1*3131*3*1234"){
$reponse="END Merci un message vous sera envoyer pour la confirmation, verification en cours de votre achat...";
}
elseif ($text=="4"){
$reponse="END Votre balance et de 30 USD";
}

elseif ($text=="5"){
$reponse="END Proble de con";
}
header('Content-type:text/plain');
echo $reponse;