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
        $sexo ='m';
        $altura = 1.75;
        
        if ($sexo == 'm') {
            $imc = (72.7 * $altura) - 58;
            echo $imc;
        } else if ($sexo == 'f') {
            $imc = (62.1 * $altura) - 44;
            echo $imc;
        }
        ?>
    </body>
</html>
