
<?php
/*
Plugin Name: myplugin
*/

add_action('the_title', 'my_title');

function my_title($title) {
$words = str_replace('o', '⚽️', $title);
return $words;
}


?>