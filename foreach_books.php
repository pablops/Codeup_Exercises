<?php

$books = array(
    'The Hobbit' => array(
        'publication' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'publication' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'publication' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'publication' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )


 );


    // foreach ($books as $book) {
    //     echo $book;
    //     foreach ($book as $key => $value) {
    //         echo "$key: $value\n";
    //     }
    // }

    foreach ($books as $key => $book) {
            if($book['publication'] >= 1950){
                echo $key . PHP_EOL;
                foreach ($book as $key => $value){
                        echo "$key: $value" . PHP_EOL;
                }
            echo "===================" . PHP_EOL;
            }
    }


