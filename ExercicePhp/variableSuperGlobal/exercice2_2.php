<?php

session_start();

echo 'Votre nom: ' . $_SESSION['name'] . '</br>Votre prénom: ' . $_SESSION['surname'] . '</br>Votre age: ' . $_SESSION['age'];
?>