<?php
//Détruit la session en cours 
session_start(); 
unset($_SESSION['user']); 
header('Location: index.php?page=0');
?>