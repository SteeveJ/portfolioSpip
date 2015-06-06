<?php

/*
 * Squelette : ../plugins-dist/sites/prive/squelettes/contenu/site_edit.html
 * Date :      Wed, 03 Jun 2015 10:33:29 GMT
 * Compile :   Thu, 04 Jun 2015 21:55:48 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/squelettes/contenu/site_edit.html
// Temps de compilation total: 0.953 ms
//

function html_fc278d377c403fea7731589e5d1a4c9b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/echafaudage/contenu/objet_edit') . ', array_merge('.var_export($Pile[0],1).',array(\'objet\' => ' . argumenter_squelette('site') . ',
	\'id_objet\' => ' . argumenter_squelette(@$Pile[0]['id_syndic']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/sites/prive/squelettes/contenu/site_edit.html\',\'html_fc278d377c403fea7731589e5d1a4c9b\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_fc278d377c403fea7731589e5d1a4c9b', $Cache, $page, '../plugins-dist/sites/prive/squelettes/contenu/site_edit.html');
}
?>