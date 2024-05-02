<?php 
$temperatura = $_POST['temperatura'];

if($temperatura<0){

    echo "Eita Ta Congelando";

}

if($temperatura>=0 && $temperatura<15){

    echo "Ta Bem Frio  ein";

}

if($temperatura>=15 && $temperatura<25){

    echo "É ta razoável";

}

if($temperatura>=25){

    echo "Ta muito Quente aqui eu to morrendo de calor...";

}






?>