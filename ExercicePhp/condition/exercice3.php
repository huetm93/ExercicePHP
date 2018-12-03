<?php

$genre= (string) "homme";
$age = (integer) 18;

if ($genre == "homme" && $age<18){
	echo 'Vous êtes un(e) ' . $genre . ' et vous êtes mineur.</br>';
} else {
	echo 'Vous êtes un(e) ' . $genre . ' et vous êtes majeur.</br>';
}

$genre2= (string) "femme";
$age2 = (integer) 15;

if ($genre2 == "femme" && $age2<18){
	echo 'Vous êtes un(e) ' . $genre2 . ' et vous êtes mineur.</br>';
} else {
	echo 'Vous êtes un(e) ' . $genre2 . ' et vous êtes majeur.</br>';
}


?>