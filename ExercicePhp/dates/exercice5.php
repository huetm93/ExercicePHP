<?php
$dateactuelle = strtotime('Today');
$datelast = strtotime('16 may 2016');


$nbjour = $dateactuelle-$datelast;
$nbjour = $nbjour/86400;


echo 'Voici le nombre de jour entre aujourd\'hui et le 16 mai 2016: ' . $nbjour;

?>