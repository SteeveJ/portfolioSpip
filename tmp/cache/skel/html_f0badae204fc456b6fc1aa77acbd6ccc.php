<?php

/*
 * Squelette : ../plugins-dist/sites/formulaires/editer_site.html
 * Date :      Wed, 03 Jun 2015 10:33:27 GMT
 * Compile :   Thu, 04 Jun 2015 21:55:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/formulaires/editer_site.html
// Temps de compilation total: 14.581 ms
//

function html_f0badae204fc456b6fc1aa77acbd6ccc($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_editer formulaire_editer_site formulaire_editer_site-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_site', null), 'nouveau'),true)) .
((table_valeur(@$Pile[0], (string)'logo', null))  ?
		(' ' . ' ' . 'withlogo') :
		'') .
'">
	' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_ok', null)))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'verif_url_auto'))))!=='' ?
		('<p class="notice">' . $t1 . '</p>') :
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
	'</div>' .
	'<input type=\'hidden\' name=\'id_syndic\' value=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_syndic', null),true)) .
	'\' />
		<input type=\'hidden\' name=\'syndication_old\' value="' .
	table_valeur(@$Pile[0], (string)'syndication', null) .
	'" />
		' .
	(($t2 = strval(sinon(table_valeur(@$Pile[0], (string)'logo', null), '')))!=='' ?
			('<input type=\'hidden\' name=\'logo\' value=\'' . $t2 . '\' />') :
			'') .
	'
		' .
	(($t2 = strval(sinon(table_valeur(@$Pile[0], (string)'format_logo', null), '')))!=='' ?
			('<input type=\'hidden\' name=\'format_logo\' value=\'' . $t2 . '\' />') :
			'') .
	'


		' .
	(($t2 = strval(filtrer('image_graver',filtrer('image_reduire',table_valeur(@$Pile[0], (string)'logo', null),'180','999'))))!=='' ?
			('<!-- Le logo auto-detecte -->
		<div class=\'previsu_logo_site\'>' . $t2 . '</div>') :
			'') .
	'

		<ul>
		' .
	(($t2 = strval(interdire_scripts(((((($a = (intval(entites_html(table_valeur(@$Pile[0], (string)'id_syndic', null),true)) > '0')) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'url_site', null),true)))) ?'' :' '))))!=='' ?
			($t2 . (	'
			' .
		(($t3 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'statut', null) == '0minirezo') ? ' ':interdire_scripts(invalideur_session($Cache, (((table_valeur(entites_html(table_valeur(@$Pile[0], (string)'config', null),true),'proposer_sites') > '0')) ?' ' :''))))))))!=='' ?
				($t3 . (	'
			<li class="editer editer_referencement_automatise fieldset">
			  <fieldset>
				  <ul>
					  <li class="editer editer_url_auto pleine_largeur' .
			((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url_auto'))  ?
					(' ' . ' ' . 'erreur') :
					'') .
			'">
							' .
			(($t4 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url_auto')))!=='' ?
					('<span class=\'erreur_message\'>' . $t4 . '</span>') :
					'') .
			'
							<p class="explication">' .
			_T('sites:texte_referencement_automatique') .
			'</p>
							<input type="text" name="url_auto" id="url_auto" class=\'text\' size=\'40\' value="' .
			interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'url_site', null),true)) OR (is_string($a) AND strlen($a))) ? $a : 'http://')) .
			'" />
					  </li>
				  </ul>
				  <p class="boutons"><input type=\'submit\' class=\'submit\' name=\'ajoute_url_auto\' value=\'' .
			_T('public|spip|ecrire:bouton_ajouter') .
			'\' /></p>
					<p class="explication">' .
			_T('sites:texte_non_fonction_referencement') .
			'</p>
				</fieldset>
		  </li>
			')) :
				''))) :
			'') .
	'
	    <li class="editer editer_nom_site obligatoire' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom_site'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
		    	<label for="nom_site">' .
	_T('sites:info_nom_site_2') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'nom_site')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
		      	') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'nom_site\' id=\'nom_site\' value="' .
	table_valeur(@$Pile[0], (string)'nom_site', null) .
	'" />
	    </li>
	    <li class="editer editer_url_site obligatoire' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url_site'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
		    	<label for="url_site">' .
	_T('sites:entree_adresse_site') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'url_site')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
		    	') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'url_site\' id=\'url_site\' value="' .
	table_valeur(@$Pile[0], (string)'url_site', null) .
	'" />
	    </li>

	 		' .
	(($t2 = strval(filtre_chercher_rubrique_dist('',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_syndic', null),true)),interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_parent', null),true)))),'site',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_secteur', null),true)),table_valeur(table_valeur(@$Pile[0], (string)'config', null),'restreint'),'0','form_simple')))!=='' ?
			((	'<li class="editer editer_parent' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_parent'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<label for="titreparent">' .
		_T('public|spip|ecrire:titre_cadre_interieur_rubrique') .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_parent')))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'
				</label>') . $t2 . '
	    </li>') :
			'') .
	'
	    
	    <li class="editer editer_descriptif' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'descriptif'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
		    	<label for="descriptif">' .
	_T('sites:entree_description_site') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'descriptif')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
		    	') :
			'') .
	'<textarea name=\'descriptif\' id=\'descriptif\' rows=\'4\' cols=\'40\'>' .
	table_valeur(@$Pile[0], (string)'descriptif', null) .
	'</textarea>
	    </li>
	    ' .
	(!(table_valeur(table_valeur(@$Pile[0], (string)'config', null),'activer_syndic') == 'non')  ?
			(' ' . (	'
	    <li class="editer editer_syndications fieldset">
			<fieldset>
				<h3 class="legend"><img src=\'' .
		interdire_scripts(chemin_image('rss-16.png')) .
		'\' alt="' .
		_T('sites:info_syndication') .
		'" />
				' .
		_T('sites:bouton_radio_syndication') .
		'
				' .
		interdire_scripts((($aider=charger_fonction('aider','inc'))?$aider('rubsyn','../plugins-dist/sites/formulaires/editer_site.html', $Pile[0]):'')) .
		'</h3>
				<ul>
					<li class="editer editer_syndication pleine_largeur">
						<div class="choix">
							<input type=\'radio\' class="radio" name=\'syndication\' value=\'non\' id=\'syndication_non\'' .
		(($t3 = strval(interdire_scripts((match(entites_html(table_valeur(@$Pile[0], (string)'syndication', null),true),'oui|off') ? '':'checked="checked"'))))!=='' ?
				(' ' . $t3) :
				'') .
		' />
							<label for=\'syndication_non\'>' .
		_T('sites:bouton_radio_non_syndication') .
		'</label>
						</div>
						<div class="choix">
							<input type=\'radio\' class="radio" name=\'syndication\' value=\'oui\' id=\'syndication_oui\'' .
		(($t3 = strval(interdire_scripts((match(entites_html(table_valeur(@$Pile[0], (string)'syndication', null),true),'oui|off') ? 'checked="checked"':''))))!=='' ?
				(' ' . $t3) :
				'') .
		' />
							<label for=\'syndication_oui\'>' .
		_T('sites:bouton_radio_syndication') .
		'</label>
						</div>
					</li>
					<li class="editer editer_url_syndic">
						<label for=\'url_syndic\'>' .
		_T('sites:entree_adresse_fichier_syndication') .
		'
						</label>' .
		saisie_url_syndic(table_valeur(@$Pile[0], (string)'url_syndic', null),'url_syndic','url_syndic') .
		'
					</li>
				</ul>
			</fieldset>
	    </li>
	    ')) :
			'') .
	'
	  </ul>

	  ' .
	'
	  <!--extra-->
	  <p class="boutons"><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_f0badae204fc456b6fc1aa77acbd6ccc', $Cache, $page, '../plugins-dist/sites/formulaires/editer_site.html');
}
?>