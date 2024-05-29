<?php
    $values=["","1","0","123","1.23","-12","a2"];
    foreach ($values as $values){
        if (preg_match("/^([1-9][0-9]*|0)$/",$values)==1) {
            echo "{$values}は0以上の整数です。<br>";
        }else {
            echo "{$valies}は0以上の整数ではありません。<br>"
        }
    }