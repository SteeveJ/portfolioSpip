<?php

/*
 * Squelette : squelettes/sommaire.html
 * Date :      Sat, 06 Jun 2015 03:13:17 GMT
 * Compile :   Sat, 06 Jun 2015 03:16:43 GMT
 * Boucles :   _AUTEUR, _HEADER, _OPTION, _MENUHEADER, _WORK, _NAMEMENU, _MENU, _RUB, _CATEGORIE, _PORTFOLIO, _SERVICE, _SERVICES, _HEADERABOUT_ARTICLES, _ARTICLEABOUT, _ABOUT
 */ 

function BOUCLE_AUTEURhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_AUTEUR';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.nom");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_AUTEUR',32,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					<div class="hello">Je m\'appelle ' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
'</div>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_AUTEUR @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_HEADERhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_HEADER';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.surtitre",
		"articles.texte",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "3"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_HEADER',31,$GLOBALS['spip_lang'])
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
BOUCLE_AUTEURhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				<h1>' .
interdire_scripts(typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0])) .
'</h1>
				<div class="who-creates">' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'</div>
			');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_HEADER @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_OPTIONhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_OPTION';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_OPTION',69,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
								<li><a href="#' .
interdire_scripts(strtolower(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</a></li>
							');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_OPTION @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_MENUHEADERhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_MENUHEADER';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', "15"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_MENUHEADER',68,$GLOBALS['spip_lang'])
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
BOUCLE_OPTIONhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
						');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_MENUHEADER @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_WORKhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_WORK';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "13"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_WORK',94,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
							<h2 class="module-title">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h2>
							<div class="module-line"></div>
							<div class="module-subtitle">
								' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
							</div>
							<div class="module-line"></div>
						');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_WORK @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_NAMEMENUhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_NAMEMENU';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_NAMEMENU',118,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
								<li data-group="' .
interdire_scripts(strtolower(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) .
'">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</li>
							');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_NAMEMENU @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_MENUhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_MENU';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', "1"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_MENU',117,$GLOBALS['spip_lang'])
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
BOUCLE_NAMEMENUhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
						');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_MENU @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_RUBhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_RUB';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.surtitre",
		"articles.id_article",
		"articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_RUB',135,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
						<li class="portfolio-item" data-groups="all ' .
interdire_scripts(strtolower(typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0]))) .
'">
							<figure>
								' .

((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')) .
'
								<figcaption>
									<a href="portfolio/slideshow.html" class="simple-ajax-popup"></a>
									<div class="caption-inner">
										<h3 class="portfolio-item-title">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h3>
										<div class="portfolio-item-desc">' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'</div>
									</div>
								</figcaption>
							</figure>
						</li>
					');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_RUB @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_CATEGORIEhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_CATEGORIE';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_parent', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_CATEGORIE',134,$GLOBALS['spip_lang'])
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
BOUCLE_RUBhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_CATEGORIE @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_PORTFOLIOhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_PORTFOLIO';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', "1"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_PORTFOLIO',133,$GLOBALS['spip_lang'])
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
BOUCLE_CATEGORIEhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_PORTFOLIO @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_SERVICEhtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_SERVICE';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.surtitre",
		"articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_SERVICE',205,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
						<div class="col-sm-3">
							<div class="iconbox wow bounceIn">
								<div class="iconbox-icon">
									<span class="' .
interdire_scripts(typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0])) .
'"></span>
								</div>
								<div class="iconbox-text">
									<h3 class="iconbox-title">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h3>
									<div class="iconbox-desc">
										' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
									</div>
								</div>
							</div>
						</div>
					');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_SERVICE @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_SERVICEShtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_SERVICES';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', "9"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_SERVICES',204,$GLOBALS['spip_lang'])
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
BOUCLE_SERVICEhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_SERVICES @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_HEADERABOUT_ARTICLEShtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_HEADERABOUT_ARTICLES';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "15"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_HEADERABOUT_ARTICLES',241,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
								<h2 class="module-title">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h2>
								<div class="module-subtitle">
									' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
								</div>
							');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_HEADERABOUT_ARTICLES @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ARTICLEABOUThtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_ARTICLEABOUT';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.surtitre",
		"articles.titre",
		"articles.texte",
		"articles.lang");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_ARTICLEABOUT',256,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
							<div class="col-sm-6">
								<div class="iconboxleft wow fadeInUp">
									<div class="iconboxleft-icon">
										<span class="' .
interdire_scripts(typo($Pile[$SP]['surtitre'], "TYPO", $connect, $Pile[0])) .
'"></span>
									</div>
									<div class="iconboxleft-text">
										<h3 class="iconboxleft-title">' .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</h3>
										<div class="iconboxleft-desc">
											' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
'
										</div>
									</div>
								</div>
							</div>
						');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ARTICLEABOUT @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_ABOUThtml_9619b9738af3f9f47eca3349482c6419(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_ABOUT';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.id_rubrique",
		"rubriques.lang",
		"rubriques.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('rubriques.statut','!','publie',''), 
			array('=', 'rubriques.id_rubrique', "17"));
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/sommaire.html','html_9619b9738af3f9f47eca3349482c6419','_ABOUT',255,$GLOBALS['spip_lang'])
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
BOUCLE_ARTICLEABOUThtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_ABOUT @ squelettes/sommaire.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/sommaire.html
// Temps de compilation total: 73.372 ms
//

