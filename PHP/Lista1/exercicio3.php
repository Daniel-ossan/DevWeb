<?php
    $valorMaquina = 28000;
    $depreciacao = 4000;


    echo "
    <table border = 1px>
        <tr>
            <th>Ano</th>
            <th>Depreciação</th>
            <th>Valor no fim do Ano</th>
            <th>Depreciação Acumulada</th>
        </tr>
    ";

    for($i = 1; $i < 8; $i++){
        if($i==1){
            $valorFimDoAno = $valorMaquina;
        }
        $valorFimDoAno = $valorFimDoAno - $depreciacao;
        $depreciacaoAcumulada = $depreciacao * $i;
        echo "
            <tr>
                <td>$i</td>
                <td>$depreciacao</td>
                <td>$valorFimDoAno</td>
                <td>$depreciacaoAcumulada</td>
            </tr>
        ";
    };

    echo "</table>";



?>