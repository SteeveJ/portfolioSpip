<?php

/*
 * Squelette : ../prive/squelettes/navigation/article_edit.html
 * Date :      Wed, 03 Jun 2015 10:34:00 GMT
 * Compile :   Thu, 04 Jun 2015 12:30:52 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/article_edit.html
// Temps de compilation total: 0.208 ms
//

function html_16a725b038f805fdc13017a4505ae7a4($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_16a725b038f805fdc13017a4505ae7a4', $Cache, $page, '../prive/squelettes/navigation/article_edit.html');
}
?>