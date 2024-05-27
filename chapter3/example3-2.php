<?php
    $temp=15;
    echo "水の温度{$temp}度<br>";
    if ($temp>=100) {
        echo "水蒸気（気体）です。";
    }elseif ($temp<=0) {
        echo "氷（個体）です。";
    }else{
        echo"水（液体）です。";
    }
?>