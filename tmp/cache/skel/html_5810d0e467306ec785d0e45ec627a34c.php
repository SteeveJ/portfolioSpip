<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_identite.html
 * Date :      Wed, 03 Jun 2015 10:34:00 GMT
 * Compile :   Thu, 04 Jun 2015 20:26:10 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_identite.html
// Temps de compilation total: 3.189 ms
//

function html_5810d0e467306ec785d0e45ec627a34c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('public|spip|ecrire:titre_identite_site') .
'</h1>
' .
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_identite')?" ":""))) .
'
<div class=\'ajax\'>
' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_IDENTITE',
	array(),
	array('../prive/squelettes/contenu/configurer_identite.html','html_5810d0e467306ec785d0e45ec627a34c','',4,$GLOBALS['spip_lang'])) .
'
</div>
<div class="ajax">
' .
executer_balise_dynamique('FORMULAIRE_EDITER_LOGO',
	array('site','0','',array('image_reduire' => '395')),
	array('../prive/squelettes/contenu/configurer_identite.html','html_5810d0e467306ec785d0e45ec627a34c','',7,$GLOBALS['spip_lang'])) .
'</div>');

	return analyse_resultat_skel('html_5810d0e467306ec785d0e45ec627a34c', $Cache, $page, '../prive/squelettes/contenu/configurer_identite.html');
}
?>