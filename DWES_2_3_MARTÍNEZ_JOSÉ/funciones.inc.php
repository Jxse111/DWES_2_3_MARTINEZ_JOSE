<?php

function suma($var1, $var2) {
    $resultado = $var1 + $var2;
    return $resultado;
}

function resta($var1, $var2) {
    $resultado = $var1 - $var2;
    return $resultado;
}

function multiplicacion($var1, $var2) {
    $resultado = $var1 * $var2;
    return $resultado;
}

function division($var1, $var2) {
    $resultado = $var1 / $var2;
    return $resultado;
}

function resto($var1, $var2) {
    $resultado = $var1 % $var2;
    return $resultado;
}

function incremento(&$var1) {
    $var1++;
    $resultado = $var1;
    return $resultado;
}
