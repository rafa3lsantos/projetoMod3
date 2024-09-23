<?php

class Humano {
    public $nomeHumano;
    public $idade;
    public $endereco;
    public $contato;

    function __construct($nomeHumano, $idade, $endereco, $contato) {
        $this->nomeHumano = $nomeHumano;
        $this->idade = $idade;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }

    public function getNome() {
        return $this->nomeHumano;
    }

    public function falarHumano() {
        return "O humano fala!";
    }
}
