<?php

/*
 * Squelette : squelettes-dist/inc-rss-item.html
 * Date :      Wed, 03 Jun 2015 10:33:02 GMT
 * Compile :   Thu, 04 Jun 2015 21:53:07 GMT
 * Boucles :   _mots_rss, _rubrique_mf, _mots_mf, _documents, _un_article
 */ 

function BOUCLE_mots_rsshtml_4ed131d0bd055ed584319697995c41d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots_rss';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inc-rss-item.html','html_4ed131d0bd055ed584319697995c41d8','_mots_rss',14,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
		' .
(($t1 = strval(interdire_scripts(texte_backend(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))))!=='' ?
		('<dc:subject>' . $t1 . '</dc:subject>') :
		''));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots_rss @ squelettes-dist/inc-rss-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_rubrique_mfhtml_4ed131d0bd055ed584319697995c41d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'rubriques';
		$command['id'] = '_rubrique_mf';
		$command['from'] = array('rubriques' => 'spip_rubriques');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("rubriques.titre",
		"rubriques.id_rubrique",
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
			array('=', 'rubriques.id_rubrique', sql_quote($Pile[$SP]['id_rubrique'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inc-rss-item.html','html_4ed131d0bd055ed584319697995c41d8','_rubrique_mf',23,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'-
' .
(($t1 = strval(interdire_scripts(texte_backend(supprimer_tags(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])))))))!=='' ?
		((	'&lt;a href="' .
	url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_rubrique'], 'rubrique', '', '', true)))) .
	'" rel="directory"&gt;') . $t1 . '&lt;/a&gt;') :
		'') .
'
');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_rubrique_mf @ squelettes-dist/inc-rss-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mots_mfhtml_4ed131d0bd055ed584319697995c41d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'mots';
		$command['id'] = '_mots_mf';
		$command['from'] = array('mots' => 'spip_mots','L1' => 'spip_mots_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("mots.titre",
		"mots.id_mot");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('mots','id_mot'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inc-rss-item.html','html_4ed131d0bd055ed584319697995c41d8','_mots_mf',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t1 = (
'
' .
(($t1 = strval(interdire_scripts(texte_backend(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))))!=='' ?
		((	'&lt;a href="' .
	url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_mot'], 'mot', '', '', true)))) .
	'" rel="tag"&gt;') . $t1 . '&lt;/a&gt;') :
		''));
		$t0 .= ((strlen($t1) && strlen($t0)) ? ', ' : '') . $t1;
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_mots_mf @ squelettes-dist/inc-rss-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_documentshtml_4ed131d0bd055ed584319697995c41d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'documents'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("documents.id_document",
		"documents.taille",
		"L2.mime_type");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'L1.id_objet', sql_quote($Pile[$SP]['id_article'],'','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote('article')), 
			array('=', 'documents.mode', "'document'"), 
			array(sql_in('documents.id_document', $doublons[$doublons_index[]= ('documents')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inc-rss-item.html','html_4ed131d0bd055ed584319697995c41d8','_documents',50,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_document']; // doublons

		$t0 .= (
(($t1 = strval(unique(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))))))!=='' ?
		('
		<enclosure url="' . $t1 . (	'"' .
	(($t2 = strval(interdire_scripts($Pile[$SP]['taille'])))!=='' ?
			(' length="' . $t2 . '"') :
			'') .
	(($t2 = strval(interdire_scripts($Pile[$SP]['mime_type'])))!=='' ?
			(' type="' . $t2 . '"') :
			'') .
	' />')) :
		'') .
'
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_documents @ squelettes-dist/inc-rss-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_un_articlehtml_4ed131d0bd055ed584319697995c41d8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_un_article';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.id_rubrique",
		"articles.lang",
		"articles.titre",
		"articles.date",
		"articles.texte",
		"articles.descriptif",
		"articles.chapo",
		"articles.url_site",
		"articles.nom_site",
		"articles.ps");
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
			array('=', 'articles.id_article', sql_quote(@$Pile[0]['id_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inc-rss-item.html','html_4ed131d0bd055ed584319697995c41d8','_un_article',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
'
	<item' .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		(' xml:lang="' . $t1 . '"') :
		'') .
'>
		<title>' .
interdire_scripts(texte_backend(supprimer_tags(traiter_doublons_documents($doublons, typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))))) .
'</title>
		<link>' .
url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true)))) .
'</link>
		' .
(($t1 = strval(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true))))))!=='' ?
		('<guid isPermaLink="true">' . $t1 . '</guid>') :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(date_iso(normaliser_date($Pile[$SP]['date'])))))!=='' ?
		('<dc:date>' . $t1 . '</dc:date>') :
		'') .
'
		<dc:format>text/html</dc:format>
		' .
