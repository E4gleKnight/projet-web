<?php

$pageTitle = "Bienvenue sur mon site";
$now = date('l jS \of F Y h:i:s A');

renderView('accueil',
    [
        'pageTitle' => "Bienvenue sur mon site",
        'now' => date('l jS \of F Y h:i:s A')
        ]
);




?>