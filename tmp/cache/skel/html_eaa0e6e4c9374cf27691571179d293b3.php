<?php

/*
 * Squelette : ../prive/formulaires/dateur/jquery.dateur.js.html
 * Date :      Wed, 03 Jun 2015 10:33:58 GMT
 * Compile :   Thu, 04 Jun 2015 12:54:09 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/dateur/jquery.dateur.js.html
// Temps de compilation total: 1.256 ms
//

function html_eaa0e6e4c9374cf27691571179d293b3($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("' . 'Content-Type: text/js;' . '"); ?'.'>
if (!jQuery.fn.datepicker){
' .
charge_scripts('prive/javascript/ui/jquery.ui.core.js',false) .
charge_scripts('prive/javascript/ui/jquery.ui.widget.js',false) .
charge_scripts('prive/javascript/ui/jquery.ui.datepicker.js',false) .
'}
if (!jQuery.fn.timePicker){
' .
charge_scripts('prive/formulaires/dateur/jquery.time_picker.js',false) .
'}
');

	return analyse_resultat_skel('html_eaa0e6e4c9374cf27691571179d293b3', $Cache, $page, '../prive/formulaires/dateur/jquery.dateur.js.html');
}
?>