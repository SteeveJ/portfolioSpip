<?php

/*
 * Squelette : ../plugins-dist/sites/prive/squelettes/navigation/site_edit.html
 * Date :      Wed, 03 Jun 2015 10:33:29 GMT
 * Compile :   Thu, 04 Jun 2015 21:55:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/squelettes/navigation/site_edit.html
// Temps de compilation total: 0.160 ms
//

function html_dd8e9b68cded847beb68cc5a20cb7d15($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_dd8e9b68cded847beb68cc5a20cb7d15', $Cache, $page, '../plugins-dist/sites/prive/squelettes/navigation/site_edit.html');
}
?>