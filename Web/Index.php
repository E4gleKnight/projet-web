<?php
//Récupération du controller
$controllerName = $_GET["controller"];
//Définition du dossier racine du projet
//Ici le dossier WEB
define('ROOT_PATH', dirname(__DIR__));

//Définition du chemin du controller
require ROOT_PATH.'/src/controllers/'.$controllerName.'.php';
//Test de l'existence du controller
if (! file_exists($controllerPath)) {
	//Envoie vers le fichier erreur
	$controllerPath = ROOT_PATH.'/src/controllers/erreur.php';
}
//Execution du controlleur
require $controllerPath;
?>