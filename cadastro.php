<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Autora: Sofia Borges Vidal-->
    <title> Tela de Cadastro </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/pageStyleCadastro.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
    <div class="praticando">
        <h1> Tela de Cadastro </h1>
    </div>
</center>
<div class="container">
    <div class="row">
        <div class="div1 col-md-5">
            <center>
                <h3>Formulário de Cadastro</h3>
            </center>
            <form method="post" action="cadastrar.php">
                <br/>
                <div>
                    <h6>Nome completo: </h6>
                    <input type="text" name="nome" class="form-control" placeholder="Insira seu nome completo" aria-describedby="basic-addon1">
                </div>
                </br>
                <div>
                    <h6>E-Mail: </h6>
                    <input type="email" name="email" class="form-control" placeholder="Insira seu e-mail" aria-describedby="basic-addon1">
                </div>
                <br/>
                <div>
                    <h6>Senha: </h6>
                    <input type="password" name="senha" class="form-control" placeholder="Insira sua senha" aria-describedby="basic-addon1">
                </div>
                <br/>
                <div>
                    <h6>Confirme sua senha: </h6>
                    <input type="password" name="senhaS" class="form-control" placeholder="Insira sua senha novamente" aria-describedby="basic-addon1">
                </div>
                <br/>
                <center>
                    <div class="botoes">
                        <button type="submit" class="btn btn-lg btn-success mb-2" id="btn">Cadastrar</button>
                        <button type="reset" class="btn btn-lg btn-secondary mb-2" id="btn2">Limpar</button>
                    </div>
                    <br/>
                    <a href="index.php"><h6>Já possui uma conta?</h6></a>
                    <br/>
                    <div>
                    <?php
                        if(isset($_SESSION['status_cadastro'])):
                    ?>
                        <div class="alert alert-success" role="alert">
                            <b>Usuário cadastrado com sucesso!</b> Clique <a href="index.php">aqui</a> para fazer login!
                        </div>
                        <?php
                            endif;
                            unset($_SESSION['status_cadastro']);

                            if(isset($_SESSION['usuario_existe'])):
                        ?>
                        <div class="alert alert-warning" role="alert">
                            <b>ALERTA!</b> Este usuário já está cadastrado!
                        </div>
                        <?php
                            endif;
                            unset($_SESSION['usuario_existe']);

                            if(isset($_SESSION['senha_diferente'])):
                        ?>
                        <div class="alert alert-danger" role="alert">
                            <b>ALERTA!</b> As senhas não conferem!
                        </div>
                        <?php
                            endif;
                            unset($_SESSION['senha_diferente']);
                        ?>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
</body>
</html>