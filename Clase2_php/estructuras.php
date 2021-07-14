<?php
// FOREACH(Array as valor) for(variable; condicion ; incremento)
    // $persona = [
    //     "nombre" => "Ignacio",
    //     "apellido" => "Kalaydjian",
    //     "edad" => 35
    // ];
    
    
    // foreach($persona as $clave => $valor){

    //     echo $clave . ": " . $valor . "<br>";
    // }

    // while y do-while
        //$i = 4;

    // do{
    //     echo "Hola por " . $i . " vez<br>";
    //      $i++;
    // }while($i<3)

    // while($i<3){
    //     echo "Hola por " . $i . " vez";
    //     $i++;
    // }

    //Funciones
    $nombre = "David";

    function saludar(){
        global $nombre;
        echo "Hola $nombre, bienvenida a Codo a codo";
    }

    //echo $nombre;
    saludar();
   
?>