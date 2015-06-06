<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/top/documents.html
 * Date :      Wed, 03 Jun 2015 10:33:25 GMT
 * Compile :   Thu, 04 Jun 2015 12:21:53 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/top/documents.html
// Temps de compilation total: 0.751 ms
//

function html_d55b3d1019edd568c16145a2ef5ea309($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('medias:documents') .
'</h1>
' .
interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))));

	return analyse_resultat_skel('html_d55b3d1019edd568c16145a2ef5ea309', $Cache, $page, '../plugins-dist/medias/prive/squelettes/top/documents.html');
}
?>