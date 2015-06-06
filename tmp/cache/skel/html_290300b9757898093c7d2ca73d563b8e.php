<?php

/*
 * Squelette : ../plugins-dist/sites/prive/objets/liste/sites.html
 * Date :      Wed, 03 Jun 2015 10:33:29 GMT
 * Compile :   Thu, 04 Jun 2015 21:55:42 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/sites/prive/objets/liste/sites.html
// Temps de compilation total: 0.299 ms
//

function html_290300b9757898093c7d2ca73d563b8e($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/syndic') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/sites/prive/objets/liste/sites.html\',\'html_290300b9757898093c7d2ca73d563b8e\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_290300b9757898093c7d2ca73d563b8e', $Cache, $page, '../plugins-dist/sites/prive/objets/liste/sites.html');
}
?>