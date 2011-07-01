<?php
$file = file_get_contents('sitemap.xml');
preg_match_all('/<loc>(.+)<\/loc>/msU',$file,$ar);

$tags = array();
foreach ($ar[1] as $var1){
    $tags[] = get_meta_tags($var1);
}

function get($a,$b,$c){ 
	$y = explode($b,$a);
	$x = explode($c,$y[1]);
	return $x[0];
}

foreach ($ar[1] as $key => $var1){
	echo "$var1 <br />";
	echo get(file_get_contents($var1), "<title>", "</title>");
	echo "<br />";
	echo $tags[$key]['description'];
	echo "<br />";
}

?>