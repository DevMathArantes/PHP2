<?php

    $strings = ["Olá, Matheus", "Seja bem-vindo", "Bom dia", "dfsd, casfaa, basfw, aafwef"];

    //Retorna a string e seu tamanho (assentos contam no tamanho)
    var_dump($strings[1]);

    //A função strpos($X, Y) serve para encontrar Y dentro de uma string X e revelar sua posição
    var_dump(strpos($strings[1], "a"));

    //A função substr($X, Y, Z) serve para retornar da string X, elementos de Y a Z (Z é opcional)
    $letraA = strpos($strings[1], "a");
    var_dump(substr($strings[1], 0, $letraA));

    //A função explode('X', $Y); separa uma string Y a cada elemento X encontrando (montando um array)
    $letras = explode(', ', $strings[3]);
    
    //Observação: sort($X) também serve para colocar elementos em ordem alfabética
    sort($letras);
    var_dump($letras);

