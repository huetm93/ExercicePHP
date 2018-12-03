<?php

$prix= (integer) 785;
$ristourne= (float) $prix/100*30;
$nouveauprix= (float) $prix-$ristourne;

echo 'Votre commande à été faite:</br> Le prix de votre pull est de ' . $prix . '</br>une ristourne de ' . $ristourne . '</br>Votre nouveau prix ' . $nouveauprix;


?>