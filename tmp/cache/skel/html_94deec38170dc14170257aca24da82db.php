<?php

/*
 * Squelette : squelettes/formulaires/ecrire_auteur.html
 * Date :      Sat, 06 Jun 2015 01:02:08 GMT
 * Compile :   Sat, 06 Jun 2015 01:14:01 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/formulaires/ecrire_auteur.html
// Temps de compilation total: 14.998 ms
//

function html_94deec38170dc14170257aca24da82db($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
<section class="contact">

	<div class="formulaire_spip formulaire_ecrire_auteur ajax" id="formulaire_ecrire_auteur' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
'">
	<br class=\'bugajaxie\' />
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
	'#formulaire_ecrire_auteur' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
	'\' enctype=\'multipart/form-data\'>
		
		' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(@$Pile[0]['_hidden']?@$Pile[0]['_hidden']:'') .
	'</div>
		' .
	(($t2 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'previsu')) ?' ' :''))))!=='' ?
			($t2 . (	'
		<div class="previsu text-center">
			' .
		_T('public|spip|ecrire:previsualisation') .
		'
				<p>Your mail : ' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'sujet_message_auteur', null),true)) .
		'- ' .
		interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'email_message_auteur', null),true)) .
		'</p>
				<p>Your message : ' .
		interdire_scripts(nl2br(entites_html(table_valeur(@$Pile[0], (string)'texte_message_auteur', null),true))) .
		'</p>
			<p class="boutons"><input type="submit" class="submit" name="confirmer" value="' .
		_T('public|spip|ecrire:form_prop_confirmer_envoi') .
		'" /></p>
		</div>
		')) :
			'') .
	'
		

		' .
	_T('public|spip|ecrire:envoyer_message') .
	' : </br>
		<div class="form-group wow fadeInUp editer saisie_email_message_auteur obligatoire' .
	(($t2 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'email_message_auteur')) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'">
			<label class="sr-only" for="email_message_auteur' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
	'">' .
	_T('public|spip|ecrire:entree_adresse_email') .
	' ' .
	_T('public|spip|ecrire:info_obligatoire_02') .
	'</label>
			' .
	(($t2 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'email_message_auteur'))))!=='' ?
			('<span class="erreur_message">' . $t2 . '</span>') :
			'') .
	'
			<input' .
	(($t2 = strval(('' ? 'required="required" type="email" class="text email form-control"':'type="text" class="text form-control"')))!=='' ?
			(' ' . $t2) :
			'') .
	' name="email_message_auteur" id="email_message_auteur' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
	'" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'email_message_auteur', null),true)) .
	'" size="30" />
		</div>

		<div class="form-group wow fadeInUp editer saisie_sujet_message_auteur obligatoire' .
	(($t2 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'sujet_message_auteur')) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'" data-wow-delay=".1s">
			<label class="sr-only" for="sujet_message_auteur' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
	'">' .
	_T('public|spip|ecrire:form_prop_sujet') .
	' ' .
	_T('public|spip|ecrire:info_obligatoire_02') .
	'</label>
			' .
	(($t2 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'sujet_message_auteur'))))!=='' ?
			('<span class="erreur_message">' . $t2 . '</span>') :
			'') .
	'
			<input type="text" class="text form-control" name="sujet_message_auteur" id="sujet_message_auteur' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
	'" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'sujet_message_auteur', null),true)) .
	'" size="30" />
		</div>

		<div class="form-group wow fadeInUp editer saisie_texte_message_auteur obligatoire' .
	(($t2 = strval(interdire_scripts(((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte_message_auteur')) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'" data-wow-delay=".2s">
			<label class="sr-only" for="texte_message_auteur' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
	'">' .
	_T('public|spip|ecrire:info_texte_message') .
	' ' .
	_T('public|spip|ecrire:info_obligatoire_02') .
	'</label>
			' .
	(($t2 = strval(interdire_scripts(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte_message_auteur'))))!=='' ?
			('<span class="erreur_message">' . $t2 . '</span>') :
			'') .
	'
			<textarea class="form-control" name="texte_message_auteur" id="texte_message_auteur' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)) .
	'" rows="7" >' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'texte_message_auteur', null),true)) .
	'</textarea>
		</div>


		
		<p style="display: none;">
			<label for="nobot">' .
	_T('public|spip|ecrire:antispam_champ_vide') .
	'</label>
			<input type="text" class="text" name="nobot" id="nobot" value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'nobot', null),true)) .
	'" size="10" />
		</p>
		<button type="submit" class="btn btn-block btn-custom-2 wow fadeInUp" name="valide" data-wow-delay=".3s">' .
	_T('public|spip|ecrire:form_prop_envoyer') .
	'</button>
	</form>
	')) :
		'') .
'
	</div>

</section>
');

	return analyse_resultat_skel('html_94deec38170dc14170257aca24da82db', $Cache, $page, 'squelettes/formulaires/ecrire_auteur.html');
}
?>