<?php

require_once "humano.php";
require_once "animal.php";
require_once "furao.php";
require_once "cacatua.php";
require_once "iguana.php";
require_once "produto.php";
require_once "venda.php";
require_once "funcionario.php";
require_once "vendedor.php";
require_once "veterinario.php";
require_once "balconista.php";

$humanoList = [];
$funcionarioList = [];
$produtoList = [];
$animalList = [];
$vendaList = [];

function menu() {
    echo "Menu:\n";
    echo "1. Adicionar dono/cliente\n";
    echo "2. Adicionar funcionário\n";
    echo "3. Adicionar produto\n";
    echo "4. Adicionar animal\n";
    echo "5. Realizar venda\n";
    echo "6. Sair\n";
    return readline("Escolha uma opção: ");
}

function addHumano(&$humanoList) {
    echo "Adicionar dono/cliente:\n";
    $nome = readline("Nome: ");
    $idade = readline("Idade: ");
    $endereco = readline("Endereço: ");
    $contato = readline("Contato: ");
    $humano = new Humano($nome, $idade, $endereco, $contato);
    $humanoList[] = $humano;
    echo "Dono/cliente adicionado com sucesso!\n";
}

function addFuncionario(&$funcionarioList) {
    echo "Adicionar funcionário:\n";
    $nome = readline("Nome: ");
    $idade = readline("Idade: ");
    $endereco = readline("Endereço: ");
    $contato = readline("Contato: ");
    echo "Cargo:\n";
    echo "1. Balconista\n";
    echo "2. Vendedor\n";
    echo "3. Veterinário\n";
    $cargoOption = readline("Escolha um cargo: ");
    $salario = readline("Salário: ");
    
    switch ($cargoOption) {
        case 1:
            $cargo = "Balconista";
            $funcionario = new Balconista($nome, $idade, $endereco, $contato, $cargo, $salario);
            break;
        case 2:
            $cargo = "Vendedor";
            $funcionario = new Vendedor($nome, $idade, $endereco, $contato, $cargo, $salario);
            break;
        case 3:
            $cargo = "Veterinário";
            $funcionario = new Veterinario($nome, $idade, $endereco, $contato, $cargo, $salario);
            break;
        default:
            echo "Opção inválida.\n";
            return;
    }
    
    $funcionarioList[] = $funcionario;
    echo "Funcionário adicionado com sucesso!\n";
}

function addProduto(&$produtoList) {
    echo "Adicionar produto:\n";
    $nome = readline("Nome do produto: ");
    $valor = readline("Valor do produto: ");
    $quantidade = readline("Quantidade do produto: ");
    $produto = new Produto($nome, $valor, $quantidade);
    $produtoList[] = $produto;
    echo "Produto adicionado com sucesso!\n";
}

function addAnimal(&$animalList, $humanoList) {
    if (empty($humanoList)) {
        echo "Nenhum dono/cliente cadastrado. Adicione um dono/cliente primeiro.\n";
        return;
    }
    
    echo "Adicionar animal:\n";
    $nome = readline("Nome do animal: ");
    $raca = readline("Raça: ");
    $qtdPatas = readline("Quantidade de patas: ");
    $cor = readline("Cor: ");
    $peso = readline("Peso: ");
    $tamanho = readline("Tamanho: ");
    
    echo "Escolha o dono/cliente:\n";
    for ($i = 0; $i < count($humanoList); $i++) {
        echo ($i + 1) . ". " . $humanoList[$i]->getNome() . "\n";
    }
    $index = readline("Escolha um número: ") - 1;
    
    if (isset($humanoList[$index])) {
        $humano = $humanoList[$index];
    } else {
        echo "Opção inválida.\n";
        return;
    }
    
    echo "Escolha o tipo de animal:\n";
    echo "1. Furao\n";
    echo "2. Cacatua\n";
    echo "3. Iguana\n";
    $tipo = readline("Escolha um tipo: ");
    
    switch ($tipo) {
        case 1:
            $animal = new Furao($nome, $raca, $qtdPatas, $cor, $peso, $tamanho, $humano);
            break;
        case 2:
            $animal = new Cacatua($nome, $raca, $qtdPatas, $cor, $peso, $tamanho, $humano);
            break;
        case 3:
            $animal = new Iguana($nome, $raca, $qtdPatas, $cor, $peso, $tamanho, $humano);
            break;
        default:
            echo "Tipo de animal inválido.\n";
            return;
    }
    
    $animalList[] = $animal;
    echo "Animal adicionado com sucesso!\n";
}

function realizarVenda(&$vendaList, $humanoList, $produtoList) {
    if (empty($humanoList)) {
        echo "Nenhum dono/cliente cadastrado. Adicione um dono/cliente primeiro.\n";
        return;
    }
    
    if (empty($produtoList)) {
        echo "Nenhum produto cadastrado. Adicione um produto primeiro.\n";
        return;
    }
    
    echo "Realizar venda:\n";
    echo "Escolha o cliente:\n";
    for ($i = 0; $i < count($humanoList); $i++) {
        echo ($i + 1) . ". " . $humanoList[$i]->getNome() . "\n";
    }
    $clienteIndex = readline("Escolha um número: ") - 1;
    
    if (isset($humanoList[$clienteIndex])) {
        $cliente = $humanoList[$clienteIndex];
    } else {
        echo "Opção inválida.\n";
        return;
    }
    
    $venda = new Venda($cliente);
    
    while (true) {
        echo "Escolha o produto:\n";
        for ($i = 0; $i < count($produtoList); $i++) {
            echo ($i + 1) . ". " . $produtoList[$i]->nomeProduto . " - R$ " . $produtoList[$i]->valorProduto . "\n";
        }
        $produtoIndex = readline("Escolha um número (ou 0 para finalizar): ") - 1;
        
        if ($produtoIndex === -1) break;
        
        if (isset($produtoList[$produtoIndex])) {
            $produto = $produtoList[$produtoIndex];
            $quantidade = readline("Quantidade: ");
            $venda->adicionarProduto($produto, $quantidade);
        } else {
            echo "Opção inválida.\n";
        }
    }
    
    $vendaList[] = $venda;
    echo "Venda realizada com sucesso!\n";
}

while (true) {
    $opcao = menu();
    
    switch ($opcao) {
        case 1:
            addHumano($humanoList);
            break;
        case 2:
            addFuncionario($funcionarioList);
            break;
        case 3:
            addProduto($produtoList);
            break;
        case 4:
            addAnimal($animalList, $humanoList);
            break;
        case 5:
            realizarVenda($vendaList, $humanoList, $produtoList);
            break;
        case 6:
            echo "Saindo...\n";
            exit;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
}
