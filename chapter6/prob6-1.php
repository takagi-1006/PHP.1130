<?php
    class Calc {
        protected $num1;
        protected $num2;

        function setNumber($num1,$num2){
            $this->num1=$num1;
            $this->num2=$num2;
        }
        function add(){
            $ans=$this->num1 + $this->num2;
            echo "{$this->num1} + {$this->num2}={$ans}<br>";
        }
        function sub(){
            $ans=$this->num1 - $this->num2;
            echo "{$this->num1} - {$this->num2}={$ans}<br>";
        }
    }
    class CalcEx extends Calc {
        function mul(){
            $ans=$this->num1 * $this->num2;
            echo "{$this->num1} × {$this->num2}={$ans}<br>";
        }
        function div(){
            if ($this->num2 !==0) {//割る値が0ではないときの場合は計算できるというif文。
                $ans=$this->num1 / $this->num2;
                echo "{$this->num1} ÷ {$this->num2}={$ans}<br>";    
            }else {
                echo "{$this->num1} ÷ {$this->num2}は計算できません。<br>";    
            }
        }
    }

    $calc=new CalcEX();
    $calc->setNumber(12,0);

    $calc->add();
    $calc->sub();
    $calc->mul();
    $calc->div();
?>