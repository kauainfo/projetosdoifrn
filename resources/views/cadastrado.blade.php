@extends('template.base')

@section('conteudo')

<div class="row justify-content-center principal">



<div class="col-sm-10">
    <div class="container-fluid">
        <div class="vaziaLogintop"></div>
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