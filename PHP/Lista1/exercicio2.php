<?php
    $codigo = "0223";
    $quantidade = 8;

    $rs = match ($codigo) {
        "1001","0987"=> 5.32,
        "1324","7623"=> 6.45,
        "6548"=> 2.37,
        default => "Código inválido! Não há produto com este código!"
    };

    if(is_double($rs)){
        $valorTotal = $rs * $quantidade;
        echo "Preço Total: $valorTotal";
    }
    else{
        echo $rs;
    }

   

    

?>