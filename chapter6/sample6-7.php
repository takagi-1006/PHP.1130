<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>リストの生成</title>
</head>
<body>
    <h1>都道府県のリスト</h1>
    <?php
        require_once("ullist.php");
        $ls=new UlList();
        $date=["東京都","大阪府","愛知県"];
        $ls->show($date);
    ?>
</body>
</html>