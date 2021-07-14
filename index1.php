<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hora</title>
</head>
<body>
    <?php
        $segundos = date("s");
        var_dump($segundos);
        if($segundos > 30){
            echo "Estamos llegando al final de min";
        } else{
            echo "Apenas es el comienzo";
        }
        $segundos = 15;
        var_dump($segundos);
        // $fecha = date("H.i.s");
        //echo $fecha; 
    ?>
</body>
</html>