<?php

/*
 * Squelette : ../prive/echafaudage/hierarchie/objet.sans_rubrique.html
 * Date :      Wed, 03 Jun 2015 10:33:58 GMT
 * Compile :   Thu, 04 Jun 2015 12:52:20 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/echafaudage/hierarchie/objet.sans_rubrique.html
// Temps de compilation total: 4.931 ms
//

function html_4c84779d426747f2da26d326c00cb40c($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- hierarchie -->
' .
(($t1 = strval(generer_url_ecrire(interdire_scripts(objet_info(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true),'table_objet')))))!=='' ?
		('<a
				href="' . $t1 . (	'">' .
	interdire_scripts(_T(objet_info(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true),'texte_objets'))) .
	'</a> &gt;
' .
	interdire_scripts(changer_typo(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'lang'))) .
	'
	<strong class="on">' .
	interdire_scripts(((($a = couper(generer_info_entite(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)), 'titre'),'80')) OR (is_string($a) AND strlen($a))) ? $a : _T('ecrire:info_sans_titre'))) .
	'</strong>
' .
	changer_typo('') .
	'
')) :
		''));

	return analyse_resultat_skel('html_4c84779d426747f2da26d326c00cb40c', $Cache, $page, '../prive/echafaudage/hierarchie/objet.sans_rubrique.html');
}
?>