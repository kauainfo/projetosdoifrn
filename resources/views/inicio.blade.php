@extends('template.base')

@section('conteudo')

<div class="row justify-content-center principal">



<div class="col-sm-10">

<div class="vazio">
 
</div>
<div class="vazio">
</div>
    
   


    @component('components.pesquisa')


    @endcomponent
            
        <div class="col-sm-8">
            
@component('components.showProjects')

@endcomponent

@component('components.showProjects')

@endcomponent

@component('components.showProjects')

@endcomponent
                      
        </div>
    </div>

@endsection('conteudo')