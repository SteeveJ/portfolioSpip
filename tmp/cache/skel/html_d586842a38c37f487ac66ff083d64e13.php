<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/contenu/documents.html
 * Date :      Wed, 03 Jun 2015 10:33:25 GMT
 * Compile :   Thu, 04 Jun 2015 12:21:53 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/contenu/documents.html
// Temps de compilation total: 1.369 ms
//

function html_d586842a38c37f487ac66ff083d64e13($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('administrer', 'mediatheque')?" ":""))) .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/mediatheque-navigation') . ', array_merge('.var_export($Pile[0],1).',array(\'media\' => ' . argumenter_squelette(@$Pile[0]['media']) . ',
	\'iddoc\' => ' . argumenter_squelette('doc') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/medias/prive/squelettes/contenu/documents.html\',\'html_d586842a38c37f487ac66ff083d64e13\',\'\',2,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>' .
'
<script type="text/javascript">/*<![CDATA[*/
var multifile=\'' .
interdire_scripts(texte_script(find_in_path('javascript/jquery.multifile.js'))) .
'\';
' .
filtre_compacte_dist(charge_scripts('javascript/medias_edit.js',false),'js') .
'
/*]]>*/</script>');

	return analyse_resultat_skel('html_d586842a38c37f487ac66ff083d64e13', $Cache, $page, '../plugins-dist/medias/prive/squelettes/contenu/documents.html');
}
?>