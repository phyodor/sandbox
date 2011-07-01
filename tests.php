<?php

function get($url,$open,$close){ 
$firstlimiter = explode($open,$url);
$secondlimiter = explode($close,$firstlimiter[1]);
return $firstlimiter[0];
}

echo get(file_get_contents('http://www.residence3.com'), "<title>", "</title>");
echo "<br />";

?>