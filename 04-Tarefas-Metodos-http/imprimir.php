<?php 

$dados = $_REQUEST;
foreach ($dados as $key => $value) {
    echo $key .":" .$value ."<br>";
}

foreach (getAllHeaders() as $key => $value) {
    echo $key .":" .$value ."<br>";
}

?>
