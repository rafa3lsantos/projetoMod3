<?php

require_once "humano.php";

class Animal {
    public $nomeAnimal;
    public $raca;
    public $qtd_patas;
    public $cor;
    public $peso;
    public $tamanho;
    protected $humano;

    function __construct($nomeAnimal, $raca, $qtd_patas, $cor, $peso, $tamanho, Humano $humano) {
        $this->nomeAnimal = $nomeAnimal;
        $this->raca = $raca;
        $this->qtd_patas = $qtd_patas;
        $this->cor = $cor;
        $this->peso = $peso;
        $this->tamanho = $tamanho;
        $this->humano = $humano;
    }

    public function getNomeHumano() {
        return $this->humano->getNome(); // Retorna o nome do humano
    }

    public function falarAnimal() {
        return "O animal fala!";
    }

    public function apresentar() {
        return "{$this->nomeAnimal}, pertence ao {$this->getNomeHumano()} e faz {$this->falarAnimal()}";
    }
}
