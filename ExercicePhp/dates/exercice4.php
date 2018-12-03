<?php

$timestamp_actuel = strtotime('Today');
$timestamp_last = mktime(15 , 0 , 0 , 8 , 2 , 2016);

echo ' Timestamp actuelle: ' . $timestamp_actuel . ' et le timestamp du 2 août 2016: ' . $timestamp_last;


?>