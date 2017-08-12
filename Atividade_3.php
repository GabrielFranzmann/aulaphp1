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
        $A = 10;
        $B = 20;
        $C = 30;
        $D = 40;
        
        $soma = $A + $D;
        $divisao = $B / $C;
        
         if ($soma > $divisao){
            echo "Valor de soma é maior";
        } else if ($soma < $divisao){
           echo "Valor de soma é menor"; 
        } else {
            echo "Valor Igual";
        }
        
        ?>
    </body>
</html>