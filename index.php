<?php 
include_once 'models/Book.php';
// Test model Book
// $book = new Book();
// Hiện thị danh sách
// var_dump($book->getAllDataBook());
// test controller
include_once 'controllers/BookController.php';
$bookController = new BookController();
$bookController->index();
?>