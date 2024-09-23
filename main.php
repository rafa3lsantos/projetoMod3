<?php

    require_once "animal.php";
    require_once "furao.php";
    require_once "cacatua.php";
    require_once "iguana.php";
    require_once "balconista.php";
    require_once "produto.php";
    require_once "venda.php";
    require_once "veterinario.php";
    require_once "vendedor.php";

    $rafael = new Humano("Rafael Bagua", 17, "Rua dos Arquitetos", 429991430575);
    $alongadinho = new Furao("Alongadinho", "Europeu Clássico", 4, "Branco", 2, 47, $rafael);
    echo $alongadinho->apresentar();
    
    $colt = new Humano("Coltnaldinho", 26, "Bervelly Hills", 42999227654);
    $kiwi = new Cacatua("Kiwi", "Cacatua-das-palmeiras", 2, "Verde Escuro", 1.2, 60, $colt);
    echo $kiwi->apresentar();
    
    $shelly = new Humano("Shelly Natans", 34, "Times Square", 42999324560);
    $saphira = new Iguana("Saphira", "Cacatua-das-palmeiras", 2, "Verde Escuro", 1.2, 60, $shelly);
    echo $saphira->apresentar();
    
    $ze = new Balconista("Zezin", 29, "Rua das Camelias", 42991345678, "Balconista", 3400);
    echo $ze->falarHumano(); 

    $drRoberto = new Veterinario("Dr. Roberto", 45, "Rua dos Animais", 42991234567, "Cirurgia Animal", 10000);
    echo $drRoberto->falarHumano();  

    $marcos = new Vendedor("Marcos Lima", 32, "Rua das Compras", 42991112233, "Pet Shop", 3000);
    echo $marcos->falarHumano(); 

    $produto1 = new Produto("Ração para Cachorro", 50.00, 100);
    $produto2 = new Produto("Brinquedo para Gato", 30.00, 50);

    $humano = new Humano("Rafaela Severo", 9, "Rua Rosmari Siqueira", 42999334455);

    $venda  = new Venda($humano);
    $venda->adicionarProduto($produto1, 2);  
    $venda->adicionarProduto($produto2, 1);  

    echo $venda->apresentarVenda();