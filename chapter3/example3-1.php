<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>文字列変数へのデータの追加</h1>
    <p>
        <?php
            $str="Hello";
            $str=$str . "World";
            echo $str;
        ?>
    </p>
</body>
</html>