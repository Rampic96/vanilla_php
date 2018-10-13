<?php

class Novato
{
    protected $vida;
    protected $nivel;
    protected $velocidad;
    protected $dano;
    protected $mana;
    protected $defensa;
    protected $defensa_esp;
    protected $dano_esp;
    protected $nombre;
    protected $perfil;
    protected $habs; 
    protected $new_habs;
    

    public function __construct($nombre,$perfil)
    {
        $this->perfil=$perfil;
        $this->nombre=$nombre;
        $this->nivel=1;
        $this->velocidad=3;
        $this->vida=50;
        $this->dano=3;
        $this->mana=20;
        $this->defensa=10;
        $this->defensa_esp=15;
        $this->dano_esp=0;
        $this->habs=[["nombre" => "Rugido","nivel" => 1]];

    }
    public function checkNew()
    {
        foreach($this->new_habs as $hab)
        {
            if($hab["nivel"]==$this->nivel)
            {
                $this->Newskill($hab);
            }
        }
    }

    public function AumentarStast($stats)
    {
        $this->vida+=$stats["vida"];
        $this->velocidad+=$stats["velocidad"];
        $this->dano+=$stats["dano"];
        $this->mana+=$stats["mana"];
        $this->defensa+=$stats["defensa"];
        $this->defensa_esp+=$stats["defensa_esp"];
        $this->dano_esp+=$stats["dano_esp"];



    }

    public function LevelUp_novato()
    {
        $stast=[
            "vida" => 2,
            "velocidad" => 1,
            "dano" => 1,
            "mana" => 10,
            "defensa" => 5,
            "defensa_esp" => 3,
            "dano_esp" => 1
        ];
        $this->AumentarStast($stats);
        $this->nivel++;
        $this->checkNew();
        }

    public function Newskill($skill)
    {
        array_push($this->habs,$skill);
    }
    public function getSkill()
    {
        return $this->habs;
    }

    public function ShowStats()
    {
        echo "Vida= ".$this->vida."\n".
            "Velocidad= ".$this->velocidad."\n".
            "Nivel= ".$this->nivel."\n".
            "dano= ".$this->dano."\n".
            "Mana= ".$this->mana."\n".
            "Defensa= ".$this->defensa."\n".
            "Defensa especial= ".$this->defensa_esp."\n".
            "dano especial= ".$this->dano_esp;
            

    }

    public function getStats()
    {
        $datos=[
            "vida" => $this->vida,
            "velocidad " => $this->velocidad,
            "nivel" => $this->nivel,
            "dano" => $this->dano,
            "mana" => $this->mana,
            "defensa" => $this->defensa,
            "defensa_esp" => $this->defensa_esp,
            "dano_esp" => $this->dano_esp
        ];
        return $datos;
    }

    public function getVida()
    {
        return $this->vida;
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    }
    public function getNivel()
    {
        return $this->nivel;
    }
    public function getDano()
    {
        return $this->dano;
    }
    public function getMana()
    {
        return $this->mana;
    }
    public function getDefensa()
    {
        return $this->defensa;
    }
    public function getDefensa_esp()
    {
        return $this->defensa_esp;
    }
    public function getDano_esp()
    {
        return $this->dano_esp;
    }




}

class Guerrero extends Novato
{
    public function __construct($nombre,$perfil)
    {
        parent::__construct($nombre,$perfil);
        $stats=[
            "vida" => 10,
            "velocidad" => 3,
            "dano" => 15,
            "mana" => 20,
            "defensa" => 20,
            "defensa_esp" => 10,
            "dano_esp" => 5

        ];
        $this->AumentarStast($stats);
        $this->new_habs=[
            ["nombre" => "Placaje", "nivel"=> 2],
            ["nombre" => "Corpulencia", "nivel" => 5],
            ["nombre" => "Contra ataque", "nivel" => 11],
            ["nombre" => "Defensa Ferrea", "nivel" => 16],
            ["nombre" => "Agilidad", "nivel" => 20],
            ["nombre" => "Espada cometa", "nivel" => 23],
            ["nombre" => "Gold experience", "nivel" => 30]

        ];
        $this->checkNew();
        
    }
    public function levelUp()
    {
        $skiru=[
            "vida" => 4,
            "velocidad" => 2,
            "dano" => 3,
            "mana" => 5,
            "defensa" => 5,
            "defensa_esp" => 3,
            "dano_esp" => 1];
        $this->AumentarStast($skiru);
        $this->nivel++;
        $this->checkNew();
    }

    

}

$Warrior=new Guerrero("Ramiro","");
$Warrior->levelUp();
$Warrior->levelUp();
$Warrior->levelUp();
$Warrior->levelUp();
$Warrior->levelUp();
$Warrior->levelUp();
$Warrior->ShowStats();
print_r($Warrior->getSkill());














?>