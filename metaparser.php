<?php
date_default_timezone_set('Europe/Minsk');
$sitemap = file_get_contents('sitemap.xml');
preg_match_all('/<loc>(.+)<\/loc>/msU',$sitemap,$urls);

$tags = array();
foreach ($urls[1] as $url){
    $tags[] = get_meta_tags($url);
}

function getTitle($titletext,$opentag,$closetag){ 
	$titletag = explode($opentag,$titletext);
	$title = explode($closetag,$titletag[1]);
	return $title[0];
}

foreach ($urls[1] as $key => $url){
	echo "URL: " . $url;
	echo "<br />";
	echo "TITLE: " . getTitle(file_get_contents($url), "<title>", "</title>");
	echo "<br />";
	echo "DESCRIPTION: " . $tags[$key]['description'];
	echo "<br />";
	echo "<hr />";
}

?>