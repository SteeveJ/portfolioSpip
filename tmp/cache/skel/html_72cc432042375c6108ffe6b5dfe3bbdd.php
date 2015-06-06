<?php

/*
 * Squelette : ../plugins-dist/sites/prive/squelettes/contenu/sites.html
 * Date :      Wed, 03 Jun 2015 10:33:29 GMT
 * Compile :   Thu, 04 Jun 2015 21:55:42 GMT
 * Boucles :   _rubrique_existe
 */ 

function BOUCLE_rubrique_existehtml_72cc432042375c6108ffe6b5dfe3bbdd(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubrique_existe';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array((!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('rubriques.statut',sql_quote($in)) : 
			array('=', 'rubriques.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'0\'')))), 
			array('=', 'rubriques.id_parent', 0));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/sites/prive/squelettes/contenu/sites.html','html_72cc432042375c6108ffe6b5dfe3bbdd','_rubrique_existe',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'

' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/sites') . ', array(\'titre\' => ' . argumenter_squelette(_T('sites:titre_sites_tous')) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'par\' => ' . argumenter_squelette('nom_site') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/sites/prive/squelettes/contenu/sites.html\',\'html_72cc432042375c6108ffe6b5dfe3bbdd\',\'\',5,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/sites') . ', array(\'titre\' => ' . argumenter_squelette(_T('sites:titre_sites_proposes')) . ',
	\'statut\' => ' . argumenter_squelette('prop') . ',
	\'par\' => ' . argumenter_squelette('nom_site') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/sites/prive/squelettes/contenu/sites.html\',\'html_72cc432042375c6108ffe6b5dfe3bbdd\',\'\',6,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creersitedans', 'rubrique', invalideur_session($Cache, $Pile[$SP]['id_rubrique']))?" ":""))))!=='' ?
		($t1 . (	'
	' .
	filtre_icone_verticale_dist(generer_url_ecrire('site_edit'),_T('sites:icone_referencer_nouveau_site'),'site-24.png','new','right') .
	'
	<br class=\'nettoyeur\' />
')) :
		'') .
'

<!--affiche_milieu-->
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/sites') . ', array(\'titre\' => ' . argumenter_squelette(_T('sites:avis_sites_probleme_syndication')) . ',
	\'syndication\' => ' . argumenter_squelette('off') . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'par\' => ' . argumenter_squelette('nom_site') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/sites/prive/squelettes/contenu/sites.html\',\'html_72cc432042375c6108ffe6b5dfe3bbdd\',\'\',11,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('instituer', 'site')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/sites') . ', array(\'titre\' => ' . argumenter_squelette(_T('sites:info_sites_refuses')) . ',
	\'statut\' => ' . argumenter_squelette('refuse') . ',
	\'par\' => ' . argumenter_squelette('nom_site') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/sites/prive/squelettes/contenu/sites.html\',\'html_72cc432042375c6108ffe6b5dfe3bbdd\',\'\',10,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
')) :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/syndic_articles') . ', array(\'titre\' => ' . argumenter_squelette(_T('sites:titre_dernier_article_syndique')) . ',
	\'par\' => ' . argumenter_squelette('date') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/sites/prive/squelettes/contenu/sites.html\',\'html_72cc432042375c6108ffe6b5dfe3bbdd\',\'\',13,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>

');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubrique_existe @ ../plugins-dist/sites/prive/squelettes/contenu/sites.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/sites/prive/squelettes/contenu/sites.html
// Temps de compilation total: 7.343 ms
//

function html_72cc432042375c6108ffe6b5dfe3bbdd($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('sites:titre_page_sites_tous') .
'</h1>

' .
BOUCLE_rubrique_existehtml_72cc432042375c6108ffe6b5dfe3bbdd($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_72cc432042375c6108ffe6b5dfe3bbdd', $Cache, $page, '../plugins-dist/sites/prive/squelettes/contenu/sites.html');
}
?>