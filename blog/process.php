<?php

// on va vérifier qu'on reçoit les données du formulaire
// print_r($_POST);

if (isset($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['description'])) {
        // je crée un tableau à partir des données que je reçois

        $post = [
            'id' => uniqid(),
            'postTitle' => $_POST['title'],
            'postDescription' => $_POST['description'],
        ];

        // il reste à sauver le post dans la bdd
        // on récupère le contenu de la bdd (le contenu du fichier db.json dans notre cas)
        $fileContent = file_get_contents('./db.json');

        // on transforme le contenu json en tableau associatif
        $posts = json_decode($fileContent, true);

        // print_r($posts);

        // on va ajouter le post qu'on a créé au tableau qui contient la bdd
        array_push($posts, $post);

        // on va maintenant envoyer la liste des posts vers la bdd
        file_put_contents('./db.json', json_encode($posts));

        // on redirige vers index.php
        header('Location:index.php?status=success');
    } else {
        header('Location:index.php?status=error');
    }
} else {
    header('Location:index.php');
}