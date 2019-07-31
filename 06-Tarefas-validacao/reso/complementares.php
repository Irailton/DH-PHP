<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolução - Complementares</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        li{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <section>
            <ol> 
                <li>
                    <!-- Pergunta 1 -->
                    No arquivo <b>complementares.php</b> crie o seguinte array <b>$cores = array('Branco', 'Verde', 'Vermelho')</b>, e escreva um script PHP que mostre as cores desta forma:<br><br>
                    <!-- Resposta 1 -->    
                    <?php
                        $cores = array('Branco', 'Verde', 'Vermelho');
                        echo '<ul>';
                            foreach ($cores as $cor) {
                                echo "<li>$cor</li>";
                            }
                        echo '</ul>';
                    ?>
                </li>
                <li>
                <!-- Pergunta 2 -->
                Modificar o exercício anterior para que cada elemento do array tenha o nome e o valor hexadecimal (css) da cor. Assim, seria possível desenhar cada nome com a cor indicada. Para isso, recomendamos utilizar o <b>atributo style e a propriedade color</b> para imprimir o valor hexadecimal necessário.<br><br>
                <!-- Resposta 2 -->
                <?php
                    $cores = array('Branco' => '#fff', 'Verde' => '#008000', 'Vermelho' => '#f00');
                    echo '<ul>';
                        foreach ($cores as $chave => $valor) {
                            echo "<li style='color:$valor;'>$chave</li>";
                        }
                    echo '</ul>';
                ?>
                </li>
            </ol>
        </section>
    </div>
</body>
</html>