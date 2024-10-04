<?php

function suma($var1, $var2) {
    $resultado = $var1 + $var2;
    if (!is_integer($var1)) {
        $resultado = "ERROR: la variable en primer lugar  no tiene valor númerico";
    } else if (!is_integer($var2)) {
        $resultado = "ERROR: la variable en segundo lugar no tiene valor númerico";
    }
    return $resultado;
}

function resta($var1, $var2) {
    $resultado = $var1 - $var2;
    if (!is_integer($var1)) {
        $resultado = "ERROR: la variable en primer lugar  no tiene valor númerico";
    } else if (!is_integer($var2)) {
        $resultado = "ERROR: la variable en segundo lugar no tiene valor númerico";
    }
    return $resultado;
}

function multiplicacion($var1, $var2) {
    $resultado = $var1 * $var2;
    if (!is_integer($var1)) {
        $resultado = "ERROR: la variable en primer lugar  no tiene valor númerico";
    } else if (!is_integer($var2)) {
        $resultado = "ERROR: la variable en segundo lugar no tiene valor númerico";
    }
    return $resultado;
}

function division($var1, $var2) {
    $resultado = $var1 / $var2;
    if (!is_integer($var1)) {
        $resultado = "ERROR: la variable en primer lugar  no tiene valor númerico";
    } else if (!is_integer($var2)) {
        $resultado = "ERROR: la variable en segundo lugar no tiene valor númerico";
    }
    return sprintf("%.2f", $resultado);
}

function resto($var1, $var2) {
    $resultado = $var1 % $var2;
    if (!is_integer($var1)) {
        $resultado = "ERROR: la variable en primer lugar  no tiene valor númerico";
    } else if (!is_integer($var2)) {
        $resultado = "ERROR: la variable en segundo lugar no tiene valor númerico";
    }
    return $resultado;
}

function incremento(&$var1) {
    $var1++;
    $resultado = $var1;
    if (!is_integer($var1)) {
        $resultado = "ERROR: la variable en primer lugar  no tiene valor númerico";
    }
    return $resultado;
}
