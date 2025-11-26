<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách điểm danh 65HTTT</title><!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách điểm danh 65HTTT</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Danh sách điểm danh lớp 65HTTT</h2>

<?php
$filename = "65HTTT_Danh_sach_diem_danh.csv";

if (!file_exists($filename)) {
    echo "<p>Không tìm thấy file CSV!</p>";
    exit;
}

echo "<table>";

// Mở file CSV
if (($file = fopen($filename, "r")) !== FALSE) {

    $row = 0;

    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {

        // Dòng đầu là tiêu đề
        if ($row == 0) {
            echo "<tr>";
            foreach ($data as $header) {
                echo "<th>$header</th>";
            }
            echo "</tr>";
        } else {
            // Dữ liệu các dòng tiếp theo
            echo "<tr>";
            foreach ($data as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }

        $row++;
    }

    fclose($file);
}

echo "</table>";
?>

</body>
</html>

</head>
<body>

<h2>Danh sách điểm danh lớp 65HTTT</h2>

<?php
$filename = "65HTTT_Danh_sach_diem_danh.csv";

if (!file_exists($filename)) {
    echo "<p>Không tìm thấy file CSV!</p>";
    exit;
}

echo "<table>";

// Mở file CSV
if (($file = fopen($filename, "r")) !== FALSE) {

    $row = 0;

    while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {

        // Dòng đầu là tiêu đề
        if ($row == 0) {
            echo "<tr>";
            foreach ($data as $header) {
                echo "<th>$header</th>";
            }
            echo "</tr>";
        } else {
            // Dữ liệu các dòng tiếp theo
            echo "<tr>";
            foreach ($data as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }

        $row++;
    }

    fclose($file);
}

echo "</table>";
?>

</body>
</html>
