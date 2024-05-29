<?php
    function job($syokugyou=""){
        return "職業は{$syokugyou}です。<br>";
    }
    echo job("公務員");
    echo job();
?>