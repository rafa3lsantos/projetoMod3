<?php

    class Venda {
        protected $humano;
        public $produtosVendidos = [];

        public function __construct(Humano $humano) {
            $this->humano = $humano;
        }

        public function adicionarProduto(Produto $produto, $qtdProduto) {
            $produto->reduzirEstoque($qtdProduto);
            $this->produtosVendidos[] = [
                "produto" => $produto,
                "quantidade" => $qtdProduto
            ];
        }

        public function apresentarVenda() {
            $detalhes = "{$this->humano->getNome()} comprou: \n";  // Correção no nome do humano
            foreach ($this->produtosVendidos as $item) {  // Correção na variável de loop
                // $detalhes .= "- " . $item['produto']->nomeProduto . " x" . $item['quantidade'] . "\n";
                $detalhes .= $item['quantidade'] . "x " . $item['produto']->nomeProduto . "\n";
            }
            return $detalhes;  // Retorna o resultado
        }        
    }