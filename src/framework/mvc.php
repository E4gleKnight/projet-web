<?php
/**
 * @param string $view : le nom de la vue
 * @param array $data : un tableau des données passées à la vue
 * @return string : le code html de la vue
 */
function getTemplate(string $view, array $data =[]){
    //mise en tampo du résultat de l'interprétation PHP
    //n'envoie pas de réponse HTTP implicite
    ob_start();
    //transformation du tableau associatif des données
    //en une suite de variables
    extract($data);

//inclusion du fichier de la vuedans le tampon
    require ROOT_PATH."/src/views/{$view}.php";
//Récupération du contenu du tampon dans une variable
    $content = ob_get_clean();
    return $content;
}

/**
 * affichage du résultat d'une vue décorée par un gabarit
 * @param string $view : le nom de la vue
 * @param $data : un tableau associatif des données passées à la vue
 * @param string $layout : le gabarit qui décorera la vue
 */
function renderView(string $view,
                    array $data = [],
                    string $layout= "gabarit"){
    //Récupération du code html (interpolé) de la vue
    $viewcontent = getTemplate($view,$data);
    //Ajout du rendu de la vue aux données passées au gabarit
    $data["content"]= $viewcontent;
    //Application du gabarit
    $result = getTemplate($layout,$data);

    echo $result;
}