<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Cache Results</title>
</head>
<body>

<?php
date_default_timezone_set('Europe/Minsk');
include("get_title.php");

$urls = explode("\n", $_POST['urls']);

$contents = array();
foreach($urls as $url){
	$contents[] = file_get_contents("http://webcache.googleusercontent.com/search?hl=en&source=hp&biw=1366&bih=667&q=cache%3A$url&aq=f&aqi=g10&aql=&oq=");
};

$pattern = 'This is Google';

foreach($contents as $page){
	$check = strpos($page, $pattern);
	preg_match('#<title>(.+?)</title>#msi', $page, $title);
	
	if ($check === false){
		//foreach($urls as $title){
		//	echo getTitle($title);
		//}
		//echo $title[1];
		echo "The page is not cached";
		echo "<br />";
	} else{
		//foreach($urls as $title){
		//	echo getTitle($title);
		//}
		//echo $title[1];
		echo "The page is cached";
		echo "<br />";
	}
}
?>
</body>
</html>
