<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1,int $p2){
        // echo "Soma P1+P2: ".($p1+$p2) ;
        // return view('site.teste',['p1'=> $p1,'p2'=>$p2]) ;       // parâmetros por array associativo
        // return view('site.teste', compact('p1','p2')) ;          // parâmetros por método nativo do PHP compact
        return view('site.teste')->with('p1',$p1)->with('p2',$p2) ; // parâmetros por with
    }
}
