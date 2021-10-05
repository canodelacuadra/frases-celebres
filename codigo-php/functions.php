<?php
function frases_celebres()
{
    include 'array_frases.php';
    // saber el número de elementos que tiene
    $num_frases = count($frases_celebres) - 1;
    // generar un número aleatorio entre el 0 y el numero total del array -1
    $aleatorio = rand(0, $num_frases);
    //imprimir el array por pantalla
    return $frases_celebres[$aleatorio];
}
