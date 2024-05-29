<?php
    function match_zip($zip){
        if (preg_match("/^[0-9]{3}-[0-9]{4}$/",$zip)==1) {
            echo "{$zip}<br>";
        }else {
            echo "{$zip}<br>";
        }
    }
    match_zip("101-0051");
    match_zip("171-0022");
    match_zip("1710022");
    match_zip("03-6837-4600");
?>