<?php
    class Parson{
        private $name;
        private $age;
        private $sex;
        function__construct($name,$age,$sex){
            $this->name=$name;//引数で与えられた値を同名のプロパティに代入する。
            $this->aeg=$age;
            $this->sex=$sex;
        }
        function show(){
            echo "{$this->name}（{$this->age}歳）性別：{$this->sex}<br>";//echoでPersonオブジェクトの情報を表示する
        }
        //
    }
    $p1=new Person("山田太郎",18,"男");
    $p1=new Person("佐藤花子",17,"女");
    $p1=new Person("鈴木次郎",16,"男");

    $p1->show();
    $p2->show();
    $p3->show();
?>