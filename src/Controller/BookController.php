<?php

// display all books
function getBooks(){

    // 1. get data from database . <=Model
    include __DIR__.'/../Entity/BookEntity.php';
    $books=getBooksEntity();
    //var_dump($books);
    // 2. Display template
    include __DIR__.'/../../templates/books.php';
}


// display one book
function getOneBook(){
    include __DIR__.'/../Entity/BookEntity.php';

    // get id from book from URL
    $id=$_GET['id'];
    //from database
    $one_book=getOneBookEntity($id);
    var_dump($one_book);
    echo "One book ! ";
    include __DIR__.'/../../templates/one_book.php';

}
function removeBook(){
    include __DIR__.'/../Entity/BookEntity.php';
    // 1. connect to database and remove book for an ID
    $id=$_GET['id'];
    removeBookEntity($id);


    // 2. Display all books
    header('Location: http://localhost:8080/books');
}


function display_form(){
    // display form to insert new book
    include __DIR__.'/../../templates/form_book.php';
}

function insert_book(){
    // 1. get data from POST 
    $titre=$_POST['nom_livre'];

    // 2. Insert in database
    include __DIR__.'/../Entity/BookEntity.php';
    insert_book_entity($titre);
    // 3. Redirect to 'all books'
    header('Location: http://localhost:8080/books');

}