<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolução - Aula 16</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        li{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
        /* Pergunta 2 
        Criar um arquivo <b>confirmacao.php</b> para receber os dados enviados pelo usuário através do método <b>$_POST</b>.
        Resposta 2 
        R: Após criar o arquivo recebemos os dados inseridos por $_POST */
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirma_senha = $_POST['confirma_senha'];
        $nacionalidade = $_POST['nacionalidade'];
        $esportes = $_POST['esportes'];
        $condicao = $_POST['condicao'];
        echo $esportes;
    ?>
    <div class="container">
        <section>
            <ol>
            </ol>
            <br>
            <ol start="3">
                <li>
                    <!-- Pergunta 3 -->
                    No arquivo <b>confirmacao.php</b>, fazer uma validação para verificar se os campos nome e sobrenome possuem mais de 10 caracteres.<br>
                    <!-- Resposta 3 -->
                    <?php
                        if (strlen($nome.$sobrenome) >= 10){
                            echo "R: O nome e o sobrenome possuem 10 ou mais caracteres";
                        } else {
                            echo "R: O nome e o sobrenome não possuem 10 caracteres";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 4 -->
                    No arquivo <b>confirmacao.php</b>, fazer uma validação para verificar se o e-mail inserido é valido.<br>
                    <!-- Resposta 4 -->
                    <?php
                        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                            echo "R: O e-mail informado é válido";
                        } else {
                            echo "R: O e-mail informado não é inválido";
                        }
                    ?>
                </li>
                <li>
                    <!-- Pergunta 5 -->
                    No arquivo <b>confirmacao.php</b>, fazer uma validação para verificar se os dados inseridos no campo senha e confirmar senha são iguais.<br>
                    <!-- Resposta 5 -->
                    <?php
                        if ($senha === $confirma_senha){
                            echo "R: Sua senha confere com a confirmação de senha";
                        } else {
                            echo "R: Sua senha não confere com a confirmação de senha";
                        }
                    ?>
                </li>
                <br>
                <li>
                    <!-- Pergunta 6 -->
                    No arquivo <b>confirmacao.php</b>, fazer uma validação para verificar se os <b>Termos de Condição</b> foram aceitos.<br>
                    <!-- Resposta 6 -->
                    <?php
                        if ($condicao){
                            echo "R: Termos de Condição aceitos";
                        } else {
                            echo "R: Aceite os Termos de Condição";
                        }
                    ?>
                </li>
            </ol>
    </div>
</body>
</html>