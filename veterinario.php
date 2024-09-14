<?php

    require_once "funcionario.php";

    class Veterinario extends Funcionario{
        public $salario;

        public function __construct($nomeHumano, $idade, $endereco, $contato, $cargo, $salario) {
            parent::__construct($nomeHumano, $idade, $endereco, $contato, $cargo);
            $this->salario = $salario;
        }

        public function falarHumano() {
            return "O {$this->nomeHumano}, tem a função de {$this->cargo} na clínica veterinaria e ganha R$ {$this->salario} \n";
        }
    }