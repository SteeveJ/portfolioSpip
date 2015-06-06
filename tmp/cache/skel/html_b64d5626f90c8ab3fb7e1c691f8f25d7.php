<?php

/*
 * Squelette : squelettes/404.html
 * Date :      Fri, 05 Jun 2015 23:41:44 GMT
 * Compile :   Sat, 06 Jun 2015 00:00:18 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/404.html
// Temps de compilation total: 30.978 ms
//

function html_b64d5626f90c8ab3fb7e1c691f8f25d7($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("' . (	'HTTP/1.0  ' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'code', null), '404 Not Found'),true))) . '"); ?'.'>' .
'<'.'?php header("' . 'Cache-Control: no-store, no-cache, must-revalidate' . '"); ?'.'>' .
'<'.'?php header("' . 'Pragma: no-cache' . '"); ?'.'><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir(@$Pile[0]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities(@$Pile[0]['lang'] ? @$Pile[0]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js"> <!--<![endif]-->
<head>
	<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
	<title>' .
_T('public|spip|ecrire:pass_erreur') .
' ' .
interdire_scripts(textebrut(entites_html(sinon(table_valeur(@$Pile[0], (string)'status', null), '404'),true))) .
' - ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/404.html\',\'html_b64d5626f90c8ab3fb7e1c691f8f25d7\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	<meta name="robots" content="none" />
</head>
<body class="pas_surlignable page_404">
<section id="home" class="module-image js-height-full">
	<div class="intro">
		<h1>Oups, ' .
_T('public|spip|ecrire:pass_erreur') .
' ' .
interdire_scripts(textebrut(entites_html(sinon(table_valeur(@$Pile[0], (string)'status', null), '404'),true))) .
' - <a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
' ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</a></h1>
	</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
' .
(($t1 = strval(interdire_scripts(find_in_path('js/bootstrap.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.magnific-popup.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.magnific-popup.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.parallax-1.1.3.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/imagesloaded.pkgd.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.shuffle.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/twitterFetcher_min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/owl.carousel.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.fitvids.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.sticky.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts(find_in_path('js/smoothscroll.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/wow.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'



' .
(($t1 = strval(interdire_scripts(find_in_path('js/custom.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/custom-shuffle-init.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
</body>
</html>');

	return analyse_resultat_skel('html_b64d5626f90c8ab3fb7e1c691f8f25d7', $Cache, $page, 'squelettes/404.html');
}
?>