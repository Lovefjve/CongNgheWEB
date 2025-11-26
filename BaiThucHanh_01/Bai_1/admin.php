<?php
include 'hoa.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Quản trị hoa</title>
</head>
<body>
    <h1>Quản Trị Các Loài Hoa</h1>
    
    <p><a href="index.php">← Quay lại trang chủ</a></p>
    
    <!-- Nút Thêm hoa -->
    <h2>Thêm hoa mới</h2>
    <form method="POST">
        <button type="submit" name="add_flower">Thêm hoa</button>
    </form>
    
    <hr>
    
    <!-- Danh sách hoa với cột hình ảnh -->
    <h2>Danh sách hoa (<?php echo count($flowers); ?> loài)</h2>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>STT</th>
            <th>Tên hoa</th>
            <th>Hình ảnh</th>
            <th>Mô tả</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach ($flowers as $index => $flower): ?>
        <tr>
            <td><?php echo $index + 1; ?></td>
            <td><?php echo $flower['name']; ?></td>
            <td>
            <img src="images/<?php echo $flower['image']; ?>" 
                     alt="<?php echo $flower['name']; ?>" 
                     width="100">
            
            </td>
            <td><?php echo $flower['description']; ?></td>
            <td>
                <!-- Nút Sửa -->
                <form method="POST" style="display: inline;">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <button type="submit" name="edit_flower">Sửa</button>
                </form>
                
                <!-- Nút Xóa -->
                <form method="POST" style="display: inline;">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <button type="submit" name="delete_flower">Xóa</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>