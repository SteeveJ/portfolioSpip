<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_contenu.html
 * Date :      Wed, 03 Jun 2015 10:33:59 GMT
 * Compile :   Thu, 04 Jun 2015 13:56:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_contenu.html
// Temps de compilation total: 4.149 ms
//

function html_0513989880c6f048898059403dc2f270($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_contenu')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:onglet_contenu_site') .
'</h1>
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_ARTICLES',
	array(),
	array('../prive/squelettes/contenu/configurer_contenu.html','html_0513989880c6f048898059403dc2f270','',4,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_RUBRIQUES',
	array(),
	array('../prive/squelettes/contenu/configurer_contenu.html','html_0513989880c6f048898059403dc2f270','',8,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_LOGOS',
	array(),
	array('../prive/squelettes/contenu/configurer_contenu.html','html_0513989880c6f048898059403dc2f270','',12,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_FLUX',
	array(),
	array('../prive/squelettes/contenu/configurer_contenu.html','html_0513989880c6f048898059403dc2f270','',16,$GLOBALS['spip_lang'])) .
'
</div>
');

	return analyse_resultat_skel('html_0513989880c6f048898059403dc2f270', $Cache, $page, '../prive/squelettes/contenu/configurer_contenu.html');
}
?>