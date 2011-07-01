<?php
date_default_timezone_set('Europe/Minsk');

function getTitle($url){ 
    $content = file_get_contents($url);
    if (preg_match('/<title>([^<]*)<\/title>/', $content, $matches)) {
        return $matches[1];
    } else {
        return null;
    }
}

echo getTitle('http://www.residence3.com');
echo "<br />";

?>