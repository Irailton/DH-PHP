
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Fale conosco</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
        <section class="container">
        <ol> 
                <li>
                    <!-- Pergunta 1 -->
                    Crie um arquivo <b>registro.php</b> e dentro deste arquivo crie um formulário.<br>
                    <!-- Resposta 1 -->
                    R: O formulário está criado abaixo.<br><br>
                </li>
            </ol>
            <form action="confirma.php" method="POST">
            <div class="col-lg-12 col-12 col-sm-12" >
            <div class="col-sm-6">
                    <label>Nome: </label>
                    <input type="text" class="form-control" name="name" value=""><br>
                </div>
                <div class="col-sm-6">
                    <label>Sobrenome: </label>
                    <input type="text" class="form-control" name="sobrenome"><br>
                </div>
                </div>
                <div class="col-lg-12 col-12 col-sm-12">
                <div class="col-sm-6">
                    <label>Email: </label>
                    <input type="email" class="form-control" name="email"><br>
                </div>
                <div class="col-sm-6">
                    <label>Senha: </label>
                    <input type="password" class="form-control" name="senha">
                </div>
                <div class="col-sm-6">
                    <label>Confirme sua Senha: </label>
                    <input type="password" class="form-control" name="confirma_senha">
                </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                <div class="col-sm-6 mt-3">
                
                <?php 
                $paises = ["Brasil", "Urugai", "França", "Itália", "Paraguai", "Inglaterra", "Suíça", "Holanda", "México", "Potugal"];
                ?>
                <label>Nacionalidade:</label>
                <select name="nacionalidade" id="form-control">
                <?php
                foreach ($paises as $value) {
                    echo "<option value='$value'> $value </option><br>";
                }
                ?>
                </select>
                </div>
                <div class="col-sm-12 mt-3">
                <label for="">Esportes Favoritos:</label><br>
                <input type="checkbox" name="esporte[]" value="futebol">Futebol
                <input type="checkbox" name="esporte[]" value="volei" style="margin-left: 20px;">Vôlei
                <input type="checkbox" name="esporte[]" value="basquete" style="margin-left: 20px;">Basquete
                <input type="checkbox" name="esporte[]" value="natacão" style="margin-left: 20px;">Natação
                </div>
                <div class="col-12">
                <input type="checkbox" name="condicao" value="aceito">
                <label for="">Termos e condição</label>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                <input type="submit" name="enviar" class="btn btn-primary" value="Enviar Informações">
                
                </div>
                    
                </div>
            
            
            </form>

        </section>

  

    </body>
</html>