<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>セッションの活用</title>
</head>
<body>
    <h1>セッションの値の生成</h1>
    <?php
        session_start();
        $_SESSION["data"]="PHP";
        echo "<p>セッションID" . session_id() . "</p>";
    ?>
    <a href="sample6-8_2.php">次へ</a>
</body>
</html>