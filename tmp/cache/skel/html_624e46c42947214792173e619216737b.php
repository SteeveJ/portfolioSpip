<?php

/*
 * Squelette : ../prive/squelettes/navigation/visiteurs.html
 * Date :      Wed, 03 Jun 2015 10:34:00 GMT
 * Compile :   Thu, 04 Jun 2015 21:55:13 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/visiteurs.html
// Temps de compilation total: 0.542 ms
//

function html_624e46c42947214792173e619216737b($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/navigation/auteurs') . ', array_merge('.var_export($Pile[0],1).',array(\'is_visiteur\' => ' . argumenter_squelette('1') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/navigation/visiteurs.html\',\'html_624e46c42947214792173e619216737b\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>

');

	return analyse_resultat_skel('html_624e46c42947214792173e619216737b', $Cache, $page, '../prive/squelettes/navigation/visiteurs.html');
}
?>