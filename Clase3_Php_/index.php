<?php
$nombre = "";
$edad; 

if($_POST){
    if(empty($_POST['nombre'])){
        echo "Debe ingresar un nombre";
    }else{
        $nombre = $_POST['nombre'];
    }
   
    if(empty($_POST['edad'])){
        echo "Debe ingresar una edad";
    }else{
        $nombre = $_POST['edad'];
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" placeholder="Nombre" name="nombre" value="<?=$nombre?>"><br>
        <input type="number" placeholder="Edad" name="edad" value="<?=$edad?>"><br>
        <button type="submit">Enviar datos</button>
    </form>
</body>
</html>