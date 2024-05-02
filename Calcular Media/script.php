<?php


$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];


$armazenarvalores = ($nota1+$nota2+$nota3) / 3;
$media = intval($armazenarvalores);

if ($media >= 7) {
echo "Sua Nota Final: $media  (APROVADO)";
} 

if($media<=5) {
    echo "Sua Nota Final: $media  (REPROVADO)";
}





?>