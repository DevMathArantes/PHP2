<?php

    /*
        function X(W1 Y1,W2 Y2...Wn Yn) : W{
            ...
            return N;
        }
        X(Z);

        Ao criar uma função X com parâmetros Y (não obrigatório) de tipos W, você pode chama-la para ser executada com
        um parâmetro Z e ela pode (ou não) retornar um valor N de tipo W 
        
        Observação: os parâmetros e retornos não precisam obrigatóriamente ter um tipo, é recomendado para previnir erros
        mas não obrigatório (para funções que não possuem retorno, usa-se void como tipo para o retorno)
    */
    function somar(int $a,float  $b) : float{
        return $a + $b;
    }

    function cumprimentar() : void{
        echo "\n----------\nOlá\n----------\n";
    }

    //A função sort($X); serve para ordenar de forma crescente o array X
    $decimais = [9, 1, 2, 3, 4, 5, 6, 7, 8, 0];
    sort($decimais);
    var_dump($decimais);

    //A função min($X) e max($X) servem para retornar o menor e o maior valor do array X respectivamente
    $menorDecimal = min($decimais);
    $maiorDecimal = max($decimais);
    echo "\nO menor decimal é $menorDecimal e o maior é $maiorDecimal\n";

    //Utilizar &$X torna o parâmetro X obrigatório de referência (por exemplo $dois em vez de 2)
    function dobrarValor(int &$numero) : int{
        return $numero * 2;
    }
    $dois = 2;
    echo "\n----------------------\n" . dobrarValor($dois) . "\n----------------------\n";

    cumprimentar();
    echo "Sua soma é: " . somar(10, 10);