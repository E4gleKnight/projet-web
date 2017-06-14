<?php
//Récupération du controller
//avec gestion de la page de défaut
if (isset($_GET["controller"])) {
	$controllerName = $_GET["controller"];
}else{
	$controllerName = "accueil";
}
 
//Définition du dossier racine du projet
//Ici le dossier WEB
define('ROOT_PATH', dirname(__DIR__));

//Inclusion des dépendances du projet
require ROOT_PATH.'/src/framework/mvc.php';

//Définition du chemin du controller
$controllerPath = ROOT_PATH.'/src/controllers/'.$controllerName.'.php';
//Test de l'existence du controller
if (! file_exists($controllerPath)) {
	//Envoie vers le fichier erreur
	$controllerPath = ROOT_PATH.'/src/controllers/erreur.php';
}
//Execution du controlleur
require $controllerPath;

?>