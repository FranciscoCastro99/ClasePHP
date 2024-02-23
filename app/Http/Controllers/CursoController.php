<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function esPrimo($num)
    {
        if (!is_numeric($num)) {
            return false;
        }

        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return "no es primo";
            }
        }

        return "Es primo";
    }

    public function sonAmigos($num1, $num2)
    {
        if (!is_numeric($num1) || !is_numeric($num2) || $num1 <= 0 || $num2 <= 0 || !is_int($num1) || !is_int($num2)) {
            return "Los números deben ser enteros positivos.";
        }
        $sum_divisores_num1 = $this->sumarDivisoresPropios($num1);
        $sum_divisores_num2 = $this->sumarDivisoresPropios($num2);

        if ($sum_divisores_num1 == $num2 && $sum_divisores_num2 == $num1) {
            return "Son números amigos.";
        } else {
            return "No son números amigos.";
        }
    }

    private function sumarDivisoresPropios($num)
    {
        $sum = 0;
        for ($i = 1; $i <= $num / 2; $i++) {
            if ($num % $i == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }

    public function numAmigos($numero1, $numero2){
        $divNum1 = 0;
        $divNum2 = 0;
        for ($i=1; $i >= $numero1; $i++){
            if($numero1%$i == 0){
                $divNum1 += $i;
            }
        }
        for($i=1; $i <= $numero2; $i++){
            if($numero2%$i == 0){
                $divNum2 += $i;
            }
        }
        if($divNum1 === $divNum2){
            return "es amigo";
        } else{
            return "No es amigo";
        }
    }

}

