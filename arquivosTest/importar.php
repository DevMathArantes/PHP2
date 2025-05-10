<?php 

    $caminho = __DIR__ . "/devObj.json";

    /*
        O comando $X = fopen(Y, 'Z'); serve para abrir um arquivo Y, Z representa o modo que o arquivo deve ser aberto e 
        a variável X recebe o arquivo aberto

        O modo de abertura 'r' serve para abrir o arquivo apenas para leitura

        A função fgets($X) serve para ler apenas a primeira linha de um arquivo aberto X

        A função fclose($X) serve para fechar um arquivo aberto X
    */
    $arquivo = fopen(__DIR__ . "/testes.txt", 'r');
    $primeiraLinha = fgets($arquivo);
    fclose($arquivo);
    echo "\n\nPrimeira linha: \n" . $primeiraLinha . "\n";

    //O modo de abertura 'a' serve para abrir o arquivo apenas para escrita
    $arquivo = fopen(__DIR__ . "/testes.txt", 'a');

    //A função fwrite($X, Y); injeta o conteúdo Y no arquivo aberto X
    fwrite($arquivo, "\n\n...Frase injetada via php...\n\n");
    fclose($arquivo);

    //O comando file_get_contents($X); retorna o conteúdo do arquivo X
    $conteudo = file_get_contents($caminho);
    $dev = json_decode($conteudo, true);
    var_dump($dev);
