<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $variabileEsterna = 0;
        testFunction();
        $altraVariabile = 0;
    ?>
    
</body>
</html>

<?php

function testFunction(){
    $messaggio = "ciao mondo";

    for($i=0;$i<10;$i++){
        echo $messaggio;
    }
}

?>