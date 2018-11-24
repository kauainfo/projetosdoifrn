@extends('template.base')

@section('conteudo')
<div class="vaziaLogintop">
</div>
    <div class="container login">
        <div class="row justify-content-center">
            <div class="col-sm-10" align="center">

                <div class="vaziaLogintop">
                    </div>

                <h2 class="h2login">Cadastro:</h2>
                <div class="form-group fg" align="center">
                  <p class="txt" align="center">Matricula:</p>
                  <input type="text" name="matricula" id="matricula" class="form-control" placeholder="Informe sua Matricula...">

                    <div class="vaziaLogintop">
                    </div>

                  <p class="txt">Crie uma senha:</p>
                  <input type="text" name="senha" id="senha" class="form-control" placeholder="Crie sua Senha...">

                    <div class="vaziaLogintop">
                    </div>

                    <p class="txt">Informe seu CPF:</p>
                  <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Informe seu CPF...">

                    <div class="vaziaLogintop">
                    </div>

                  <button class="btn btn-primary" type="submit"><a href="/cadastrado" class="txtl">Cadastrar</a></button>

                  <div class="vaziaLogintop">
                    </div>
                </div>
            </div>

        </div>

    </div>
<div class="vaziaLoginbot">
</div>
@endsection('conteudo')