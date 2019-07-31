<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resoluçao</title>
</head>
<body>

<?php
    if($_REQUEST){
    $nome = $_POST['name'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];
    $nacionalidade = $_POST['nacionalidade'];
    $condicao = $_POST['condicao'];
    $esportes= $_POST['esporte'];

    echo "Agradecemos sua inscrição: $nome $sobrenome<br>";
    echo "Registramos seu email: $email<br>";
    echo "Sua nacionalidade é : $nacionalidade<br>";
    echo "Os termos foram: $condicao<br>";

    foreach ($esportes as $value) {
        echo  $value ."<br>";
    }
}

?>

</body>
</html>