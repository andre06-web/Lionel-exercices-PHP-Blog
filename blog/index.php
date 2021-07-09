<?php

// initalisation de l'affichage des erreurs / Développement only
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // on récupère la valeur du paramètre page dans l'url
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    // var_dump($page);
    } else {
        $page = 'home';
    }

    require_once 'parts/header.php';

    // on va aller chercher la vue qui correspond à la valeur de la variable $page
    if (file_exists("./views/{$page}.php")) {
        // si c'est ok je vais require le fichier

        require_once "./views/{$page}.php";
    } else {
        require_once './views/404.php';
    }

    require_once 'parts/footer.php';