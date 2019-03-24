@extends('template.base')

@section('conteudo')
<div class="vaziaLogintop">
</div>
    <div class="container login">
        <div class="row justify-content-center">
            <div class="col-sm-10" align="center">

                <div class="vaziaLogintop">
                    </div>

                <h2 class="h2login">Login:</h2>
                <div class="form-group fg">
                  <p class="txt">Matricula:</p>
                  <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Digite sua Matricula...">

                    <div class="vaziaLogintop">
                    </div>

                  <p class="txt">Senha:</p>
                  <input type="text" name="senha" id="senha" class="form-control" placeholder="Digite sua Senha...">

                    <div class="vaziaLogintop">
                    </div>

                  <button class="btn btn-primary" type="submit"><a href="/inicio" class="txtl">Acessar</a></button>

                  <div class="vaziaLogintop">
                    </div>

                  <p class="txt">Não está cadastrado? Cadastre-se <a class="lc" href="/cadastro">aqui</a></p>

<div class="vaziaLogintop">
                    </div>

                </div>
            </div>

        </div>

    </div>
<div class="vaziaLoginbot">
</div>
@endsection('conteudo')