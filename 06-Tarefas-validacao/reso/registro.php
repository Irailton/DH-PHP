
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolução - Aula 16</title>
    <!-- Links do Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Links do Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        li{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container"><br>
        <section>
            <ol> 
                <li>
                    <!-- Pergunta 1 -->
                    Crie um arquivo <b>registro.php</b> e dentro deste arquivo crie um formulário.<br>
                    <!-- Resposta 1 -->
                    R: O formulário está criado abaixo.<br><br>
                </li>
            </ol>
        </section>
        <form action="confirma.php" method="POST">
            <div class="col-lg-12 col-12 col-sm-12" >
                <div class="col-lg-3 col-3 col-sm-6">
                    <label>Nome: </label>
                    <input type="text" class="form-control" name="name"><br>
                </div>
                <div class="col-lg-4 col-4 col-sm-6">
                    <label>Sobrenome: </label>
                    <input type="text" class="form-control" name="sobrenome"><br>
                </div>
            </div>
            <div class="col-lg-12 col-12 col-sm-12">
                <div class="col-lg-4 col-4 col-sm-12">
                    <label>Email: </label>
                    <input type="email" class="form-control" name="email"><br>
                </div>
                <div class="col-lg-4 col-3 col-sm-12">
                    <label>Senha: </label>
                    <input type="password" class="form-control" name="senha"><br>
                </div>
                <div class="col-lg-4 col-3 col-sm-12">
                    <label>Confirme sua Senha:</label>
                    <input type="password" class="form-control" name="confirma_senha"><br>
                </div>
            </div>
            <div class="col-lg-12 col-12 col-sm-12">
                <!-- Criando o array contendo os países para popularmos o <select> -->
                <?php
                    $paises = ['Brasil', 'Uruguai', 'França', 'Itália', 'Paraguai', 'Inglaterra', 'Suíça', 'Holanda', 'México', 'Portugal'];
                ?>
                <!-- Iremos percorrer o array $paises e listar os items dentro do <select> -->
                <div class="col-lg-3 col-3 col-sm-6">
                    <label>Nacionalidade: </label>
                    <select name="nacionalidade" class="form-control">
                        <?php
                            foreach ($paises as $pais){
                                echo "<option value='$pais'>$pais</option>";
                            }
                        ?>
                    </select>
                    <br>
                </div>
                <div class="col-lg-5 col-6 col-sm-6" style="margin-top: 5px;">
                    <label >Esportes Favoritos:</label><br>
                    <input type="checkbox" name="esportes" value=""> Futebol
                    <input type="checkbox" name="esportes" value="" style="margin-left: 20px;"> Vôlei
                    <input type="checkbox" name="esportes" value="" style="margin-left: 20px;"> Basquete
                </div>
                <div class="col-lg-12 col-12 col-sm-12"><br>
                    <input type="checkbox" name="condicao" value="aceito">
                    <label>Termos de Condição</label>         
                </div>
                <div class="col-lg-12 col-12 col-sm-12">
                    <input type="submit" name="enviar" style="margin-top:25px;" class="btn btn-primary" value="Enviar Informações">
                </div>
            </div>
        </form>
    </div>
</body>
</html>