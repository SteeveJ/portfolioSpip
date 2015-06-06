<?php

/*
 * Squelette : squelettes/inclure/footer.html
 * Date :      Sat, 06 Jun 2015 02:37:58 GMT
 * Compile :   Sat, 06 Jun 2015 03:16:43 GMT
 * Boucles :   _annee
 */ 

function BOUCLE_anneehtml_f3b2253f9f504241925b32595753edb4(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_annee';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.date",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array('articles.date');
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''));
		$command['join'] = array();
		$command['limit'] = '0,1';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inclure/footer.html','html_f3b2253f9f504241925b32595753edb4','_annee',17,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (($t1 = strval(interdire_scripts((((annee(normaliser_date($Pile[$SP]['date'])) != date('Y'))) ?' ' :''))))!=='' ?
		($t1 . interdire_scripts(annee(normaliser_date($Pile[$SP]['date'])))) :
		'');
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_annee @ squelettes/inclure/footer.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inclure/footer.html
// Temps de compilation total: 12.655 ms
//

function html_f3b2253f9f504241925b32595753edb4($Cache, $Pile, $doublons=array(), $Numrows=array(), $SP=0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Footer start -->

<footer id="footer">
	<div class="container">
		<div class="row">

			<div class="col-sm-12">

				<ul class="social-links">
					<li><a href="https://www.facebook.com/jsuisover" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/SteeveJerent" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://github.com/SteeveJ" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-github"></i></a></li>
					<li><a href="https://plus.google.com/105485013021515432109/posts" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
				</ul>

				<p class="copyright">
					© ' .
(($t1 = BOUCLE_anneehtml_f3b2253f9f504241925b32595753edb4($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . '-') :
		'') .
interdire_scripts(annee(normaliser_date(@$Pile[0]['date']))) .
' ' .
interdire_scripts(typo($GLOBALS['meta']['nom_site'], "TYPO", $connect, $Pile[0])) .
'.
					<br />' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)) ?'' :' ')))))!=='' ?
		($t1 . (	'<a href="' .
	interdire_scripts(parametre_url(generer_url_public('login', ''),'url',self())) .
	'" rel="nofollow" class=\'login_modal\'>' .
	_T('public|spip|ecrire:lien_connecter') .
	'</a> | ')) :
		'') .
'
					' .
(($t1 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('ecrire')?" ":""))))!=='' ?
		($t1 . (	' <a href="' .
	interdire_scripts(eval('return '.'_DIR_RESTREINT_ABS'.';')) .
	'">' .
	_T('public|spip|ecrire:espace_prive') .
	'</a>')) :
		'') .
'
					' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)) ?' ' :'')))))!=='' ?
		($t1 . (	' | <a href="' .
	executer_balise_dynamique('URL_LOGOUT',
	array(),
	array('squelettes/inclure/footer.html','html_f3b2253f9f504241925b32595753edb4','',19,$GLOBALS['spip_lang'])) .
	'" rel="nofollow">' .
	_T('public|spip|ecrire:icone_deconnecter') .
	'</a> | ')) :
		'') .
'
					<a rel="nofollow" href="' .
interdire_scripts(generer_url_public('contact', '')) .
'">' .
_T('public|spip|ecrire:contact') .
'</a>
				</p>

			</div>

		</div><!-- .row -->
	</div><!-- .container -->
</footer>

<!-- Footer end -->

<!-- Scroll-up -->

<div class="scroll-up">
	<a href="#home"><i class="fa fa-angle-double-up"></i></a>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.magnific-popup.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.magnific-popup.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.parallax-1.1.3.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/imagesloaded.pkgd.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.shuffle.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/twitterFetcher_min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/owl.carousel.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.fitvids.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/jquery.sticky.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'

' .
(($t1 = strval(interdire_scripts(find_in_path('js/smoothscroll.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/wow.min.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'



' .
(($t1 = strval(interdire_scripts(find_in_path('js/custom.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
' .
(($t1 = strval(interdire_scripts(find_in_path('js/custom-shuffle-init.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'

<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
' .
(($t1 = strval(interdire_scripts(find_in_path('js/gmaps.js'))))!=='' ?
		('<script src="' . $t1 . '"></script>') :
		'') .
'
');

	return analyse_resultat_skel('html_f3b2253f9f504241925b32595753edb4', $Cache, $page, 'squelettes/inclure/footer.html');
}
?>