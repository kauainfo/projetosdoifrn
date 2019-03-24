<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="imagem/gif" href="assets/animated_favicon1.gif" />
    <meta charset="utf-8" />
    <title>Projetos do IFRN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/estilo.css" />
</head>
<body>
    <!--BANNER-->
    <div class="container-fluid">

        <div class="row color">
            <div class="col">

                <h1 class="projetosifrn">Projetos do IFRN</h1>
        
            </div>

            </div>
<!--nav-->
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

</div>
<!--nav-->
        </div>
        <!--fim de banner-->

        <!--conteudo variavel-->
    @yield('conteudo')
        <!--fim do caonteudo variavel-->
            
            <!--Rodapé-->
            
        



        <!--Fim-->
    </div>
</div>
<footer class="footer navbar-fixed-bottom colorpe">
        <p class="rodape"> IFRN, 2018.</p>
</footer>

</body>
</html>