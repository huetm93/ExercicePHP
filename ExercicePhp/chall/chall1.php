<?php
function longestWord($send){
$words = str_word_count($send, 1);
$motsLong = 0; // remplace le mot par le plus long !
for($i=0;$i<sizeof($mots);$i++){
if(strlen($mots[$i])>strlen($mots[$motsLong])){
$motsLong = $i;
}
}
return $mots[$motsLong];
}
echo longestWord("I am Tekxy and i am the best");
?>