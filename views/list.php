<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sách</title>
</head>
<body>
    <a href="?act=add"><button>Thêm sách</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Cover Image</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Publish Date</th>
            <th>Action</th>
        </tr>
        <?php foreach($listBook as $value){?>
            <tr>
                <td><?php echo  $value->id ?></td>
                <td><?php echo  $value->title ?></td>
                <td><img src="<?php echo 'uploads/'.$value->cover_image ?>" 
                alt="" width="100px"></td>
                <td><?php echo  $value->author ?></td>
                <td><?php echo  $value->publisher ?></td>
                <td><?php echo  $value->publish_date ?></td>
                <td>
                    <a href="?act=edit&id=<?php echo  $value->id ?>"><button>Sửa</button></a>
                    <a href="?act=delete&id=<?php echo  $value->id ?>"
                     onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><button>Xóa</button></a>
                </td>
            </tr>
        <?php }?>
    </table>
</body>
</html>