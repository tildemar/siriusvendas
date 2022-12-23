<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Sirius ERP - @yield('titulo')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}" >
    </head>

    <body>

      @include('site.layout._partials.topo')
      
      @yield('conteudo')
    </body>
    </html>        