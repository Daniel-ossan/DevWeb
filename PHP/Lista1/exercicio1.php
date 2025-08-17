<?php
    $nota1 = 7;
    $nota2 = 8;
    $nota3 = 9;
    $media = ($nota1 + $nota2 + $nota3)/3;
    $nome = "Daniel";

    echo "Aluno: $nome <br>";
    echo "Situação: ";
    if($media < 4){
        echo "Reprovado!";
    }
    if($media >= 4 && $media < 7){
        echo "Prova Final!";
    }
    if($media >= 7){
        echo "Aprovado!";
    }


    



    



?>