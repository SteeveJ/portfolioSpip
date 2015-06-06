<?php

/*
 * Squelette : ../plugins-dist/medias/prive/objets/contenu/portfolio_document.html
 * Date :      Wed, 03 Jun 2015 10:33:25 GMT
 * Compile :   Thu, 04 Jun 2015 12:54:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/objets/contenu/portfolio_document.html
// Temps de compilation total: 0.869 ms
//

function html_c3c5ba687b6c308b20adb73158e22ec5($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(recuperer_fond( 'prive/squelettes/inclure/portfolio-documents' , array_merge($Pile[0],array()), array('ajax' => ($v=( 'documents' ))?$v:true,'compil'=>array('../plugins-dist/medias/prive/objets/contenu/portfolio_document.html','html_c3c5ba687b6c308b20adb73158e22ec5','',2,$GLOBALS['spip_lang'])), '')))!=='' ?
		('
' . $t1 . '
') :
		'') .
'
' .
(($t1 = strval(recuperer_fond( 'prive/squelettes/inclure/ajouter-documents' , array_merge($Pile[0],array()), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../plugins-dist/medias/prive/objets/contenu/portfolio_document.html','html_c3c5ba687b6c308b20adb73158e22ec5','',2,$GLOBALS['spip_lang'])), '')))!=='' ?
		('
' . $t1 . '
') :
		'') .
'
');

	return analyse_resultat_skel('html_c3c5ba687b6c308b20adb73158e22ec5', $Cache, $page, '../plugins-dist/medias/prive/objets/contenu/portfolio_document.html');
}
?>