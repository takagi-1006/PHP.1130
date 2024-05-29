<?php
    for ($i=2; $i < 100; $i++) { 
        $count=0;
        for ($i=1; $i < $n; $i++) { 
            if ($n%$i==0) {
                $count++;
            }
        }
        if ($count===2) {
            echo "{$n}&nbsp"
        }
    }
?>