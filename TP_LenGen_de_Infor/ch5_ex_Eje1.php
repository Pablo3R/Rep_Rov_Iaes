<?php
extract($_REQUEST);

//print('Información detallada de $edad: ');
//var_dump($edad);

$view = new DateTime($edad);
$view = $view->diff(new DateTime());
$view = (int)$view->format("%Y");

function desc($e){
    $aux_01 = new DateTime($e);
    $age = (int)$aux_01->diff(new DateTime())->format("%Y");

    $precio = 50;
    $Men20 = 0.90;
    $May50 = 0.95;
    
    if($age < 20){
        $precio = $precio * $Men20;
    }
    elseif($age > 50){
        $precio = $precio * $May50;
    }
    else{
        //Puedo dejar esto vácio como un pass.
        //No hace falta modificar $precio.
    }

    return $precio;
}

function color($e){
    $before = new DateTime($e);
    $now = (int)$before->diff(new DateTime())->format("%Y");
    $color_f = null;

    if($now < 15){
        $color_f = "#b25252";
    }
    elseif((int)$now >= 15 && $e <= 30){
        $color_f = "#52b258";
    }
    elseif((int)$now > 30){
        $color_f = "#528fb2";
    }
    else{
        $color_f = "#8b52b2";
    }
    
    return $color_f;
}?>

<html>
    <head>
        <title>Pest.Resp. 5-Eje1</title>
        <link rel="stylesheet" href="ch5_ex_Eje2_styles.css">
    </head>
    <body bgcolor="<?php echo color($edad) ?>">
        <!--<link rel="stylesheet" href="styles.css">-->
        <h1>Página de respuesta</h1>
            <p>Su nombre es: <?=$nombre?></p>
            <p>Su edad es: <?=$view?></p>
            <p>Precio: <?=desc($edad)?></p>
            <button onclick="history.back()" class="btn-volver">Volver</button>
    </body>
</html>