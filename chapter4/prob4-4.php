<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>配列からリストを作る</title>
</head>
<body>
    <h1>配列からリストを作る</h1>
    <ul>
        <?php
            $array=["日本","アメリカ","中国"];
            foreach ($array as array) {
                echo "<li>" . $value . "<li>";
            }
        ?>
    </ul>
</body>
</html>