<?php

class Novato{
    
    protected $nombre;
    protected $perfil;
    protected $vida;
    protected $ataque;
    protected $defensa;
    protected $ataqueEspecial;
    protected $defensaEspecial;
    protected $velocidad;
    protected $habilidades;
    protected $nivel;

    public function __construct($nombre = "Anonimo", $perfil, $vida){
        $this->nombre = $nombre;
        $this->perfil = $perfil;
        $this->vida = $vida;
        $this->ataque = 5;
        $this->defensa = 5;
        $this->ataqueEspecial = 5;
        $this->defensaEspecial = 5;
        $this->velocidad = 5;
        $this->habilidades = ["Hacerse el muerto"];
        $this->nivel = 1;
       
    }

    public function growStats($stats){
        $this->vida += $stats["vida"];
        $this->ataque += $stats["ataque"];
        $this->defensa += $stats["defensa"];
        $this->ataqueEspecial += $stats["ataqueEspecial"];
        $this->defensaEspecial += $stats["defensaEspecial"];
        $this->velocidad += $stats["velocidad"];
    }

    public function levelUp(){
        $stats = [
            "vida" => 5,
            "ataque" => 1,
            "defensa" => 1,
            "ataqueEspecial" => 1,
            "defensaEspecial" => 1,
            "velocidad" => 1,
        ];
        $this->growStats($stats);
        $this->nivel++;
    }

    public function learnSkill($skill){
        array_push($this->habilidades, $skill);
    }

    public function showLife(){
        return $this->vida;
    }

    public function getData() : array{
        $data = [
            "nombre" => $this->nombre,
            "perfil" => $this->perfil,
            "vida" => $this->vida,
            "ataque" => $this->ataque,
            "defensa" => $this->defensa,
            "ataqueEspecial" => $this->ataqueEspecial,
            "defensaEspecial" => $this->defensaEspecial,
            "velocidad" => $this->velocidad,
            "habilidades" => $this->habilidades,
            "nivel" => $this->nivel,
        ];
        return $data;
    }

}

class Guerrero extends Novato{

    public function __construct($nombre,$perfil ,$vida){
        parent::__construct($nombre,$perfil,$vida);
        $this->vida += 50;
        $this->learnSkill("Ora Ora Ora");
    }

    public function levelUp(){
        $stats = [
            "vida" => 15,
            "ataque" => 4,
            "defensa" => 4,
            "ataqueEspecial" => 0,
            "defensaEspecial" => 2,
            "velocidad" => 2,
        ];
        $this->growStats($stats);
        $this->nivel++;
    }

}

$player = new Guerrero(null,'',50);

print_r($player->getData());
