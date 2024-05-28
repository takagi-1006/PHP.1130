<?php
    $num=5;
    echo"繰り返し回数:{$num}<br>";
    echo"whileループによる処理:";
    $i=0;
    while ($i < $sum) {
        echo"*";
        $i++;
    }
    do {
        echo"*";
        $i++;
    } while ($i <= $num);
?>