<?php
//Récupération des données postées
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);
$isSubmitted = filter_has_var(INPUT_POST, 'submit');

$errors = [];
if ($isSubmitted) {
    //Validation des données
    if (empty($login)) {
        $errors[] = "Vous devez saisir un identifiant!";
    }
    if (empty($password)) {
        $errors[] = "Vous devez saisir un mot de passe!";
    }

//traitement des données
//s'il n'y a pas d'erreurs
    if (count($errors) == 0) {
        $ok = $login == "admin" && $password == "123";
        if ($ok) {
            $_SESSION["role"] = "admin";
            $_SESSION["username"] = "Administrateur";
            //Redirection
            header("location:index.php?controller=accueil-admin");

        } else {
            $errors[] = "Vos informations d'identification sont incorrects!";
        }
    }
}
//affichage du formulaire
renderView(
    'login-admin',['errors' => $errors,
                        'login' => $login,
                        'pageTitle' => 'login administration'
    ]
);
