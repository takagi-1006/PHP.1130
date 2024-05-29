<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>ファームサンプル（1）</title>
</head>
<body>
    <h1>入力された値</h1>
    <table>
        <tr>
            <th>名前：</th>
            <td><?php echo $_GET["name"]; ?></td>
        </tr>
        <tr>
            <th>性別：</th>
            <td><?php echo $_GET["sex"]; ?></td>
        </tr>
    </table>
    <a href="sample5-7.html">入力ファームに戻る</a>
</body>
</html>