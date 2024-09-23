<?php

    class Produto {
        public $nomeProduto;
        public $valorProduto;
        public $qtdProduto;

        public function __construct($nomeProduto, $valorProduto, $qtdProduto) {
            $this->nomeProduto = $nomeProduto;
            $this->valorProduto = $valorProduto;
            $this->qtdProduto = $qtdProduto;
        }

        public function reduzirEstoque($quantidadeComprada) {
            if ($this->qtdProduto >= $quantidadeComprada) {
                $this->qtdProduto -= $quantidadeComprada;  // Subtrai corretamente o estoque
            } else {
                echo "Estoque insuficiente do produto: {$this->nomeProduto}";
            }
        }
        
    }