(($t1 = strval(spip_htmlentities($Pile[$SP]['lang'] ? $Pile[$SP]['lang'] : $GLOBALS['spip_lang'])))!=='' ?
		('<dc:language>' . $t1 . '</dc:language>') :
		'') .
'
		' .
(($t1 = strval(texte_backend(supprimer_tags(recuperer_fond('modeles/lesauteurs', array('objet'=>'article','id_objet' => $Pile[$SP]['id_article'],'id_article' => $Pile[$SP]['id_article']), array('trim'=>true, 'compil'=>array('squelettes-dist/inc-rss-item.html','html_4ed131d0bd055ed584319697995c41d8','_un_article',7,$GLOBALS['spip_lang'])), '')))))!=='' ?
		('<dc:creator>' . $t1 . '</dc:creator>') :
		'') .
'

' .
BOUCLE_mots_rsshtml_4ed131d0bd055ed584319697995c41d8($Cache, $Pile, $doublons, $Numrows, $SP) .
'

		<description>' .
interdire_scripts(texte_backend(filtre_introduction_dist($Pile[$SP]['descriptif'], (strlen($Pile[$SP]['descriptif']))
		? ''
		: $Pile[$SP]['chapo'] . "\n\n" . $Pile[$SP]['texte'], 500, $connect))) .
'

' .
BOUCLE_rubrique_mfhtml_4ed131d0bd055ed584319697995c41d8($Cache, $Pile, $doublons, $Numrows, $SP) .
(($t1 = BOUCLE_mots_mfhtml_4ed131d0bd055ed584319697995c41d8($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
/ ' . $t1) :
		'') .
'

		</description>

' .
(($t1 = strval(interdire_scripts((((include_spip('inc/config')?lire_config('syndication_integrale',null,false):'') == 'oui') ? ' ':''))))!=='' ?
		('
' . $t1 . (	'<content:encoded>' .
	(($t2 = strval(texte_backend(filtrer('image_graver', filtrer('image_reduire',
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logos\" alt=\"\" align=\"right\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />')),'150','150')))))!=='' ?
			($t2 . '
		') :
			'') .
	(($t2 = strval(interdire_scripts(texte_backend(traiter_doublons_documents($doublons, propre($Pile[$SP]['chapo'], $connect, $Pile[0]))))))!=='' ?
			('&lt;div class=\'rss_chapo\'&gt;' . $t2 . '&lt;/div&gt;
		') :
			'') .
	(($t2 = strval(interdire_scripts(texte_backend(filtrer('image_graver', filtrer('image_reduire',traiter_doublons_documents($doublons, propre($Pile[$SP]['texte'], $connect, $Pile[0])),'500','0'))))))!=='' ?
			('&lt;div class=\'rss_texte\'&gt;' . $t2 . '&lt;/div&gt;
		') :
			'') .
	(($t2 = strval(calculer_url($Pile[$SP]['url_site'],'','url', $connect)))!=='' ?
			((	'&lt;div class="hyperlien"&gt;' .
		html2unicode(_T('public|spip|ecrire:voir_en_ligne')) .
		' : &lt;a href="') . $t2 . (	'" class="spip_out"&gt;' .
		interdire_scripts(texte_backend(((($a = traiter_doublons_documents($doublons, typo(supprimer_numero(calculer_url($Pile[$SP]['url_site'],$Pile[$SP]['nom_site'], 'titre', $connect, false)), "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : couper(calculer_url($Pile[$SP]['url_site'],'','url', $connect),'80')))) .
		'&lt;/a&gt;&lt;/div&gt;
		')) :
			'') .
	(($t2 = strval(interdire_scripts(texte_backend(calculer_notes()))))!=='' ?
			('&lt;hr /&gt;
		&lt;div class=\'rss_notes\'&gt;' . $t2 . '&lt;/div&gt;
		') :
			'') .
	(($t2 = strval(interdire_scripts(texte_backend(traiter_doublons_documents($doublons, propre($Pile[$SP]['ps'], $connect, $Pile[0]))))))!=='' ?
			('&lt;div class=\'rss_ps\'&gt;' . $t2 . '&lt;/div&gt;') :
			'') .
	'
		</content:encoded>
')) :
		'') .
'

		' .
BOUCLE_documentshtml_4ed131d0bd055ed584319697995c41d8($Cache, $Pile, $doublons, $Numrows, $SP) .
'

	</item>
');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_un_article @ squelettes-dist/inc-rss-item.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/inc-rss-item.html
// Temps de compilation total: 44.596 ms
//

function html_4ed131d0bd055ed584319697995c41d8($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_un_articlehtml_4ed131d0bd055ed584319697995c41d8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_4ed131d0bd055ed584319697995c41d8', $Cache, $page, 'squelettes-dist/inc-rss-item.html');
}
?>