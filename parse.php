<?php
$file = file_get_contents('sitemap.xml');
preg_match_all('/<loc>(.+)<\/loc>/msU',$file,$ar);
$tags = array();
foreach ($ar[1] as $var1){
    $tags[] = get_meta_tags($var1);
}
//explode
function get($url,$open,$close){ 
$firstlimiter = explode($open,$url);
$secondlimiter = explode($close,$firstlimiter[1]);
return $firstlimiter[0];
}



foreach ($ar[1] as $url){
echo get(file_get_contents($url), "<title>", "</title>");
echo "<br />";
}

foreach ($ar[1] as $key => $var1){
echo "$var1 <br />";
echo $tags[$key]['description'];
echo "<br />";
}

?>