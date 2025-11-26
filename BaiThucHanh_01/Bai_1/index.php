<?php
include 'hoa.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Các loài hoa của tôi</title>
</head>
<body>
    <h1>Các Loài Hoa Của Tôi</h1>
    
    <p><a href="admin.php">Quản trị</a></p>
    
    <?php foreach ($flowers as $flower): ?>
        <div style="border: 1px solid #ccc; padding: 15px; margin: 15px 0;">
            <h2><?php echo $flower['name']; ?></h2>
            <?php if (!empty($flower['image'])): ?>
                <img src="images/<?php echo $flower['image']; ?>" 
                     alt="<?php echo $flower['name']; ?>" 
                     width="250" 
                     style="border: 1px solid #ddd; padding: 5px;">
            <?php endif; ?>
            <p><strong>Mô tả:</strong> <?php echo $flower['description']; ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>