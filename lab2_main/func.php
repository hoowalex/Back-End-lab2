<?php

function customSin($x) {
    return sin($x);
}

function customCos($x) {
    return cos($x);
}

function customTan($x) {
    return tan($x);
}

function customTg($x) {
    return sin($x) / cos($x);
}

function customPow($x, $y) {
    return pow($x, $y);
}

function customFactorial($x) {
    if ($x < 0) {
        return "Factorial is not defined for negative numbers.";
    } elseif ($x == 0) {
        return 1;
    } else {
        return $x * customFactorial($x - 1);
    }
}
