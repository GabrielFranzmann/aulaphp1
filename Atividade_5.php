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
        $Nota1 = 7.5;
        $Nota2 = 8;
        $Nota3 = 5.5;
        $Nota4 = 9;
        
        $media = $Nota1 + $Nota2 + $Nota3 + $Nota4 / 4;
        
        if ($media > 7){
            echo "Passou";
        } else if ($media < 7 && $media >= 5){
           echo "Recuperação"; 
        } else if ($media < 5) {
            echo "Reprovou";
        }
        
        ?>
    </body>
</html>
