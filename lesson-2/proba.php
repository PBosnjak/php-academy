<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PHP akademija</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>              
        <h1>Naslov</h1>
        <img src="static/rickrolled-card.jpg">
        
        <p>
        <?php
            $list = [
            '<a> - anchor',
            '<p> - paragraph',
            '<ul> - unordered list',
            '<table> - table'

        ];


        foreach ($list as $value){
            $var = explode(" - ", $value);
            //var_dump($var);
            echo htmlspecialchars($var[0] . "    " . $var[1]) . "<br>";
        }
        ?>
        </p>        
        
        
    </body>
</html>
