<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / ($altura * $altura);

if ($imc<18.5) {
echo "Você esta com: Peso Abaixo do Normal ";
} 

if ($imc>=18.5 && $imc<24.9) {
    echo "Você esta com: Peso Normal ";
    } 
    
    if ($imc>=25.0 && $imc<29.9) {
        echo "Você esta com: Excesso de Peso ";
        } 

        if ($imc>=30 && $imc<34.9) {
            echo "Você esta com: Obesidade Classe 1 ";
            } 

            if ($imc>=35.0 && $imc<39.9) {
                echo "Você esta com: Obesidade Classe 2  ";
                } 


                if ($imc>=40) {
                    echo "Você esta com: Obesidade Classe 3 (Se prepara) ";
                    } 






?>