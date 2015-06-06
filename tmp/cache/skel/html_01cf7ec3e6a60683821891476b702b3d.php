<?php

/*
 * Squelette : squelettes-dist/plan.html
 * Date :      Wed, 03 Jun 2015 10:33:02 GMT
 * Compile :   Fri, 05 Jun 2015 22:28:33 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes-dist/plan.html
// Temps de compilation total: 65.308 ms
//

function html_01cf7ec3e6a60683821891476b702b3d($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
_T('public|spip|ecrire:plan_site') .
' - ' .
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
'</title>
' .
(($t1 = strval(interdire_scripts(attribut_html(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150')))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/plan.html\',\'html_01cf7ec3e6a60683821891476b702b3d\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
<meta name="robots" content="none" />
</head>

<body class="pas_surlignable page_plan">
<div class="page">
	
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/plan.html\',\'html_01cf7ec3e6a60683821891476b702b3d\',\'\',18,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/plan.html\',\'html_01cf7ec3e6a60683821891476b702b3d\',\'\',19,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	
	<div class="main">
		<div class="wrapper">
		<div class="content" id="content">
			<p class="arbo"><a href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
_T('public|spip|ecrire:accueil_site') .
'</a> &gt; <strong class="on">' .
_T('public|spip|ecrire:plan_site') .
'</strong></p>
		
			<div class="cartouche">
				<h1>' .
_T('public|spip|ecrire:plan_site') .
'</h1>
			</div>
			
			' .

	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/plan', array('lang' => $GLOBALS["spip_lang"] ,'recurs'=>(++$recurs)), array('compil'=>array('squelettes-dist/plan.html','html_01cf7ec3e6a60683821891476b702b3d','',30,$GLOBALS['spip_lang']), 'trim'=>true), ''))
 .
'</div><!--.content-->
		</div><!--.wrapper-->
	
		<div class="aside">
			' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/navsub') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes-dist/plan.html\',\'html_01cf7ec3e6a60683821891476b702b3d\',\'\',36,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
			' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE',
	array(),
	array('squelettes-dist/plan.html','html_01cf7ec3e6a60683821891476b702b3d','',37,$GLOBALS['spip_lang'])) .
'
		</div><!--.aside-->
	</div><!--.main-->

	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes-dist/plan.html\',\'html_01cf7ec3e6a60683821891476b702b3d\',\'\',41,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

</div><!--.page-->
</body>
</html>');

	return analyse_resultat_skel('html_01cf7ec3e6a60683821891476b702b3d', $Cache, $page, 'squelettes-dist/plan.html');
}
?>