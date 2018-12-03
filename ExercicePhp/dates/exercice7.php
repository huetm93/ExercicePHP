<?php

$dateajdplus20jr=date_create("2018-11-30");

date_add($dateajdplus20jr,date_interval_create_from_date_string("20 days"));

echo date_format($dateajdplus20jr,"Y-m-d");

?>