<?php

$nombre= (integer) 1;

while($nombre < 10){
	echo 'voici ton nombre' . $nombre . '<br>';
	$nombre+=$nombre/2;
}

?>