<?php
session_start();

include("verificacao.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Início </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/pageStyleInicio.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
    <div class="praticando">
        <h1> Início </h1>
    </div>
</center>
<div class="container">
    <div class="row">
        <div class="div1 col-md-5">
            <center>
                <h3>Bem vindo(a) <?php echo $_SESSION['nome'] ?></h3>
            </center>
            <form>
                <br/>
                <center>
                    <div class="botoes">
                        <button onclick="location.href='logout.php'" type="submit" class="btn btn-lg btn-danger mb-2" id="btn">Sair</button>
                    </div>
                </center>
            </form>
        </div>
    </div>
</div>
</body>
</html>

