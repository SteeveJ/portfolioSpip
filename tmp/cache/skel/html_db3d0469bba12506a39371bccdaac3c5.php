<?php

/*
 * Squelette : ../prive/squelettes/navigation/rubriques.html
 * Date :      Wed, 03 Jun 2015 10:34:00 GMT
 * Compile :   Thu, 04 Jun 2015 13:32:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/rubriques.html
// Temps de compilation total: 4.489 ms
//

function html_db3d0469bba12506a39371bccdaac3c5($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="ajax">
' .
executer_balise_dynamique('FORMULAIRE_EDITER_LOGO',
	array('rubrique','0','',@serialize($Pile[0])),
	array('../prive/squelettes/navigation/rubriques.html','html_db3d0469bba12506a39371bccdaac3c5','',2,$GLOBALS['spip_lang'])) .
'</div>
');

	return analyse_resultat_skel('html_db3d0469bba12506a39371bccdaac3c5', $Cache, $page, '../prive/squelettes/navigation/rubriques.html');
}
?>