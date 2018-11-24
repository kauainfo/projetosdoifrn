@extends('template.base')

@section('conteudo')

<div class="row justify-content-center principal">



<div class="col-sm-10">
    <div class="container-fluid">
    <p class="lc"><a href="/login"  class="lc">Login </a>|<a class="lc" href="/cadastro"> Cadastrar</a></p>
</div>
    @component('components.pesquisa')


    @endcomponent
            
        <div class="col-sm ">
                
@component('components.showProjects')

@endcomponent

@component('components.showProjects')

@endcomponent

@component('components.showProjects')

@endcomponent
                      
        </div>
    

@endsection('conteudo')