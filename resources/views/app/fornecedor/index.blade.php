<h3>Fornecedor</h3>

{{ "Fornecedor - Texto" }}
<?= "Fornecedor - Texto" ?>


{{-- Comentário Blade --}}

@php
    // Comentario de uma linha no PHP
    /* Comentário de varias linhas no PHP */

    /*
    echo 'Fornecedor - Texto' ;

    if (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else {
        # code...
    }
    */

@endphp

{{-- @dd($fornecedores)  {{--  Blade - Função para imprimir array / não se usa o ; no blade --}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10 )
    <h3> Existem no máximo 10 fornecedores </h3>
@elseif(count($fornecedores) > 10 )
    <h3> Existem mais do que 10 fornecedores </h3>
@else 
    <h3> Zero fornecedores </h3>
@endif

