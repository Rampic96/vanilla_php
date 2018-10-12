<?php

class Cancion{
    
    private $id;
    private $nombre;
    private $genero;
    private $artista;
    
    public function __construct($id, $nombre, $genero, $artista ){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->artista = $artista;
    }

    public function toString() : string{
        return "{$this->nombre} [{$this->artista}]" ; 
    }

}

$cancion = new Cancion(1,"Last Train to Home", "Jazz", "Pat Metheny");

echo $cancion->toString();

