<?php

// display all books
function getBooks(){

    // 1. get data from database . <=Model
    include __DIR__.'/../Entity/BookEntity.php';
    $books=getBooksEntity();
    var_dump($books);
    // 2. Display template
    echo "all books ! ";
}


// display all books
function getOneBook(){
    include __DIR__.'/../Entity/BookEntity.php';

    getOneBookEntity();

    echo "One book ! ";
}
