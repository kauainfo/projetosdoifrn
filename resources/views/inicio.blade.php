@extends('template.base')

@section('conteudo')

<div class="row justify-content-center principal">



<div class="col-sm-10">

<div class="vazio">
</div>

    <div class="container-fluid">
    <div align="left">
    <button class="btn btn-primary" type="submit"><a href="/conta" class="txtl">Minha Conta</a></button>
    <button class="btn btn-primary" type="submit"><a href="/cadastroprojeto" class="txtl">Cadastar Projeto</a></button>
    <button class="btn btn-primary" type="submit"><a href="/meusprojetos" class="txtl">Meus Projetos</a></button>
    <button class="btn btn-primary" type="submit"><a href="/" class="txtl">Sair</a></button>
    </div>
    
    <div class="vazio">
</div>

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