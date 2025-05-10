<?php

    require __DIR__ . "/src/functions.php";

    /*
        Uma função pode ser chamada com parâmetros fora de ordem da seguinte forma:
            X(Y: Z1, N: Z2);
            A função X foi chamada com O parâmetro Y recebendo Z1 e o parâmetro N recebendo Z2 independente da ordem
    */
    $filme1 = novoFilme(ano: 1999, nome: "Star Wars: Ameaça fantasma", nota: 6.5, genero: "Ficção");
    $filme2 = novoFilme(nota: 6.6, nome: "Star Wars: Ataque dos clones", ano: 2002, genero: "Ficção");
    $filme3 = novoFilme(nome: "Star Wars: Ameaça fantasma", nota: 7.6, ano: 2005, genero:"Ficção");

    var_dump($filme3);