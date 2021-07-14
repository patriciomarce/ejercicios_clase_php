<?php
class Cliente{ //Molde
    /*Atributos (propiedades)*/
    private $nombre; /*Modificadores de acceso; PUBLIC, PRIVATE, PROTECTED*/
    private $dni; //Un atributo PRIVADO es aquel que solamente puede ser accedido desde dentro de la clase
    private $mascotas;

    /*Metodos (responsabilidades) son las acciones que llevan a cabo
    las instancias de la clase*/
    public function setNombre($nombre){ //setter, es un metodo que asigna informacion a un atributo existente
        $this->nombre = $nombre;
    }

    public function setDni($dni){
        $this->dni = $dni;
    }

    public function setMascota($mascota){
        $this->mascotas = $mascota;
    }

    //Getters - Son aquellos metodos que me permiten traer informacion del objeto
    public function getNombre(){
        return $this->nombre;
    }

    public function getDni(){
        return $this->dni;
    }

    public function getMascota(){
        return $this->mascotas;
    }

}
?>