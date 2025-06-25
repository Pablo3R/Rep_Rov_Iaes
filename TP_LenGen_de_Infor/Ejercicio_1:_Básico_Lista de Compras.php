<?php
$lista_compras = ["Pan", "Harina", "Huevos", "Azúcar", "Limón"];

function printVector_Viñeta(Array $vector){
    foreach($vector as $value){ echo "<li>$value</li>";}
}

function existeInVector(Array $vector, string $busqueda){
    $retorno = 0;
    foreach($vector as $value){
        if($value == $busqueda){
            $retorno = 1;
        }
    }
    return $retorno;
}

//Comentario
echo "<h1>Lista de compras:</h1><p>";
printVector_Viñeta($lista_compras);
echo "</p>";

$lista_compras[] = "Leche";
$lista_compras[] = "Carbón";

echo "<p>Actualmente hay "; 
echo count($lista_compras);
echo " elementos en la lista.</p>";

$buscando = "Leche";

if(existeInVector($lista_compras, $buscando)){
    echo "Existe el elemento: <strong><li>$buscando</li></strong> en la lista.";
}
else{
    echo "No existe el elemento: <strong><li>$buscando</li></strong> en la lista.";
}

?>