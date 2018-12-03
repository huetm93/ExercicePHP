<?php

$ville[01]="Ain";
$ville[03]="Allier";
$ville[07]="Ardèche";
$ville[15]="Cantal";
$ville[26]="Drôme";
$ville[38]="Isère";
$ville[42]="Loire";
$ville[43]="Haute-loraine";
$ville[63]="Puy-de-Dôme";
$ville[69]="Rhône";
$ville[73]="Savoie";
$ville[74]="Haute-Savoie";
$ville[57]="Metz";

echo $ville[69] . '</br>';

foreach ($ville as $key => $value) {
	echo 'Le département ' . $value . ' qui a le numéro ' . $key . '. </br>';
}

?>