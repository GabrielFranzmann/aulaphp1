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
        $valgal = 3.69;
        $valalc = 4.10;
        $maisbarato = $valgal *0.7;
        
        if ($maisbarato > $valalc) {
            echo "Abasteça com Alcool";
        } else {
            echo "Abasteça com Gasoline";   
        }
        ?>
    </body>
</html>
