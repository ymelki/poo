<?php

// routeur

// var_dump($_SERVER);

// si dans l'url il est ecrit /accueil ($_SERVER['path_info']) alors lance ce code
// si dans l'url il est ecrit /liste_livre alors lance ce code
// si non erreur

if ($_SERVER['PATH_INFO']=="/accueil"){
    include __DIR__.'/../src/Controller/Accueil.php';
 // ramener la vue
 // erreur    include __DIR__.'/../templates/accueil.php';
// a faire dans le controlleur

}


if ($_SERVER['PATH_INFO']=="/accueil_bis"){
    include __DIR__.'/../templates/accueil.php';
}
elseif ($_SERVER['PATH_INFO']=="/liste_livre"){
    echo "Liste des livres";
}
else {
    echo "Erreur 404";
}