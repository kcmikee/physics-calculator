<?php

    class Calculator{
        public $calcFirstNumber;
        public $calcSecondNumber;
        public $calcOp;

        public function __construct($num1, $num2, $op){
            $this->calcFirstNumber = $num1;
            $this->calcSecondNumber = $num2;
            $this->calcOp = $op;
        }

        public function actualCalc(){
            if ( $this->calcOp == "add"){
                return ($this->calcFirstNumber+ $this->calcSecondNumber);

            } else if($this->calcOp == "subtract") {
                return ($this->calcFirstNumber - $this->calcSecondNumber);

            }else if($this->calcOp == "divide") {
                return ($this->calcFirstNumber / $this->calcSecondNumber);

            }else if($this->calcOp == "multiply") {
                return ($this->calcFirstNumber * $this->calcSecondNumber);
             }else{
                 echo "Error: Operation not selected";
             }

        }

    }
