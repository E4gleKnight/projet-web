<?php
//Démarrage de la session
session_start();

//Récupération du controller
//avec gestion de la page de défaut
if (isset($_GET["controller"])) {
	$controllerName = $_GET["controller"];
}else{
	$controllerName = "accueil";
}
//Sécurisation de l'accès à l'administration
session_regenerate_id(true);
$secureRoutes = ['accueil-admin'];
$role =  isset($_SESSION['role'])?$_SESSION['role']:"";
//si on tente d'accèder à une page sécurisée sans s'être identifier , renvoi a la page login-admin (formulaire de log)
if (in_array($controllerName,$secureRoutes)&& $role !="admin"){
    header("location:index.php?controller=login-admin");
}
 
//Définition du dossier racine du projet
//Ici le dossier WEB
define('ROOT_PATH', dirname(__DIR__));

//Inclusion des dépendances du projet
require ROOT_PATH.'/src/config/config.php';
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