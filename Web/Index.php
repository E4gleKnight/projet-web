<?php
//Récupération du controller
$controllerName = $_GET["controller"];
//Définition du dossier racine du projet
//Ici le dossier WEB
define('ROOT_PATH', dirname(__DIR__));

//Exécution du controller
require ROOT_PATH.'/src/controllers/'.$controllerName.'.php';
?>