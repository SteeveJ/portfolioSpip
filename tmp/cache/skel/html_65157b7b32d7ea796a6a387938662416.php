<?php

/*
 * Squelette : squelettes/inclure/head.html
 * Date :      Thu, 04 Jun 2015 21:24:56 GMT
 * Compile :   Sat, 06 Jun 2015 03:16:43 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inclure/head.html
// Temps de compilation total: 8.179 ms
//

function html_65157b7b32d7ea796a6a387938662416($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<link rel="icon" type="image/png" sizes="16x16" href="' .
interdire_scripts(url_absolue(find_in_path('favicon-16x16.png'))) .
'">
<meta http-equiv="Content-Type" content="text/html; charset=' .
interdire_scripts($GLOBALS['meta']['charset']) .
'" />


' .
(($t1 = strval(interdire_scripts(generer_url_public('backend', ''))))!=='' ?
		((	'<link rel="alternate" type="application/rss+xml" title="' .
	_T('public|spip|ecrire:syndiquer_site') .
	'" href="') . $t1 . '" />') :
		'') .
'


<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/font-awesome.min.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'



' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/simple-line-icons.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/magnific-popup.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/owl.theme.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/owl.carousel.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/animate.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(direction_css(find_in_path('css/main.css')))))!=='' ?
		('<link rel="stylesheet" href="' . $t1 . '" type="text/css" />') :
		'') .
'


<meta name="generator" content="SPIP' .
(($t1 = strval(spip_version()))!=='' ?
		(' ' . $t1) :
		'') .
'" />


' .
(($t1 = strval(interdire_scripts(find_in_path('favicon.ico'))))!=='' ?
		('<link rel="icon" type="image/x-icon" href="' . $t1 . (	'" />
' .
	(($t2 = strval(interdire_scripts(find_in_path('favicon.ico'))))!=='' ?
			('<link rel="shortcut icon" type="image/x-icon" href="' . $t2 . '" />') :
			''))) :
		'') .
'
');

	return analyse_resultat_skel('html_65157b7b32d7ea796a6a387938662416', $Cache, $page, 'squelettes/inclure/head.html');
}
?>