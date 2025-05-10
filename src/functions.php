<?php

    //Função para criar um novo filme
    function novoFilme(string $nome, int $ano, float $nota, string $genero) : array{
        return [
            'Nome:' => $nome,
            'Ano:' => $ano,
            'Nota:' => $nota,
            'Gênero:' => $genero
        ];
    }