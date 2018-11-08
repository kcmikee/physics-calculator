<?php

    class Calculator{
        public $calcFirstNumber;
        public $calcSecondNumber;
        public $calThirdNumber;

        public function __construct($num1, $num2,$num3){
            $this->calcFirstNumber = $num1;
            $this->calcSecondNumber = $num2;
            $this->calThirdNumber = $num3;
        }

        public function actualCalc(){

            $first = $this->calcFirstNumber * $this->calcSecondNumber;
            return ($first/$this->calThirdNumber);
        }

    }
