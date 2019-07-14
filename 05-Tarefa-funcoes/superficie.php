<?php 
$funcoesExecutadas = 0;
?>

<h3>A -Definir uma função triangulo() que retorne sua superfície.</h3>

<?php 

function triangulo($base, $altura){
    global $funcoesExecutadas;
    $area = (($base * $altura) / 2) ;
    return $area;

    $funcoesExecutadas++;

}
echo triangulo(10, 50);
echo "Result: " .$funcoesExecutadas;
var_dump($funcoesExecutadas);

// Revisar esta função está com erro 
?>
<h3>B - Definir uma função retangulo() que retorne sua superfície.</h3>

<?php 
function retangulo ($base, $altura){
    $area = $base * $altura;
    return $area;
}
echo retangulo (5, 9);
?>

<h3>C - Definir uma função quadrado() que retorne sua superfície.</h3>

<?php
function quadrado ($lado){
    $area = $lado * $lado;
    return $area; 
}

echo quadrado(10);

?>
<h3>Utilizando a função pi(), definir uma função circulo() que retorne sua superfície</h3>

<?php
function circulo($raio){
    $area = (pi() * ($raio * $raio));
    return $area;
}
echo circulo(3);







