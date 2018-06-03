<?php

include 'config.php';

$json_song = file_get_contents("https://api.laut.fm/station/".$station."/current_song");
$listeners = file_get_contents("https://api.laut.fm/station/".$station."/listeners");
$obj_song = json_decode($json_song);


$subject = $obj_song->ends_at;
$explode = explode(" ", $subject);
$search  = array('+0200', date("Y-m-d"));
$replace = array('', '');
$ends = str_replace($search, $replace, $explode[1]);

echo '<h2>'.$obj_song->title.' <font color="#8c8c8c">&nbsp;&nbsp;- &nbsp;&nbsp;'.$obj_song->artist->name.'</font></h2><h5>Nächster Song um '.$ends.'</h5><h5>Es hören gerade '.$listeners.' Leute zu</h5>';

 ?>
