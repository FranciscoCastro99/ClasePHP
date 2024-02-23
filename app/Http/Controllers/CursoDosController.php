<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoDosController extends Controller
{
    public function create1(){
        return view('Formulario1');
    }
    Public function create2() {
        return view('Formulario2');
    }
    public function create3() {
        return view('Formulario3');
    }
    Public function create4() {
        return view('Formulario4');
    }

    public function storeUno(Request $request){

        $num1=$request->num1;


        if (!is_numeric($num1)) {
            return false;
        }

        for ($i = 2; $i < $num1; $i++) {
            if ($num1 % $i == 0) {
                return "no es primo";
            }
        }

        return $request -> $num1 =  "Es primo";

    }


    public function storeDos(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;

        $divNum1 = 0;
        $divNum2 = 0;
        for ($i=1; $i <= $num1; $i++){
            if($num1%$i == 0){
                $divNum1 += $i;
            }
        }
        for($i=1; $i <= $num2; $i++){
            if($num2%$i == 0){
                $divNum2 += $i;
            }
        }
        if($divNum1 === $divNum2){
            return "Es amigo";
        } else{
            return "No es amigo";
        }
    }


    public function storeTres(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;
        $num3=$request->num3;

        $prom = ($num1+$num2+$num3)/3;

        return $prom;

    }

    public function storeCuadratica(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;
        $num3=$request->num3;
        $den = (($num2*$num2) - (4*$num1*$num3));


        if ($num1 == 0 || $den < 0) {
            return 'ingrese por favor un valor valido';
        }
        else{
            $Cuadratica = round(((-$num2)+sqrt($den))-4*($num1)*($num3)/2*$num1);
            $Cuadratica2 = round(((-$num2)-sqrt($den))-4*($num1)*($num3)/2*$num1);
            return [$Cuadratica, $Cuadratica2];
        }

    }

}
