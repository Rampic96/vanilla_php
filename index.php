<?php

    require 'clases.php';

    function Up($player, $nivel){
        for ($i=0; $i < $nivel; $i++) { 
            $player->levelUp();
        }
    }

    $Warrior=new Guerrero("Ramiro","http://images.goodsmile.info/cgm/images/product/20180821/7539/53923/large/6cc09eaca504f4fcbda6e0120290f570.jpg");
    
    
    if( $_GET && isset($_GET["nivel"])){
        Up($Warrior,$_GET["nivel"]);
    }
    
    
    $datos = $Warrior->getStats();

    require 'index_view.php';

