<?php
include("funcoes.php");
include("superficie.php")

?>
<h2> Definindo uma função que receberá os raios de 3 círculos e retornará a maior superfície entre ambos. Para este exercício, devemos reutilizar as funções já definidas.
</h2>
<?php
function circulo2($raio1, $raio2, $raio3){
    $area1 = (pi() * ($raio1 * $raio1));
    $area2 = (pi() * ($raio2 * $raio2));
    $area3 = (pi() * ($raio3 * $raio3));
    echo "Area 1 = " .$area1 ."<br>";
    echo "Area 2 = " .$area2 ."<br>";
    echo "Area 3 = " .$area3 ."<br>";

    return max($area1, $area2, $area3);
}
echo "A area maior é : " .circulo2(10, 20, 30);

?>

<h3>Modificar tudoJunto.php para a primeira linha diga $funcoesExecutadas =0</h3>
<?php 
$funcoesExecutadas = 0;
echo "Funcões Executadas = " .$funcoesExecutadas;


?>

<h3>Utilizando strpos(), encontrar a posição da primeira aparição de "php" dentro da cadeia: "Adoro php, Eu também adoro php!"</h3>
<?php
 $frase = "Adoro php, Eu também adoro php!";
 $stringAProcurar = "php";
 $array = strpos($frase, $stringAProcurar);
 echo $array;
 var_dump($array);


?>