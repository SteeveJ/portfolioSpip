<?php

/*
 * Squelette : ../prive/squelettes/top/plan.html
 * Date :      Wed, 03 Jun 2015 10:33:59 GMT
 * Compile :   Thu, 04 Jun 2015 12:52:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/plan.html
// Temps de compilation total: 0.335 ms
//

function html_e9f20125064a5f6051671c7cbfe169fe($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1>' .
_T('public|spip|ecrire:plan_site') .
'</h1>
' .
interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))));

	return analyse_resultat_skel('html_e9f20125064a5f6051671c7cbfe169fe', $Cache, $page, '../prive/squelettes/top/plan.html');
}
?>