<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;


class serieController extends Controller
{
   //
   public function serie(){
   return view('serie');
}

    public function fib(Request $request){
        $cantNum = $request->cant_num;
        $resultado = 0;
        $num1 = 0;
        $num2 = 1;
        for ($i=0; $i < $cantNum; $i++) {
            if ($i == 0) {
                $num1 = $i;
                $resultado = "$i";
            } else if ($i == 1){
                $num2 = $i;
                $resultado .= ", $i";
            } else {
                $resultado .= ", {$this->recursiva($num1, $num2)}";
            }
        }
        return view('fibonacci', compact('resultado'));
    }

    public function recursiva($num1, $num2) {
        $resultado = $num1+$num2;
        return ",{$this->recursiva($num2, $resultado)}";
    }
}
