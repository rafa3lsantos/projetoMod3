<?php

    require_once "animal.php";
    require_once "furao.php";
    require_once "cacatua.php";
    require_once "iguana.php";

    $rafael = new Humano("Rafael Bagua", 17, "Rua dos Arquitetos", 429991430575);
    $alongadinho = new Furao("Alongadinho", "Europeu Clássico", 4, "Branco", 2, 47, $rafael);
    echo $alongadinho->apresentar();

    /* echo "O dono " . $rafael->nomeHumano . " tem um pet que se chama: " . $alongadinho->nomeAnimal . " e som que: " . $alongadinho->nomeAnimal . " faz é de: " . $alongadinho->falarAnimal();

    $colt = new Humano("Coltnaldinho", 26, "Bervelly Hills", 42999227654);
    $kiwi = new Cacatua("Kiwi", "Cacatua-das-palmeiras", 2, "Verde Escuro", 1.2, 60, $colt);

    echo "O dono " . $colt->nomeHumano . " tem um pet que se chama: " . $kiwi->nomeAnimal . " e som que: " . $kiwi->nomeAnimal . " faz é de: " . $kiwi->falarAnimal();

    $shelly = new Humano("Shelly Natans", 34, "Times Square", 42999324560);
    $saphira = new Cacatua("Saphira", "Cacatua-das-palmeiras", 2, "Verde Escuro", 1.2, 60, $shelly);

    echo "O dono " . $shelly->nomeHumano . " tem um pet que se chama: " . $saphira->nomeAnimal . " e som que: " . $saphira->nomeAnimal . " faz é de: " . $saphira->falarAnimal(); */


    /*$alongadinho->falarAnimal();
    print_r($alongadinho);

    $kiwi = new Cacatua("Kiwi", "Cacatua-das-palmeiras", 2, "Verde Escuro", 1.2, 60);
    $kiwi->falarAnimal();
    print_r($kiwi);

    $saphira = new Iguana("Saphira", "Iguana-do-caribe", 4, "Verde Brilhante", 2.6, 99);
    $saphira->falarAnimal();
    print_r($saphira); */