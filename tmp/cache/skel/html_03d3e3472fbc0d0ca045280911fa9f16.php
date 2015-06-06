<?php

/*
 * Squelette : ../plugins-dist/sites/prive/objets/liste/syndic_articles.html
 * Date :      Wed, 03 Jun 2015 10:33:29 GMT
 * Compile :   Thu, 04 Jun 2015 21:55:42 GMT
 * Boucles :   _liste_syndicart
 */ 

function BOUCLE_liste_syndicarthtml_03d3e3472fbc0d0ca045280911fa9f16(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_syndic_article']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_syndic']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	$in4 = array();
	if (!(is_array($a = (@$Pile[0]['lesauteurs']))))
		$in4[]= $a;
	else $in4 = array_merge($in4, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "syndic_articles", "?","",array (
  'criteres' => 
  array (
    'id_syndic_article' => true,
    'id_syndic' => true,
  ),
),"id_syndic_article");
	}
	
	$senstri = '';
	$tri = (($t=(isset($Pile[0]['tri'.'_liste_syndicart']))?$Pile[0]['tri'.'_liste_syndicart']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'');
	if ($tri){
		$senstri = ((intval($t=(isset($Pile[0]['sens'.'_liste_syndicart']))?$Pile[0]['sens'.'_liste_syndicart']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_syndicart']))?$Pile[0]['tri'.'_liste_syndicart']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1);
		$senstri = ($senstri<0)?' DESC':'';
	};
	
	$command['pagination'] = array((isset($Pile[0]['debut_liste_syndicart']) ? $Pile[0]['debut_liste_syndicart'] : null), (($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10));
	if (!isset($command['table'])) {
		$command['table'] = 'syndic_articles';
		$command['id'] = '_liste_syndicart';
		$command['from'] = array('syndic_articles' => 'spip_syndic_articles','resultats' => 'spip_resultats','L1' => 'spip_syndic');
		$command['type'] = array();
		$command['groupby'] = array("syndic_articles.id_syndic_article");
		$command['join'] = array('resultats' => array('syndic_articles','id','id_syndic_article'), 'L1' => array('syndic_articles','id_syndic'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("syndic_articles.id_syndic_article",
		"$rech_select",
		"".tri_champ_select($tri)."",
		"syndic_articles.statut",
		"syndic_articles.url",
		"syndic_articles.titre",
		"syndic_articles.lesauteurs",
		"syndic_articles.date",
		"syndic_articles.tags",
		"syndic_articles.source",
		"syndic_articles.url_source",
		"syndic_articles.id_syndic");
	$command['orderby'] = array(tri_champ_order($tri,$command['from']).$senstri);
	$command['where'] = 
			array((!(is_array(@$Pile[0]['id_syndic_article'])?count(@$Pile[0]['id_syndic_article']):strlen(@$Pile[0]['id_syndic_article'])) ? '' : ((is_array(@$Pile[0]['id_syndic_article'])) ? sql_in('syndic_articles.id_syndic_article',sql_quote($in)) : 
			array('=', 'syndic_articles.id_syndic_article', sql_quote(@$Pile[0]['id_syndic_article'],'','bigint(21) NOT NULL AUTO_INCREMENT')))), (!(is_array(@$Pile[0]['id_syndic'])?count(@$Pile[0]['id_syndic']):strlen(@$Pile[0]['id_syndic'])) ? '' : ((is_array(@$Pile[0]['id_syndic'])) ? sql_in('syndic_articles.id_syndic',sql_quote($in1)) : 
			array('=', 'syndic_articles.id_syndic', sql_quote(@$Pile[0]['id_syndic'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), ((@$Pile[0]["where"]) ? (@$Pile[0]["where"]) : ''), $rech_where?$rech_where:'', (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('syndic_articles.statut',sql_quote($in2)) : 
			array('=', 'syndic_articles.statut', sql_quote(@$Pile[0]['statut'],'','varchar(10) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L1.id_rubrique',sql_quote($in3)) : 
			array('=', 'L1.id_rubrique', sql_quote(@$Pile[0]['id_rubrique'],'','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['lesauteurs'])?count(@$Pile[0]['lesauteurs']):strlen(@$Pile[0]['lesauteurs'])) ? '' : ((is_array(@$Pile[0]['lesauteurs'])) ? sql_in('syndic_articles.lesauteurs',sql_quote($in4)) : 
			array('=', 'syndic_articles.lesauteurs', sql_quote(@$Pile[0]['lesauteurs'],'','text NOT NULL')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/sites/prive/objets/liste/syndic_articles.html','html_03d3e3472fbc0d0ca045280911fa9f16','_liste_syndicart',7,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	// COMPTEUR
	$Numrows['_liste_syndicart']['compteur_boucle'] = 0;
	$Numrows['_liste_syndicart']['total'] = @intval($iter->count());
	$debut_boucle = isset($Pile[0]['debut_liste_syndicart']) ? $Pile[0]['debut_liste_syndicart'] : _request('debut_liste_syndicart');
	if(substr($debut_boucle,0,1)=='@'){
		$debut_boucle = $Pile[0]['debut_liste_syndicart'] = quete_debut_pagination('id_syndic_article',$Pile[0]['@id_syndic_article'] = substr($debut_boucle,1),(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10),$iter);
		$iter->seek(0);
	}
	$debut_boucle = intval($debut_boucle);
	$debut_boucle = (($tout=($debut_boucle == -1))?0:($debut_boucle));
	$debut_boucle = max(0,min($debut_boucle,floor(($Numrows['_liste_syndicart']['total']-1)/((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10)))*((($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10))));
	$fin_boucle = min(($tout ? $Numrows['_liste_syndicart']['total'] : $debut_boucle+(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10) - 1), $Numrows['_liste_syndicart']['total'] - 1);
	$Numrows['_liste_syndicart']['grand_total'] = $Numrows['_liste_syndicart']['total'];
	$Numrows['_liste_syndicart']["total"] = max(0,$fin_boucle - $debut_boucle + 1);
	if ($debut_boucle>0 AND $debut_boucle < $Numrows['_liste_syndicart']['grand_total'] AND $iter->seek($debut_boucle,'continue'))
		$Numrows['_liste_syndicart']['compteur_boucle'] = $debut_boucle;
	
	
	$l1 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l2 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l3 = _T('sites:info_bloquer_lien');
	$l4 = _T('sites:info_retablir_lien');
	$l5 = _T('sites:syndic_lien_obsolete');
	$l6 = _T('sites:info_retablir_lien');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$Numrows['_liste_syndicart']['compteur_boucle']++;
		if ($Numrows['_liste_syndicart']['compteur_boucle'] <= $debut_boucle) continue;
		if ($Numrows['_liste_syndicart']['compteur_boucle']-1 > $fin_boucle) break;
		$t0 .= (
'
		<tr class="' .
alterner($Numrows['_liste_syndicart']['compteur_boucle'],'row_odd','row_even') .
'">
			<td class=\'statut\'>' .
interdire_scripts(filtre_puce_statut_dist($Pile[$SP]['statut'],'syndic_article')) .
'</td>
			<td class=\'titre principale\'>' .
(($t1 = strval(vider_url($Pile[$SP]['url'])))!=='' ?
		('<a
					href="' . $t1 . (	'"
						title="' .
	attribut_html($l1) .
	' ' .
	$Pile[$SP]['id_syndic_article'] .
	'">' .
	vide($Pile['vars'][$_zzz=(string)'a'] = '</a>'))) :
		'') .
interdire_scripts(typo(supprimer_numero($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
table_valeur($Pile["vars"], (string)'a', null) .
'
				<span class="auteurs">(' .
(($t1 = strval(interdire_scripts(safehtml(safehtml($Pile[$SP]['lesauteurs'])))))!=='' ?
		($t1 . ', ') :
		'') .
interdire_scripts(affdate_court(normaliser_date($Pile[$SP]['date']))) .
')</span>
				' .
interdire_scripts(afficher_enclosures(safehtml($Pile[$SP]['tags']))) .
'
				' .
(($t1 = strval(interdire_scripts(afficher_tags(safehtml($Pile[$SP]['tags'])))))!=='' ?
		('<span class="tags"><em>' . $t1 . '</em></span>') :
		'') .
'
				' .
(($t1 = strval(interdire_scripts(((($a = safehtml($Pile[$SP]['source'])) OR (is_string($a) AND strlen($a))) ? $a : safehtml(vider_url($Pile[$SP]['url_source']))))))!=='' ?
		((	'<span class="source">' .
	(($t2 = strval(safehtml(vider_url($Pile[$SP]['url_source']))))!=='' ?
			('<a href="' . $t2 . (	'">' .
		vide($Pile['vars'][$_zzz=(string)'b'] = '</a>'))) :
			'')) . $t1 . (	table_valeur($Pile["vars"], (string)'b', null) .
	'</span>')) :
		'') .
'
			</td>
			' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'id_syndic', null), ''),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
			<td class=\'site\'><a href="' .
	generer_url_entite($Pile[$SP]['id_syndic'],'site') .
	'"
						title="' .
	attribut_html($l1) .
	' ' .
	$Pile[$SP]['id_syndic'] .
	'">' .
	interdire_scripts(generer_info_entite($Pile[$SP]['id_syndic'], 'syndic', 'titre')) .
	'</a></td>
			')) :
		'') .
'
			<td class=\'date secondaire\'>' .
interdire_scripts(affdate_jourcourt(normaliser_date($Pile[$SP]['date']))) .
'</td>
			<td class=\'action\'>' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('moderer', 'site', invalideur_session($Cache, $Pile[$SP]['id_syndic']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	' 
				' .
	vide($Pile['vars'][$_zzz=(string)'valider'] = ' ') .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['statut'] == 'publie')) ?' ' :''))))!=='' ?
			($t2 . (	bouton_action($l3,invalideur_session($Cache, generer_action_auteur('instituer_syndic_article',(	invalideur_session($Cache, $Pile[$SP]['id_syndic_article']) .
				'-refuse'),invalideur_session($Cache, self()))),'ajax') .
		'
				' .
		vide($Pile['vars'][$_zzz=(string)'valider'] = ''))) :
			'') .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['statut'] == 'refuse')) ?' ' :''))))!=='' ?
			('
				' . $t2 . (	bouton_action($l4,invalideur_session($Cache, generer_action_auteur('instituer_syndic_article',(	invalideur_session($Cache, $Pile[$SP]['id_syndic_article']) .
				'-publie'),invalideur_session($Cache, self()))),'ajax') .
		'
				' .
		vide($Pile['vars'][$_zzz=(string)'valider'] = ''))) :
			'') .
	(($t2 = strval(interdire_scripts((((((($Pile[$SP]['statut'] == 'off')) AND (filtre_test_syndic_article_miroir_dist($Pile[$SP]['id_syndic_article']))) ?' ' :'')) ?' ' :''))))!=='' ?
			('
				' . $t2 . (	'
				' .
		$l5 .
		'
				' .
		vide($Pile['vars'][$_zzz=(string)'valider'] = ''))) :
			'') .
	((table_valeur($Pile["vars"], (string)'valider', null))  ?
			(' ' . (	'
					' .
		bouton_action($l4,invalideur_session($Cache, generer_action_auteur('instituer_syndic_article',(	invalideur_session($Cache, $Pile[$SP]['id_syndic_article']) .
				'-publie'),invalideur_session($Cache, self()))),'ajax') .
		'
				')) :
			'') .
	'
			')) :
		'') .
'</td>
		</tr>
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_liste_syndicart @ ../plugins-dist/sites/prive/objets/liste/syndic_articles.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/sites/prive/objets/liste/syndic_articles.html
// Temps de compilation total: 37.353 ms
//

function html_03d3e3472fbc0d0ca045280911fa9f16($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
(($t1 = strval(vide($Pile['vars'][$_zzz=(string)'defaut_tri'] = array('date' => interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'date_sens', null), '-1'),true)), 'titre' => '1', 'id_article' => '1', 'points' => '-1
'))))!=='' ?
		($t1 . '
') :
		'') .
(($t1 = BOUCLE_liste_syndicarthtml_03d3e3472fbc0d0ca045280911fa9f16($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
' .
		filtre_pagination_dist($Numrows["_liste_syndicart"]["grand_total"],
 		'_liste_syndicart',
		isset($Pile[0]['debut_liste_syndicart'])?$Pile[0]['debut_liste_syndicart']:intval(_request('debut_liste_syndicart')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), false, '', '', array()) .
		'
<div class="liste-objets syndic_articles">
<table class=\'spip liste\'>
' .
		(($t3 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'titre', null), singulier_ou_pluriel((isset($Numrows['_liste_syndicart']['grand_total'])
			? $Numrows['_liste_syndicart']['grand_total'] : $Numrows['_liste_syndicart']['total']),'info_1_article_syndique','info_nb_articles_syndiques')))))!=='' ?
				('<caption><span class="image_loading"></span><strong class="caption">' . $t3 . '</strong></caption>') :
				'') .
		'
	<thead>
		<tr class=\'first_row\'>
			<th class=\'statut\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('statut',array('>','<')))?'sens':'tri').'_liste_syndicart',$s?(strpos('< >','statut')-1):'statut'),(	'<span title="' .
			attribut_html(_T('public|spip|ecrire:lien_trier_statut')) .
			'">#</span>'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_syndicart']))?$Pile[0]['sens'.'_liste_syndicart']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_syndicart']))?$Pile[0]['tri'.'_liste_syndicart']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','statut')-1)):((($t=(isset($Pile[0]['tri'.'_liste_syndicart']))?$Pile[0]['tri'.'_liste_syndicart']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='statut'),'ajax') .
		'</th>
			<th class=\'titre\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('titre',array('>','<')))?'sens':'tri').'_liste_syndicart',$s?(strpos('< >','titre')-1):'titre'),_T('public|spip|ecrire:info_titre'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_syndicart']))?$Pile[0]['sens'.'_liste_syndicart']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_syndicart']))?$Pile[0]['tri'.'_liste_syndicart']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','titre')-1)):((($t=(isset($Pile[0]['tri'.'_liste_syndicart']))?$Pile[0]['tri'.'_liste_syndicart']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='titre'),'ajax') .
		'</th>
			' .
		(($t3 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'id_syndic', null), ''),true)) ?'' :' '))))!=='' ?
				($t3 . '
			<th class=\'site\' scope=\'col\'>site</th>
			') :
				'') .
		'
			<th class=\'date\' scope=\'col\'>' .
		lien_ou_expose(parametre_url(self(),(($s=in_array('date',array('>','<')))?'sens':'tri').'_liste_syndicart',$s?(strpos('< >','date')-1):'date'),_T('public|spip|ecrire:date'),$s?(((intval($t=(isset($Pile[0]['sens'.'_liste_syndicart']))?$Pile[0]['sens'.'_liste_syndicart']:(is_array($s=table_valeur($Pile["vars"], (string)'defaut_tri', null))?(isset($s[$st=(($t=(isset($Pile[0]['tri'.'_liste_syndicart']))?$Pile[0]['tri'.'_liste_syndicart']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')])?$s[$st]:reset($s)):$s))==-1 OR $t=='inverse')?-1:1)==(strpos('< >','date')-1)):((($t=(isset($Pile[0]['tri'.'_liste_syndicart']))?$Pile[0]['tri'.'_liste_syndicart']:interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'par', null), 'date'),true)))?tri_protege_champ($t):'')=='date'),'ajax') .
		'</th>
			<th class=\'action\' scope=\'col\'></th>
		</tr>
	</thead>
	<tbody>
	') . $t1 . (	'
	</tbody>
</table>
' .
		(($t3 = strval(filtre_pagination_dist($Numrows["_liste_syndicart"]["grand_total"],
 		'_liste_syndicart',
		isset($Pile[0]['debut_liste_syndicart'])?$Pile[0]['debut_liste_syndicart']:intval(_request('debut_liste_syndicart')),
		(($a = intval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'nb', null), '10'),true)))) ? $a : 10), true, 'prive', '', array())))!=='' ?
				('<p class=\'pagination\'>' . $t3 . '</p>') :
				'') .
		'
</div>
')) :
		((($t2 = strval(interdire_scripts(sinon(table_valeur(@$Pile[0], (string)'sinon', null), ''))))!=='' ?
			('
<div class="liste-objets syndic_articles caption-wrap"><strong class="caption">' . $t2 . '</strong></div>
') :
			''))) .
'
');

	return analyse_resultat_skel('html_03d3e3472fbc0d0ca045280911fa9f16', $Cache, $page, '../plugins-dist/sites/prive/objets/liste/syndic_articles.html');
}
?>