<?php
$lista_compras = ["Pan", "Harina", "Huevos", "Azúcar", "Limón"];

function printVector(Array $vector){
    foreach($vector as $value){
        echo "$value";
    }
}

echo "<h1>Lista de compras:</h1><p><?php printVector($lista_compras); ?></p>";
?>