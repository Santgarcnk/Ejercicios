<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class factorizacionController extends Controller
{
    //
    public function factorizacion(){
        return view('factorizacion');
     }

     public function fac (Request $request){
        $num = $request->num;
        $actorial=1;
       for($i = 1 ; $i <= $num; $i++){
            $actorial = $actorial * $i;
       }
       return view('resufac' ,compact('actorial'));
    }
}


