<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php 
        $funcoesExecutadas = 0; 
        echo "Funçoes executadas = " .$funcoesExecutadas;
    ?>
        


    <h1>Resultado das funções</h1>
    <h3> A. Definir uma função maior() que receba 3 números e retorne o maior deles.</h3><br>
    <?php
    $numeroMagico = 10;

    $num1 = 10;
    $num2 = 15;
    $num3 = 9;

    function maior($num1, $num2, $num3){
        global $funcoesExecutadas;
        $funcoesExecutadas+=1;
       return max($num1, $num2, $num3);
    
    } 
    echo "O numero maior entre $num1,  $num2 e $num3 é : " .maior($num1 , $num2, $num3) ."<br>";
    

    ?>
    <h3> B. Definir uma função tabela() que receba um parâmetro base, um parâmetro limite, e retorne um array com a sequência de números a partir do número base até o número limite.<br></h3>
    <?php 

    function tabela($base, $limite){
    $adicionandoItem = [];
    for ($i=$base; $i < $limite ; $i++) { 
        array_push($adicionandoItem, $i);
        
    }
    global $funcoesExecutadas;
    $funcoesExecutadas+=1;
    return $adicionandoItem;
    
    }

     $resultadoArray = tabela(10,30);
    foreach ($resultadoArray as $value) {
        echo $value ." ";
        
    }
    global $funcoesExecutadas;
    $funcoesExecutadas+=1;
    
    ?>
    <h3>Definir uma variável chamada numeroMagico, que contenha um número. Tal variável deverá estar na primeira linha do nosso códigoPHP.</h3>
    <?php
    //verificar
    function maior2($num2, $num3){
    global $numeroMagico ;
    if(empty($num1)){
    return max($numeroMagico, $num2, $num3);
    }
    elseif(empty($num2)){
     return max($num1, $numeroMagico, $num3);

    }elseif(empty($num3)){
    return max($num1, $numeroMagico, $nummeroMagico);

    }else{
    global $funcoesExecutadas;
    $funcoesExecutadas+=1;
    return max($num1, $num2, $num3);
    
    }   


    } 
    echo "Resultado: "  .$resultado = maior2(3,0);
    
    
    ?>
     <!-- Revisar esta função  com erro -->
    <h3>Modificar tabela de forma que, se a receber apenas um parâmetro, a função use numeroMagico como limite</h3>
    <?php
  
    function tabela2($base){
    global $numeroMagico;
    $adicionandoItem = [];
    for ($i=$base; $i < $numeroMagico; $i++) { 
        array_push($adicionandoItem, $i);
    }

    global $funcoesExecutadas;
    $funcoesExecutadas+=1;
    return $adicionandoItem;
    
    }
    
     $resultadoArray = tabela2(10);
    foreach ($resultadoArray as $value) {
        echo $value ." ";
    }
    // echo "funcionou";   
    // var_dump($adicionandoItem);
    global $funcoesExecutadas;
     $funcoesExecutadas+=1;
    ?>

    <h3>Resultado da função Funções executada </h3>
    <?php
    echo "Funções executada: " .$funcoesExecutadas;
     ?>

</body>
</html>

