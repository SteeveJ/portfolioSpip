<?php

/*
 * Squelette : ../plugins-dist/statistiques/prive/style_prive_plugin_stats.html
 * Date :      Wed, 03 Jun 2015 10:33:35 GMT
 * Compile :   Wed, 03 Jun 2015 10:41:34 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/prive/style_prive_plugin_stats.html
// Temps de compilation total: 3.432 ms
//

function html_b89d28a63a51aa115457e82900202130($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<?php header("X-Spip-Cache: 360000"); ?>'.'<?php header("Cache-Control: max-age=360000"); ?>'.'<?php header("X-Spip-Statique: oui"); ?>' .
'<'.'?php header("' . 'Content-Type: text/css; charset=iso-8859-15' . '"); ?'.'>' .
'<'.'?php header("' . 'Vary: Accept-Encoding' . '"); ?'.'>' .
vide($Pile['vars'][$_zzz=(string)'claire'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_claire', null), 'edf3fe'),true)))) .
vide($Pile['vars'][$_zzz=(string)'foncee'] = (	'#' .
	interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'couleur_foncee', null), '3874b0'),true)))) .
vide($Pile['vars'][$_zzz=(string)'left'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','left','right'))) .
vide($Pile['vars'][$_zzz=(string)'right'] = interdire_scripts(choixsiegal(entites_html(table_valeur(@$Pile[0], (string)'ltr', null),true),'left','right','left'))) .
'ol.classement {list-style:decimal;margin:0;padding:0;padding-' .
table_valeur($Pile["vars"], (string)'left', null) .
':40px;margin-bottom:1.5em;}


table.visites caption, h3.caption {font-size:1.3em;font-weight:bold;text-align: center;margin:0.5em auto; clear:both;}
.stats_visites #contenu h3.caption {float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';margin:0.5em auto;}
table.visites {width: 80%; margin-bottom: 1em; border-collapse: collapse; border-spacing: 0; line-height: normal;border:1px solid #999;}
table.visites a {color:#' .
filtrer('couleur_foncer',table_valeur($Pile["vars"], (string)'foncee', null)) .
';}

table.visites tr.row_first { background-color:#' .
filtrer('couleur_foncer',table_valeur($Pile["vars"], (string)'foncee', null)) .
';color:#fff;border: 1px solid #ddd; }
table.info.visites tr.row_first { background-color:#fff;color:#000;border: 1px solid #ddd; }
table.info.visites tr.odd td,table.info.visites tr.odd th { background-color:transparent; }
table.visites th, table.visites td { padding: 0.20em 0.40em; text-align: ' .
table_valeur($Pile["vars"], (string)'left', null) .
'; border: 1px solid #ddd; }
table.visites th { vertical-align: bottom; font-weight: bold; }
table.visites.info th { vertical-align: top; }
table.visites tbody th { font-weight: normal; }
table.visites .on th { font-weight: bold; }
table.visites td { vertical-align: top; }
table.visites td.val, table.visites td.mean, table.visites td.cumul { text-align:center; }

table.visites tr.c_Sun td,
table.visites tr.c_Sun th {background-color:#' .
filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'claire', null)) .
';}
table.visites tr.c_today td,
table.visites tr.c_today th {background-color:#eee;}
/*
table#visites tr.c_recap td,
table#visites tr.c_recap th {background-color:#' .
filtrer('couleur_foncer',table_valeur($Pile["vars"], (string)'foncee', null)) .
';color:#fff;}
*/


/* graphique flot */
.graphique{clear:both; overflow:hidden; margin-bottom:2em;}
.graphResult-wrap {padding: 10px 25px;float:' .
table_valeur($Pile["vars"], (string)'left', null) .
';}
.graphResult{}
.graphInfo{float:' .
table_valeur($Pile["vars"], (string)'left', null) .
'; clear:' .
table_valeur($Pile["vars"], (string)'left', null) .
';margin-' .
table_valeur($Pile["vars"], (string)'left', null) .
':20px;}
.graphInfo td {padding: 5px;}
.graphInfo td.legendLabel { padding-left:0; padding-right:1em; vertical-align: top;}
.graphLegend{margin-top:0.5em; }
.graphVignette{}
.graphique .tickLabels {font-size: 11px !important;line-height: 14px;}

.graphLegend .legendColorBox div{width:14px; height:10px;}
.graphLegend .legendColorBox.cacher div div{position:absolute; left:-3000em;}


.tooltip_statistiques{
	position: absolute;
	display: none;
	border: 1px solid #fdd;
	padding: 2px;
	background-color: #fee;
}

.stats_referers .liste-items.referers li.referer {padding-left:150px;background-image: url("' .
interdire_scripts(chemin_image('deplierhaut.gif')) .
'");background-position: 0.6925em 0.6925em;background-repeat: no-repeat;}
.stats_referers .liste-items.referers li.referer.open {background-image: url("' .
interdire_scripts(chemin_image('deplierbas.gif')) .
'");}
.stats_referers .liste-items.referers li.referer span.visites {float:left;text-align:right;width:140px;margin-left:-150px;}
.stats_referers .liste-items.referers li.referer .miniature {float:right;}
.stats_referers .liste-items.referers li.referer .miniature img {max-width:60px;height: auto;}
.stats_referers .liste-items.referers li.referer ul {margin-left:0;padding-left:0;}
.stats_referers .liste-items.referers li.referer ul li {margin-left:0px;padding-left:0;}
.stats_referers .action.plus {text-align:right;font-size:1.5em;font-weight:bold;}

.stats_repartition .couleur_cumul { background: ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
'; }
.stats_repartition .couleur_nombre { background: ' .
(($t1 = strval(filtrer('couleur_eclaircir',table_valeur($Pile["vars"], (string)'foncee', null))))!=='' ?
		('#' . $t1) :
		'') .
'; }
.stats_repartition table h3,.stats_repartition table table {margin-bottom: 0;padding-bottom: 0;padding-top: 0;}
.stats_repartition table h3 {font-size: inherit;margin-bottom: 3px;margin-top:3px;}
.stats_repartition table {margin: 0;}
.stats_repartition table + p,.stats_repartition .bloc_depliable + p {margin-top: 1em;}
.stats_repartition table td {padding: 2px 5px;vertical-align: middle;}
.stats_repartition table table td {padding: 0;}
.stats_lang .couleur_langue { background: ' .
table_valeur($Pile["vars"], (string)'foncee', null) .
'; }
.stats_lang table p {padding-left:10px;margin:2px 0;}

');

	return analyse_resultat_skel('html_b89d28a63a51aa115457e82900202130', $Cache, $page, '../plugins-dist/statistiques/prive/style_prive_plugin_stats.html');
}
?>