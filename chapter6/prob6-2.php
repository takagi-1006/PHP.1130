<?php
    class Country{
        private $name;
        function setName($name){
            $this->name=$name;
        }
        function getName(){
            return $this->name;
        }

        private $capital;
        function setCapital($capital){
            $this->capital=$capital;
        }
        function getCapital(){
            return $this->capital;
        }
    }
    $c=new Country();
    $c->setName("日本");
    $c->setCapital("東京");
    echo "{$c->getName()}の首都は{$c->getCapital()}です。";
?>