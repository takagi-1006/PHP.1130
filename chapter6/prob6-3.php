<?php
    class ZipCheck{
        private $expression="/^[0-9]{3}-[0-9]{4}$/";
        private $str;
        function __construct($str){
            $this->str=$str;
        }
        function isZip(){
            if (preg_match($this->expression,$this->str)==1) {
               return true;
            }
               return false;
        } 

            function getStr(){
                return $this->str;
            }
        }

        $zip_cheker1= new ZipCheck("171-0022");
        $exp1=$zip_cheker1->getStr();
        if ($zip_cheker1->isZip()==true) {
            echo "{$exp1}は郵便番号です。<br>";
        }else {
            echo "{$exp1}は郵便番号ではありません。<br>";
        }
    
        $zip_cheker2= new ZipCheck("1710022");
        $exp2=$zip_cheker2->getStr();
        if ($zip_cheker2->isZip()==true) {
            echo "{$exp2}は郵便番号です。<br>";
        }else {
             echo "{$exp2}は郵便番号ではありません。<br>";
        }
    
?>