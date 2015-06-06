<?php

/*
 * Squelette : squelettes/contact.html
 * Date :      Sat, 06 Jun 2015 01:13:58 GMT
 * Compile :   Sat, 06 Jun 2015 01:14:01 GMT
 * Boucles :   _principale
 */ 

function BOUCLE_principalehtml_e3655a2f1188bf1dfb57d81d54968b46(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_principale';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.lang",
		"auteurs.email");
		$command['orderby'] = array('auteurs.id_auteur');
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('NOT', 
			array('=', 'auteurs.email', sql_quote(@$Pile[0]['email'],'','tinytext NOT NULL'))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/contact.html','html_e3655a2f1188bf1dfb57d81d54968b46','_principale',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie6"> <![endif]-->
<!--[if IE 7 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html dir="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
'" lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" xmlns="http://www.w3.org/1999/xhtml" xml:lang="' .
spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang']) .
'" class="' .
lang_dir($Pile[$SP]['lang'], 'ltr','rtl') .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' ' . $t1) :
		'') .
' no-js"> <!--<![endif]-->
<head>
<script type=\'text/javascript\'>/*<![CDATA[*/(function(H){H.className=H.className.replace(/\\bno-js\\b/,\'js\')})(document.documentElement);/*]]>*/</script>
<title>' .
_T('public|spip|ecrire:contact') .
' - ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/contact.html\',\'html_e3655a2f1188bf1dfb57d81d54968b46\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
<meta name="robots" content="none" />
</head>

<body class="pas_surlignable page_contact">
<div class="page">

	<div class="main">
		<div class="wrapper">
		<div class="content" id="content">
		
			<div class="header-contact text-center text-capitalize">
				<h1>' .
_T('public|spip|ecrire:contact') .
'</h1>
				<a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">Retour ' .
_T('public|spip|ecrire:accueil_site') .
'</a>
			</div>
		
			' .
executer_balise_dynamique('FORMULAIRE_ECRIRE_AUTEUR',
	array($Pile[$SP]['id_auteur'],@$Pile[0]['id_article'],$Pile[$SP]['email']),
	array('squelettes/contact.html','html_e3655a2f1188bf1dfb57d81d54968b46','_principale',27,$GLOBALS['spip_lang'])) .
'
		
		</div><!--.content-->
		</div><!--.wrapper-->

	</div><!--.main-->

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
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
</div><!--.page-->
</body>
</html>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_principale @ squelettes/contact.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/contact.html
// Temps de compilation total: 29.252 ms
//

function html_e3655a2f1188bf1dfb57d81d54968b46($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = BOUCLE_principalehtml_e3655a2f1188bf1dfb57d81d54968b46($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		(recuperer_fond( '404' , array('erreur' => _T('public|spip|ecrire:aucun_auteur') ), array('compil'=>array('squelettes/contact.html','html_e3655a2f1188bf1dfb57d81d54968b46','',54,$GLOBALS['spip_lang'])), '')));

	return analyse_resultat_skel('html_e3655a2f1188bf1dfb57d81d54968b46', $Cache, $page, 'squelettes/contact.html');
}
?>