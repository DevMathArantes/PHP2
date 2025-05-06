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

    cumprimentar();
    echo "Sua soma é: " . somar(10, 10);