<?php

//Fonction qui renvoie si l'utilisateur est connecté ou pas 
function is_connected(): bool {
    if(session_status() === PHP_SESSION_NONE){
       session_start(); //On lance à partir d'ici la session si elle n'est pas lancée pour éviter d'avoir des doublons dans le code.
    }
return !empty($_SESSION['user']);  
}

function get_user_connected(): void{
	if(!is_connected()){
	//Si l'utilisateur n'est pas connecté on l'envoie directement vers la page de connexion en réutilisant la fonction is_connected 
	header('Location: index.php?page=4'); //Page de connexion
	exit(); //On quitte directement pour garder une bonne optimisation 
}

}


?>