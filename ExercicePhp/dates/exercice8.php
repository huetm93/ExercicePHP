<?php

$dateajdmoin22jr=date_create("2018-11-30");

date_sub($dateajdmoin22jr,date_interval_create_from_date_string("22 days"));

echo date_format($dateajdmoin22jr,"Y-m-d");

?>