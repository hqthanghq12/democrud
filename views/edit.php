<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sách</title>
</head>
<body>
    <form action="" method="post" 
    enctype="multipart/form-data">
        <div>
            <label for="title">Tên sách:</label>
            <input type="text" id="title" name="title"
             value="<?php echo $book->title ?>">
        </div>
        <div>
            <label for="title">Hình ảnh bìa sách:</label>
            <input type="file" id="cover_image" 
            name="cover_image">
            <img src="<?php echo 'uploads/'.$book->cover_image ?>" 
            alt="" width="100px">
        </div>
        <div>
            <label for="title">Tác giả:</label>
            <input type="text" id="author" name="author"
            value="<?php echo $book->author ?>">
        </div>
        <div>
            <label for="title">Nhà xuất bản:</label>
            <input type="text" id="publisher" name="publisher"
            value="<?php echo $book->publisher ?>">
        </div>
        <div>
            <label for="title">Ngày xuất bản:</label>
            <input type="date" id="publish_date" name="publish_date"
            value="<?php echo $book->publish_date ?>">
        </div>
        <div>
            <input type="submit" value="Sửa sách" name="btnSave">
        </div>
    </form>
</body>
</html>