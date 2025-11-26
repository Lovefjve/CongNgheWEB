<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài Thi Trắc Nghiệm Android</title>
</head>
<body>
    <h1>Bài Thi Trắc Nghiệm Android</h1>

    <form>

    <?php
    $filename = "Quiz.txt";

    if (file_exists($filename)) {

        $content = file_get_contents($filename);
        $questions = preg_split("/\n\s*\n/", trim($content));

        $count = 0;

        foreach ($questions as $block) {

            $lines = array_filter(array_map('trim', explode("\n", $block)));
            if (empty($lines)) continue;

            $question = "";
            $options = [];
            $answer = "";

            foreach ($lines as $line) {
                if (strpos($line, "ANSWER:") === 0) {
                    $answer = trim(substr($line, 7));
                } elseif (preg_match("/^[A-D]\./", $line)) {
                    $options[] = $line;
                } else {
                    $question = $line;
                }
            }

            $count++;
            echo "<div style='border:1px solid #ccc; padding:15px; margin-bottom:20px;'>";
            echo "<h3>Câu $count: $question</h3>";

            // Tạo radio button
            foreach ($options as $op) {
                $label = substr($op, 0, 1);   // Lấy A/B/C/D
                $text = substr($op, 2);       // Lấy nội dung phương án

                echo "<label>";
                echo "<input type='radio' name='q$count' value='$label'> ";
                echo "<strong>$label.</strong> $text";
                echo "</label><br>";
            }

            echo "</div>";
        }

        echo "<p><strong>Tổng số câu hỏi: $count</strong></p>";

    } else {
        echo "<p>Không tìm thấy file Quiz.txt</p>";
    }
    ?>

    </form>

</body>
</html>
