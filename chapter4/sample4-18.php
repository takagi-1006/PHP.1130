<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1></h1>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th></th><th></th><th></th><th></th>
        </tr>
        <?php
            $member=[
                ["","",18,""],
                ["","",16,""],
                ["","",17,""]
            ];
            foreach ($member as $v) {
                echo <<<LOOP
                <tr>
                    <td>{$v[0]}</td><td>{$v[1]}</td><td>{$v[2]}</td><td>{$v[3]}</td>
                </tr>
                LOOP;
            }
            ?>
    </table>
</body>
</html>