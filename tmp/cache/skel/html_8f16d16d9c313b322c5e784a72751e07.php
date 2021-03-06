<?php

/*
 * Squelette : ../prive/squelettes/inclure/menu-navigation.html
 * Date :      Wed, 03 Jun 2015 10:33:59 GMT
 * Compile :   Thu, 04 Jun 2015 13:40:22 GMT
 * Boucles :   _menusous, _menu
 */ 

function BOUCLE_menusoushtml_8f16d16d9c313b322c5e784a72751e07(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'sousmenu')));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_menusous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle");
		$command['orderby'] = array();
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/menu-navigation.html','html_8f16d16d9c313b322c5e784a72751e07','_menusous',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'libelle')))))!=='' ?
		((	'<li class="item' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'exec', null),true) == interdire_scripts(((($a = table_valeur($Pile[$SP]['valeur'], 'url')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts($Pile[$SP]['cle']))))) ?' ' :''))))!=='' ?
			($t2 . 'on execfound') :
			'') .
	'">
			<a href="' .
	interdire_scripts(bandeau_creer_url(((($a = table_valeur($Pile[$SP]['valeur'], 'url')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts($Pile[$SP]['cle'])),interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'urlArg')),@serialize($Pile[0]))) .
	'" class="bando2_' .
	interdire_scripts($Pile[$SP]['cle']) .
	'">
				') . $t1 . '
			</a>
		</li>') :
		'') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_menusous @ ../prive/squelettes/inclure/menu-navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_menuhtml_8f16d16d9c313b322c5e784a72751e07(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(table_valeur($Pile["vars"], (string)'boutons', null));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_menu';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'cle', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'menu', null),true)),'','STRING')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/squelettes/inclure/menu-navigation.html','html_8f16d16d9c313b322c5e784a72751e07','_menu',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true) == 'contenu') ? (	'<h1 class="grostitre">' .
	interdire_scripts(_T(table_valeur($Pile[$SP]['valeur'], 'libelle'))) .
	'</h1>'):'<div class="navigation">')) .
'

	<ul class=\'liste_items sous_navigation\'>
	' .
BOUCLE_menusoushtml_8f16d16d9c313b322c5e784a72751e07($Cache, $Pile, $doublons, $Numrows, $SP) .
'
	</ul>

' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'bloc', null),true) != 'contenu')) ?' ' :''))))!=='' ?
		($t1 . '</div>') :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_menu @ ../prive/squelettes/inclure/menu-navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/squelettes/inclure/menu-navigation.html
// Temps de compilation total: 6.858 ms
//

function html_8f16d16d9c313b322c5e784a72751e07($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'boutons'] = definir_barre_boutons(definir_barre_contexte(@serialize($Pile[0])),'0')) .
BOUCLE_menuhtml_8f16d16d9c313b322c5e784a72751e07($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_8f16d16d9c313b322c5e784a72751e07', $Cache, $page, '../prive/squelettes/inclure/menu-navigation.html');
}
?>