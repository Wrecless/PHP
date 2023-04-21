<?php

require 'Item.php';
require 'Book.php';

$my_item = new Item();
$my_item->name = "TV";

echo $my_item->getListingDescription();

echo "<br>";

$book = new Book();
$book->name = "The Hitchhiker's Guide to the Galaxy";
$book->author = "Douglas Adams";

echo $book->getListingDescription();

echo "<br>";

echo $book->getCode();