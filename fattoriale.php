<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php echo fattoriale(4); ?>
</body>
</html>

<?php 

function fattoriale($numero){
    //se il numero è 1 restituisco 1,
    if ($numero == 1){
        return 1;
    } else {
       //altrimenti calcolo il fattoriale di numero -1
        return $numero * fattoriale($numero - 1);
    }   
}

?>