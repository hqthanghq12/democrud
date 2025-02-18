<?php 
class BookController{
    public function index(){
        $modelBook = new Book();
        $listBook = $modelBook->getAllDataBook();
        // var_dump($listBook);
        // Hiện thị giao diện theo PT 
        include_once 'views/list.php';
    }
}
?>