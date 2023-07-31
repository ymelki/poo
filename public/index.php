<?php

// routeur

// var_dump($_SERVER);

// si dans l'url il est ecrit /accueil ($_SERVER['path_info']) alors lance ce code
// si dans l'url il est ecrit /liste_livre alors lance ce code
// si non erreur

if ($_SERVER['PATH_INFO']=="/home"){
    include __DIR__.'/../src/Controller/HomeController.php';
 // ramener la vue
 // erreur    include __DIR__.'/../templates/accueil.php';
// a faire dans le controlleur

}


if ($_SERVER['PATH_INFO']=="/home_bis"){
    include __DIR__.'/../src/Controller/HomeController.php';
}

// CRUD BOOKS
elseif ($_SERVER['PATH_INFO']=="/books"){
    include __DIR__.'/../src/Controller/BookController.php';
    getBooks();
}

elseif ($_SERVER['PATH_INFO']=="/one_book"){
    include __DIR__.'/../src/Controller/BookController.php';
    getOneBooks();
}

elseif ($_SERVER['PATH_INFO']=="/remove_book"){
    include __DIR__.'/../src/Controller/BookController.php';
}

elseif ($_SERVER['PATH_INFO']=="/insert_book"){
    include __DIR__.'/../src/Controller/BookController.php';
}


else {
    echo "Erreur 404";
}