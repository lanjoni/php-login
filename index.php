<?php

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Autora: Sofia Borges Vidal-->
    <title> Tela de Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/pageStyleLogin.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
    <div class="praticando">
        <h1> Tela de Login </h1>
    </div>
</center>
<div class="container">
    <div class="row">
        <div class="div1 col-md-5">
            <center>
                <h3>Formulário de Login</h3>
            </center>
            <form method="post" action="session.php">
                <br/>
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
                <center>
                    <div class="botoes">
                        <button type="submit" class="btn btn-lg btn-success mb-2" id="btn">Entrar</button>
                        <button type="reset" class="btn btn-lg btn-secondary mb-2" id="btn2">Limpar</button>
                    </div>
                    <br/>
                    <a href="cadastro.php"><h6>Ainda não tem uma conta?</h6></a>
                </center>
            </form>
        </div>
    </div>
</div>
</body>
</html>

