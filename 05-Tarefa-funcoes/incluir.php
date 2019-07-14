<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>3 - Gerar um arquivo chamado incluir.php que retorne um echo com a seguinte string “Sou incluir.php”.</h3><br>
    <?php
    echo "Sou o incluir.php";
   
    ?>

    <h3>A. Incluir no arquivo, cumprimento.php. O que acontece?</h3>
    <?php
    include("cumprimento.php");
    
    ?>
    <h3>Substituir include por require. O que acontece?</h3>
    <?php
    require("cumprimento.php");
    ?>

    <h3>substituir o require por include, e incluir 3 vezes o mesmo arquivo. O que acontece?</h3>
    <?php
    include("cumprimento.php");
    include("cumprimento.php");
    include("cumprimento.php");
    ?>

    <h3>O arquivo incluir.php, substituir todos os include por include_once. O que acontece?</h3>
    <?php
    include_once("cumprimento.php");
    include_once("cumprimento.php");
    include_once("cumprimento.php");
    ?>
   <h3>Criar uma arquivo tudoJunto.php que inclua o arquivo funcoes.php</h3>






    
</body>
</html>
