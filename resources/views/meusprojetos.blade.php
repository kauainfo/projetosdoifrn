@extends('template.base')

@section('conteudo')

@component('components.fundo1')



@endcomponent <!-- ADICIONE CONTEUDO AQUI-->

<p>EM EDIÇÃO</p>

@component('components.fundo2')



@endcomponent

@endsection('conteudo')