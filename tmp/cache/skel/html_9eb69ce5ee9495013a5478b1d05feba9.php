<?php

/*
 * Squelette : squelettes/article.html
 * Date :      Fri, 05 Jun 2015 23:41:44 GMT
 * Compile :   Fri, 05 Jun 2015 23:41:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/article.html
// Temps de compilation total: 0.515 ms
//

function html_9eb69ce5ee9495013a5478b1d05feba9($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('404') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/article.html\',\'html_9eb69ce5ee9495013a5478b1d05feba9\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_9eb69ce5ee9495013a5478b1d05feba9', $Cache, $page, 'squelettes/article.html');
}
?>