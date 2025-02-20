<?php 
include_once 'models/Book.php';
// Test model Book
// $book = new Book();
// Hiện thị danh sách
// var_dump($book->getAllDataBook());
// test controller
include_once 'controllers/BookController.php';
$bookController = new BookController();
// $bookController->index();
// Viết điều hướng bằng url
$luaChon = isset($_GET['act']) ? $_GET['act'] : '/';
// var_dump($luaChon);
switch ($luaChon) {
    case 'list':
        $bookController->index();
        break;
    case 'add':
        $bookController->create();
        break;
    case 'edit':
        $bookController->update();
        break;
    case 'delete':
        $bookController->delete();
        break;
    default:
        $bookController->index();
        break;
}
?>