function html_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

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
interdire_scripts(textebrut(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0]))) .
(($t1 = strval(interdire_scripts(textebrut(typo($GLOBALS['meta']['slogan_site'], "TYPO", $connect, $Pile[0])))))!=='' ?
		(' - ' . $t1) :
		'') .
'</title>
' .
(($t1 = strval(interdire_scripts(textebrut(couper(propre($GLOBALS['meta']['descriptif_site'], $connect, $Pile[0]),'150')))))!=='' ?
		('<meta name="description" content="' . $t1 . '" />') :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire.html\',\'html_9619b9738af3f9f47eca3349482c6419\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</head>

<body class="pas_surlignable page_sommaire">
	<!--' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/header') . ', array(\'home\' => ' . argumenter_squelette('oui') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/sommaire.html\',\'html_9619b9738af3f9f47eca3349482c6419\',\'\',15,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>-->
	<!--' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/nav') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/sommaire.html\',\'html_9619b9738af3f9f47eca3349482c6419\',\'\',16,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>-->
	<!-- Preloader -->

	<div id="preloader">
		<div id="status">
			<div class="status-mes"></div>
		</div>
	</div>

	<!-- Home start -->

	<section id="home" class="module-image js-height-full">

		<div class="intro">
			' .
BOUCLE_HEADERhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		</div>

		<div class="mouse-icon">
			<div class="wheel"></div>
		</div>

	</section>

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="' .
spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.')) .
'/">' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						' .
BOUCLE_MENUHEADERhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
						<li><a href="' .
interdire_scripts(generer_url_public('contact', '')) .
'">Contact</a></li>
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

	<!-- Portfolio start -->

	<section id="portfolio" class="module paddingb-none">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="module-header wow fadeInUp">
						' .
BOUCLE_WORKhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'

					</div>

				</div>

			</div><!-- .row -->

			<!-- Portfolio Filter start-->

			<div class="row">

				<div class="col-sm-12">

					<ul id="filter">
						<li data-group="all">All</li>
						' .
BOUCLE_MENUhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
					</ul>

				</div>

			</div><!-- .row -->

			<!-- Portfolio Filter end -->

		</div><!-- .contaier -->

		<ul class="portfolio-items-container">
			' .
BOUCLE_PORTFOLIOhtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
		</ul><!-- .projects-container -->

	</section>

	<!-- Portfolio end -->

	<!-- Callout start -->

	<section class="callout">
		<div class="container">

			<div class="row">

				<div class="col-md-8 col-lg-6 col-lg-offset-2">
					<h2>ARE YOU READY TO START?</h2>
					<div class="callout-decription">
						Je suis disponible pour du travail en freelance.
					</div>
				</div>

				<div class="col-md-4 col-lg-2 callout-btn">
					<a href="' .
interdire_scripts(generer_url_public('contact', '')) .
'" class="btn btn-lg btn-block btn-custom-1">Contacter moi</a>
					<a href="" class="btn btn-lg btn-block btn-custom-1">Curriculum Vitae</a>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Callout end -->

	<!-- Services start -->

	<section id="services" class="module module-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="module-header wow fadeInUp">
						<h2 class="module-title">Services</h2>
						<div class="module-line"></div>
						<div class="module-subtitle">
							Les services que je propose.
						</div>
						<div class="module-line"></div>
					</div>

				</div>

			</div>

			<div class="row">
				' .
BOUCLE_SERVICEShtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Services end -->

	<!-- About start -->

	<section id="about">

		<div class="row position-relative margin-0">

			<div class="col-xs-12 col-md-6 side-image"></div>

			<div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">

				<div class="row">
					<div class="col-sm-12">
						<div class="module-header module-header-left wow fadeInUp">
							' .
BOUCLE_HEADERABOUT_ARTICLEShtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'
							<div class="module-line"></div>
						</div>
					</div>

				</div><!-- .row -->

				<div class="row">

					' .
BOUCLE_ABOUThtml_9619b9738af3f9f47eca3349482c6419($Cache, $Pile, $doublons, $Numrows, $SP) .
'

				</div><!-- .row -->

			</div><!-- col-xs-12 -->

		</div><!-- .row -->
	</section>

	<!-- About end -->

	<!-- Twitter start -->

	<section id="twitter" class="module module-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="module-header wow fadeInUp">
						<div class="module-icon"><span class="icon-social-twitter"></span></div>
					</div>

					<div class="testimonials owl-carousel wow fadeInUp"></div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Twitter end -->

	<!-- Google Map start-->

	<section id="map-section">

		<div id="map"></div>

	</section>

	<!-- Google Map end -->


	' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inclure/footer') . ', array_merge('.var_export($Pile[0],1).',array(\'self\' => ' . argumenter_squelette(self()) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'squelettes/sommaire.html\',\'html_9619b9738af3f9f47eca3349482c6419\',\'\',315,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
</body>
</html>
');

	return analyse_resultat_skel('html_9619b9738af3f9f47eca3349482c6419', $Cache, $page, 'squelettes/sommaire.html');
}
?>