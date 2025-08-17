<?php
    echo "
        <table border = 1px>
            <tr>
                <th>Idade</th>
                <th>Peso (Kgs)</th>
            </tr>
    ";

    for ($idade = 1; $idade <= 10; $idade++) {
        $pesoNormal = (($idade-6)/4.4) + 2.3 * ($idade-6) + 22;
        $pesoNormal = number_format($pesoNormal,2,".","");
        echo "
            <tr>
                <td>
                    $idade
                </td>
                <td>
                    $pesoNormal
                </td>
            </tr>
        ";
}

echo "</table>";
?>