<?php

class Main
{
    public function getFactorial($number) {
        $factorial = function ($n) use (&$factorial) {
            return $n == 0 ? 1 : $factorial($n - 1) * $n;
        };

        return $factorial($number);
    }
}