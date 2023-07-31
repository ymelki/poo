<?php

    define('DSN', 'mysql:host=localhost;dbname=bibli');

    // on doit definir le nom d'utilisateur.
    // on le stock dans la variable constant USER
    define('USER', 'root');

    // on doit definir un mot de passe
    // on le stock dans la variable constant PASS
    define('PASS', '');
// return all books (Array)
function getBooksEntity(){
    


    // creer un objet permettant une connexion à la B.D. 
    // 
    $pdo = new \PDO(DSN, USER, PASS);

    $query = "SELECT * FROM livre";
    // L'instance PDO (objet) utilise une méthode (fonction spécifique à cet objet)
    // permettant d'éxecuter la requête.
    // on stocke le resultat dans la variable statement
    $statement = $pdo->query($query);
    // On utilise statement qui a une méthode (sa propre fonction) permettant
    // de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
    // qui nous permet d'avoir un format de donnée sous forme de tableau
    // associatif
    $livres = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $livres;
 }


function getOneBookEntity($id){
 
    // creer un objet permettant une connexion à la B.D. 
    // 
    $pdo = new \PDO(DSN, USER, PASS);
    $query="SELECT * FROM livre WHERE id=:monidprotege";

    // on va preparer la requete
    $statement = $pdo->prepare($query);
    $statement->bindValue(':monidprotege', $id, \PDO::PARAM_INT);
    
    // On utilise statement qui a une méthode (sa propre fonction) permettant
    // de récupérer les données. On utilise le parametre PDO::FETCH_ASSOC
    // qui nous permet d'avoir un format de donnée sous forme de tableau
    // associatif
    $statement->execute();
    $livre = $statement->fetch(PDO::FETCH_ASSOC);
  

    return $livre;
}
