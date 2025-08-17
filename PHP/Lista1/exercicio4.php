<?php
    $pésPorMetro = 3.25;

    echo "
        <table border=1px>
            <tr>
                <th>Pés</th>
                <th>Metros</th>
            </tr>
    ";


    for($pés = 3; $pés <= 30; $pés+=3){

        $metros = $pés / $pésPorMetro;
        $metros = number_format($metros,2,",",".");
        
        echo "
            <tr>
                <td>
                    $pés
                </td>
                <td>
                    $metros
                </td>
            </tr>
        ";
    }

    echo "</table>";
?>