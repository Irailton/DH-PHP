<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>index</title>
</head>
<body>
<!DOCTYPE HTML>
<html>
<body>
    <div class="container">
    <form action ="imprimir.php" method ="POST">
    Nome: <input type="text" name="nome"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    <label for="">Como você ficou sabendo deste site ?</label><br>
    Fecebook: <input type="checkbox" name="fecebook"><br><br>
    YouTube:<input type="checkbox" name="youtube"><br><br>
    Instagram:<input type="checkbox" name="insta"><br><br>
    <label for="">Selecione o gênero</label><br>
    Masculino<input type="radio" name="sexo" value="M">
    Feminino<input type="radio" name="sexo" value="F"><br>
    <label for="">Que horas você dormiu ?</label><br>
    <select name="Hora" id="">
    <option value="21">21 h</option>
    <option value="22">22 h</option>
    <option value="23">23 h</option>
    </select><br>
    <label for="">Aceitar Termos</label><br>
   <input type="checkbox" name="termo"><br><br>
    <input type = "submit">
    </div>
</form>
</body>
</html>
</body>
</html>