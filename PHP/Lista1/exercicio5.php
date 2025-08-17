<?php
    echo"
        <table border = 1px>
            <tr>
                <th>Fahrenheit</th>
                <th>Celsius</th>
            </tr>
    ";

    $fahrenheit = 0;
    $celsius = 0;

    while($celsius != 60){
        $celsius = ($fahrenheit - 30)/2;
        echo"
            <tr>
                <td>
                    $fahrenheit
                </td>
                <td>
                    $celsius
                </td>
            </tr>
        ";

        $fahrenheit +=2;
    }

    echo "</table>";

?>