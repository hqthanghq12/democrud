<?php 
include_once 'models/Model.php';
class Book extends Model{
    // Thuộc tính
    private $table = 'books'; // Tên bảng sách
    public $connection;
    // Phương thức khởi tạo
    public function __construct(){
        $this->connection = new Model();
    }
    // Phương thức hiển thị toàn bộ dữ liệu trong bảng sách
    public function getAllDataBook(){
        $sql = "SELECT * FROM {$this->table}";
        $this->connection->setSQL($sql);
        return $this->connection->all();
    }
}
?>