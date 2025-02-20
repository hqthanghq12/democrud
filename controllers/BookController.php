<?php 
class BookController{
    public function index(){
        $modelBook = new Book();
        $listBook = $modelBook->getAllDataBook();
        // var_dump($listBook);
        // Hiện thị giao diện theo PT 
        include_once 'views/list.php';
    }
    public function create(){
        // Hiện thị giao diện tạo mới
        // var_dump($_POST);
        if(isset($_POST['btnSave'])){
            $id = null;
            $title = $_POST['title'];
            $author = $_POST['author'];
            $publisher = $_POST['publisher'];
            $publish_date = $_POST['publish_date'];
            // Xử lý hình ảnh
            // var_dump($_FILES);
            //  B1: Lấy địa chỉ thư mục chứa ảnh
            $targetDir = 'uploads/';
            // B2: Lấy tên ảnh
            $imageName = time() .'_'.$_FILES['cover_image']['name'];
            $imagePath =  $targetDir.$imageName;
            // B3: Upload vào thư mục
            move_uploaded_file(
                $_FILES['cover_image']['tmp_name'], 
                $imagePath
            );
            // Thêm vào csdl
            $modelBook = new Book();
            $result = $modelBook->addBook(
                $id, 
                $title, 
                $imageName,
                $author,
                $publisher,
                $publish_date
            );
            if($result){
                header('Location: ?act=list');
            }
        }
        include_once 'views/add.php';
    }
    public function update(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            // var_dump($_GET['id']);
            $modelBook = new Book();
            $book = $modelBook->getIdDataBook($id);
    
        }
        include_once 'views/edit.php';
    }
}
?>