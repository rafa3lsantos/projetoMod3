<?php

    require_once "humano.php";

    class Funcionario extends Humano {
        public $cargo;

        public function __construct($nomeHumano, $idade, $endereco, $contato, $cargo) {
            parent::__construct($nomeHumano, $idade, $endereco, $contato);
            $this->cargo = $cargo;
        }

        public function falarHumano() {
            return "O {$this->nomeHumano}, tem a função de {$this->cargo} na clínica veterinaria \n";
        }
    }