<?php

/*
 * Squelette : ../plugins-dist/petitions/prive/configurer/petitionner.html
 * Date :      Wed, 03 Jun 2015 10:33:38 GMT
 * Compile :   Thu, 04 Jun 2015 12:54:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/petitions/prive/configurer/petitionner.html
// Temps de compilation total: 1.005 ms
//

function html_1474e0f18c1072605e2dae34a63c1a5f($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'ajax\'>
' .
executer_balise_dynamique('FORMULAIRE_ACTIVER_PETITION_ARTICLE',
	array(@$Pile[0]['id_article']),
	array('../plugins-dist/petitions/prive/configurer/petitionner.html','html_1474e0f18c1072605e2dae34a63c1a5f','',2,$GLOBALS['spip_lang'])) .
'</div>');

	return analyse_resultat_skel('html_1474e0f18c1072605e2dae34a63c1a5f', $Cache, $page, '../plugins-dist/petitions/prive/configurer/petitionner.html');
}
?>