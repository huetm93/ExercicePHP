<?php

function seven ($genre, $age){
	if ($genre=="Homme" && $age<18){
		return 'Vous êst un homme et vous êtes mineur';
	} elseif ($genre=="Homme" && $age>=18){
		return 'Vous êtes un homme et vous êtes majeur';
	} elseif ($genre=="Femme" && $age<18){
		return 'Vous êtes une femme et vous êtes mineur';
	} elseif ($genre=="Femme" && $age>=18){
		return 'Vous êtes une femme et vous êtes majeur';
	} else {
		return 'Vous êtes non-binaire';
	}
}

echo seven("Femme",18);

?>