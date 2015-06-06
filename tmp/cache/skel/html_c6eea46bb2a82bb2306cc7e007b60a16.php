<?php

/*
 * Squelette : ../plugins-dist/sites/formulaires/configurer_sites.html
 * Date :      Wed, 03 Jun 2015 10:33:27 GMT
 * Compile :   Thu, 04 Jun 2015 13:56:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/formulaires/configurer_sites.html
// Temps de compilation total: 14.370 ms
//

function html_c6eea46bb2a82bb2306cc7e007b60a16($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
<h3 class=\'titrem\'><img src="' .
interdire_scripts(chemin_image('site-24.png')) .
'" class="cadre-icone" />' .
_T('sites:titre_referencement_sites') .
interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('reference','../plugins-dist/sites/formulaires/configurer_sites.html', $Pile[0]):'')) .
'</h3>
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\'><div>
		
		' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div><ul>
			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'activer_sites') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<div class="choix">
					<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui" value="oui"
					onchange="if ($(this).prop(\'checked\')) $(\'li.editer_activer_sites\').siblings(\'li\').show(\'fast\');"
					' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui">' .
	_T('sites:item_gerer_annuaire_site_web') .
	'</label>
				</div>
				<div class="choix">
					<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non" value="non"
					onchange="if ($(this).prop(\'checked\')) $(\'li.editer_activer_sites\').siblings(\'li\').hide(\'fast\');"
					' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non">' .
	_T('sites:item_non_gerer_annuaire_site_web') .
	'</label>
				</div>
			</li>
			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'proposer_sites') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'"' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'activer_sites', null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'style=\'display:none;\'') :
			'') .
	'>
				<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('sites:info_question_proposer_site') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'
				<select name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">
					<option value="0"' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '0')) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	'>' .
	_T('public|spip|ecrire:item_choix_administrateurs') .
	'</option>
					<option value="1"' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '1')) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	'>' .
	_T('public|spip|ecrire:item_choix_redacteurs') .
	'</option>
					<option value="2"' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '2')) ?' ' :''))))!=='' ?
			($t2 . 'selected="selected"') :
			'') .
	'>' .
	_T('public|spip|ecrire:item_choix_visiteurs') .
	'</option>
				</select>
			</li>
			<li class="fieldset"' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'activer_sites', null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'style=\'display:none;\'') :
			'') .
	'>
				<fieldset><legend>' .
	_T('sites:titre_syndication') .
	interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('rubsyn','../plugins-dist/sites/formulaires/configurer_sites.html', $Pile[0]):'')) .
	'</legend>
					<ul>
						' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'activer_syndic') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							<div class="explication">' .
	_T('sites:texte_syndication') .
	'</div>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<div class="choix">
								<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui" value="oui"
								' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui">' .
	_T('sites:item_utiliser_syndication') .
	'</label>
							</div>
							<div class="choix">
								<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non" value="non"
								' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non">' .
	_T('sites:item_non_utiliser_syndication') .
	'</label>
							</div>
						</li>
						' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'moderation_sites') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<li class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							<div class="explication">' .
	_T('sites:texte_liens_sites_syndiques') .
	'</div>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<div class="choix">
								<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui" value="oui"
								' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui">' .
	_T('sites:item_bloquer_liens_syndiques') .
	'</label>
							</div>
							<div class="choix">
								<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non" value="non"
								' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	' /><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non">' .
	_T('sites:item_non_bloquer_liens_syndiques') .
	'</label>
							</div>
						</li>
					</ul>
				</fieldset>
			</li>
		</ul>
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_c6eea46bb2a82bb2306cc7e007b60a16', $Cache, $page, '../plugins-dist/sites/formulaires/configurer_sites.html');
}
?>