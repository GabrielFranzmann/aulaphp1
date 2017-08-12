<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    
    $result = 0;
    for($valor = 0; $valor <= 1000; $valor += 8)
        $result += $valor;
    
    echo "$result";
        ?>

    </body>
</html>
