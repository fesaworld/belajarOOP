<?php

class Calculator {
    public $var1;
    public $var2;
    public $operator;

    function __construct($var1, $var2, $operator) {
        $this->var1 = $var1;
        $this->var2 = $var2;
        $this->operator = $operator;
    }

    public function calculate() {
        if($this->operator == '+') {
            $result = ($this->var1 + $this->var2);
        } elseif($this->operator == '-') {
            $result = ($this->var1 - $this->var2);
        } elseif($this->operator == '*') {
            $result = ($this->var1 * $this->var2);
        } else {
            if($this->var1 < 1 || $this->var2 < 1) {
                $result = 'Tidak bisa melakukan pembagian 0';
            } else {
                if($this->var2 > $this->var1) {
                    $result = 'Variable 2 harus lebih kecil dari variable 1';
                } else {
                    $result = ($this->var1 / $this->var2);
                }
            }
        }

        return $result;
    }
}