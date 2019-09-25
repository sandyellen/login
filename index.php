<!doctype html>
<html lang="en">
<!--
     Para acessar o projeto, habilite o Apache    http://localhost/login/
-->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Sistema de Login</title>
</head>

<body class="bg-dark">
    <!-- Fundo escuro-->
    <main class="container mt-4">
        <section class="row">
            <div class="col-lg-4 offset-lg-4" id="alerta">
                <div class="alert alert-sucess text-center">
                    <strong class="resultado">
                        Alo Ha Tchurmaaaaaaaaa
                    </strong>
                </div>
            </div>
        </section>
        <!--Formulário de Login-->
        <section class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="caixaLogin">
            <h2 class="text-center mt-2">
                Entrar no Sistema
            </h2>
            <form action="#" method="post" class="p-2"
            id="formLogin">
                <div class="form-group">
                   <input type="text" name="" id="nomeUsuario" id="nomeUsuario"
                   placeholder="Nome de Usuário" class="form-control">
                 </div>

                <div class="form-group">
                    <input type="password" name="senheUsuario"
                     id="senhaUsuario" placeholder="Senha"
                     class="form-control">
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">

                        <input type="checkbox" name="lembrar" 
                        id="lembrar" class="custom-control-input">

                        <label for="lembrar" class="custom-control-label">
                            Lembrar de mim
                        </label>

                        <a href="#" class="float-right" id="btnEsqueci">
                            Esquecir a senha!

                        </a>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="::Entrar::"
                    name="btnEntrar" id="btnEntrar"
                    class="btn btn-primary btn-block">

                </div>

                <div class="form-group">
                    <p class="text-center">
                        Novo usuário? <a href="#" id="btnRegistrar">
                        Registre-se aqui!
                    </a>

                    </p>

                </div>

                </form>
            </div>
        </section> 
        <!--Final da Seção de Login-->
            
        <!--Foumulário de Recuperação de Senha-->
        <section class="row mt-5">
            <div class="col-lg-4 offset-lg-4 bg-light rounded"
            id="caixaLongin">
                <h2 class="text-center mt-2">
                    Gerar Nova Senha
                </h2>
                <form action="#" method="post" id="formSenha"
                class="p-2">
                    <div class="form-group">
                        <small class="text-muted">
                            Para gerar uma nova senha, digite o 
                            seu e-mail. Clique no link gerado.
                         </small>

                    </div>

                    <div class="form-group">
                        <input type="email" name="emailGerarSenha"
                         id="emailGerarSenha" class="form-control"
                         placeholder="E-mail de recuperação de senha">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="::Gerar::"
                        name="btnGerar" id="btnGerar"
                        class="btn btn-primary btn-block">
                     </div>

                     <div class="form-group">
                         <p class="text-center">
                             Já registrado? 
                             <a href="#" id="btnJaRegistrado">
                                Entrar por aqui.
                             </a>
                         </p>

                     </div>

                    


                </form>


            </div>
        </section>
        <!--Fim da seção da Recuperação de Senha-->
    

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>