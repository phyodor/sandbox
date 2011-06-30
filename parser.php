<?php
$file = file_get_contents('sitemap.xml');
preg_match_all('/<loc>(.+)<\/loc>/msU',$file,$ar);
// $tags = array();
// foreach ($ar[1] as $var1){
    // $tags[] = get_meta_tags($var1);
// }

//print_r($ar[1]);

$page = array();
foreach ($ar[1] as $var3){
$page[] = file_get_contents($var3);
}

print_r($var3);
//var_dump($page);


// file_put_contents('pages.txt', $page);
// $pages = file_get_contents('pages.txt');

// print_r($pages);

//$write = fopen('pages.txt', 'b');
//fwrite($write, $page);
//fclose($write);






// $titles = array();
// foreach ($page as $titlestring){
// $titles[] = preg_match_all('/<title>(.+)<\/title>/',$titlestring,$title);
// }
// print_r($title[1][0]);
// echo "<br />";
// print_r($titles);







// foreach ($title as $tag){
	// echo $tag;
	// echo "<br />";
// }

// foreach ($ar[1] as $key => $var1){
// echo "$var1 <br />";
// echo $tags[$key]['description'];
// echo "<br />";
// }

?>