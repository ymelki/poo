<h1>All books</h1>

<?php foreach ( $books as $one_book) { ?>

    <hr>
    <a href="index.php/one_book?id=<?=$one_book['id']?>">
     Title : <?=$one_book['titre']?></a>
    - <a href="index.php/remove_book?id=<?=$one_book['id']?>">
        Supprimer ce livre ! 
    </a>


<?php } ?>