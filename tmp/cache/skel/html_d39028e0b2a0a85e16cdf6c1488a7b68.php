<?php

/*
 * Squelette : ../prive/squelettes/navigation/rubrique_edit.html
 * Date :      Wed, 03 Jun 2015 10:34:00 GMT
 * Compile :   Thu, 04 Jun 2015 12:25:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/rubrique_edit.html
// Temps de compilation total: 0.080 ms
//

function html_d39028e0b2a0a85e16cdf6c1488a7b68($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_d39028e0b2a0a85e16cdf6c1488a7b68', $Cache, $page, '../prive/squelettes/navigation/rubrique_edit.html');
}
?>