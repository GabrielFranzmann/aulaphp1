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
        $valor1 = 200;
        $valor2 = 300;
        
        if ($valor1 > $valor2){
            $valoraux = $valor1;
            $valor2 = $valor1;
            $valor2 = $valoraux;
        }
        ?>
    </body>
</html>
