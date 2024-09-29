<?php

require_once 'Produto.php';


    $produto = new Produto();
    
    $produto->setNome('Camiseta');
    $produto->setPreco(29.99);
    $produto->setQuantidade(100);



    echo"SITUAÇÂO ATUAL:";
    echo"<br><br>";
    echo "Produto: " . $produto->getNome();
    echo"<br>";
    echo "Preço: " . $produto->getPreco();
    echo"<br>";
    echo "Quantidade em estoque: " . $produto->getQuantidade() ;


    echo"<br><br>";
    echo"ATUALIZANDO ESTOQUE:<br>";
    $produto->adicionarEstoque(50);
    echo "<br>Valor acrescentado: 50 <br> ";
    echo "Quantidade em estoque: " . $produto->getQuantidade() ;
  
    $produto->removerEstoque(30);
    echo "<br><br>Valor removido: 30 <br> ";
    echo "Quantidade em estoque: " . $produto->getQuantidade() ;
    echo"<br>";
    echo "<br>Valor a ser adicionado no preço: 30.45 <br> ";
    $produto->setPreco(30.45);
    echo "Novo preço : " . $produto->getPreco();



    echo"<br><br>TESTANDO VALORES INVÁLIDOS:<br><br>";

    echo"PREÇO:<br><br>";
    echo "Valor a ser adicionado no preço: -30 <br> ";
    $produto->setPreco(-30);
   
    
    echo"<br><br>ESTOQUE:<br><br>";
    echo "Valor atual do estoque: " . $produto->getQuantidade();
    echo "<br>Valor a ser removido do estoque: 200 <br> ";
    echo "Resultado: ";
    $produto->removerEstoque(200);


    echo"<br><br>QUANTIDADE:<br><br>";
    echo "Valor atual do estoque: " . $produto->getQuantidade();
    echo "<br>Valor a ser adicionado no estoque: -200 ";
    echo "<br>Resultado: ";
    $produto->setQuantidade(-200);
    
    
    
    


?>
