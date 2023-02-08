<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class palindromosController extends Controller
{
    //
    public function palindromos(){
        return view('palindromos');
     }

     public function resp(Request $request){
        if(isset($_POST['verificar']))
        {
       $cadena= $_POST['palin'];
       $long_cadena =strlen($cadena);

       $i=1;
       $cad2='';
       while ($i<=$long_cadena)
       {
       $desc=($long_cadena)-$i;
       $cad=substr($cadena,$desc,1);
       $cad2=$cad2.$cad;
       $i++;
       }



       if ($cadena==$cad2)
       {
          $resul = "La Palabra ".$cadena. " al reves escrita ".$cad2. " es palindroma";
       }
       else
       {
          $resul= "La Palabra ".$cadena. " al reves escrita ".$cad2.  " no es palindroma";
       }
       return view('resupal', compact('resul'));


       }


            }
}
