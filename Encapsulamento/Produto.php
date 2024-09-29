<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPreco($preco) {
        if ($preco < 0) {
            echo"O preço deve ser um valor positivo.";
        }else{
          $this->preco = $preco;  
        }
        
    }
    public function getPreco() {
        return $this->preco;
    }

    public function setQuantidade($quantidade) {
        if ($quantidade < 0) {
            echo"A quantidade não pode ser negativa.";
        }else{
          $this->quantidade = $quantidade;  
        }
        
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function adicionarEstoque($quantidade) {
        if ($quantidade <= 0) {
            echo"A quantidade a ser adicionada deve ser positiva.";
        }else{
          $this->quantidade += $quantidade;  
        }
        
    }

    public function removerEstoque($quantidade) {
        if ($quantidade <= 0) {
           echo"A quantidade a ser removida deve ser positiva.";
        }
        if ($this->quantidade < $quantidade) {
        echo"Estoque insuficiente para remoção.";
        }else{
           $this->quantidade -= $quantidade; 
        }
        
    }
}

?>
