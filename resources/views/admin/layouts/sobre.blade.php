@extends('admin.layouts.principal')

@section('conteudo-principal')

    <h2>{{'Trabalho 01'}}</h2>
    <p>
        {{'1. Fazer um site Laravel com 1 Controller e 1 View como se fosse o site de uma
            empresa fictícia criada por você. A view deve exibir pelo menos 2 dados (em
            variáveis separadas) vindas do Controller. Pelo menos um dos dados tem que ser
            um array para ser exibido de forma dinâmica numa tabela.'}}
    </p>

@endsection

@section('conteudo-secundario')

    {{'Criar depois'}}<br><br>

    {{$texto}}

@endsection
