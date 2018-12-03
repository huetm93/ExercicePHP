<?php

function four($a,$b){
	if ($a<$b){
		return 'le premier nombre est plus petit que le deuxième';
	} elseif ($a>$b){
		return 'Le premier nombre est plus grand que le deuxième';
	} else {
		return 'Les deux nombres sont identiques';
	}
} 
echo four(35,25);

?>