<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato ;

class ContatoController extends Controller
{
    //
    public function contato(Request $request) {

        // var_dump($_POST) ;
        // dd($request);
        // echo  '<pre>' ;
        // print_r($request->all());
        // echo '</pre>' ;
        // echo $request->input('nome');
        // echo '<br>';
        // echo $request->input('email');
        // echo '<br>' ;

        /*
        $contato = new SiteContato() ;

        $contato->nome     = $request->input('nome') ;
        $contato->telefone = $request->input('telefone') ;
        $contato->email    = $request->input('email') ;
        $contato->motivo_contato = $request->input('motivo_contato') ;
        $contato->mensagem = $request->input('mensagem') ;

        print_r($contato->getAttributes())
        $contato->save() ;
        */

        /*
        $contato = new SiteContato() ;

        $contato->fill($request->all()) ;
        //print_r($contato->getAttributes()) ;
        $contato->save() ;
        */

        //$contato = new SiteContato() ;
        //$contato->create($request->all());
        //print_r($contato->getAttributes()) ;

        $motivo_contatos=[
            '1'=>'Dúvida' ,
            '2'=>'Elogio' ,
            '3'=>'Reclamação'
        ];

        return view('site.contato',['titulo'=>'Contato Teste3','motivo_contatos'=>$motivo_contatos]) ;


    }

    public function salvar(Request $request){
        // dd($request) ;
         
        // Validação dos campos do formulário antes de salvar

        $request->validate([
            'nome'           => 'required|min:3|max:8',
            'telefone'       => 'required' ,
            'email'          => 'required|email:rfc,dns' ,
            'motivo_contato' => 'required' ,
            'mensagem'       => 'required'
        ]);
        
        //Forma enxuta de acionar o método save sem a necessidade de instaciar o objeto
        //SiteContato::create($request->all());
    }
}
