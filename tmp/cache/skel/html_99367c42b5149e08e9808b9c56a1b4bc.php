<?php

/*
 * Squelette : ../plugins-dist/sites/prive/squelettes/navigation/sites.html
 * Date :      Wed, 03 Jun 2015 10:33:29 GMT
 * Compile :   Thu, 04 Jun 2015 21:55:42 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/squelettes/navigation/sites.html
// Temps de compilation total: 3.959 ms
//

function html_99367c42b5149e08e9808b9c56a1b4bc($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'open'] = boite_ouvrir('', 'raccourcis')) .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('importer', 'sites')?" ":""))))!=='' ?
		($t1 . (	'
	' .
	unique(table_valeur($Pile["vars"], (string)'open', null)) .
	'
' .
	filtre_icone_horizontale_dist(generer_url_ecrire('sites_import'),_T('sites:titre_importer_bookmarks'),'site-24.png') .
	'
')) :
		'') .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('exporter', 'sites')?" ":""))))!=='' ?
		($t1 . (	'
	' .
	unique(table_valeur($Pile["vars"], (string)'open', null)) .
	'
' .
	filtre_icone_horizontale_dist(generer_url_ecrire('sites_export'),_T('sites:titre_exporter_bookmarks'),'site-24.png') .
	'
')) :
		'') .
'
' .
(unique(table_valeur($Pile["vars"], (string)'open', null)) ? '':boite_fermer()));

	return analyse_resultat_skel('html_99367c42b5149e08e9808b9c56a1b4bc', $Cache, $page, '../plugins-dist/sites/prive/squelettes/navigation/sites.html');
}
?>