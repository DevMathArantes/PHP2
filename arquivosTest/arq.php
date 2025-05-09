<?php 

    /*
        O comando require "X.php"; serve para acessar todas as funções de um arquivo X
        Obs: __DIR__ = caminho absoluto do diretório onde o arquivo atual está localizado.
    */
    require __DIR__ . "/functions.php";

    /*
        A função do include é a mesma do require, porém enquanto o require apresentará um erro caso não encontre o 
        arquivo, o include dará apenas umm aviso.
    */ 
    include __DIR__ . "/functionsNull.php";

    functionExport();

    $desenvolvedor = [
        'Nome' => 'Matheus',
        'Sobrenome' => 'Arantes',
        'Nascimento' => '14/11/2003',
        'Gênero' => 'Masculino',
        'Habilitação' => 'A & B'
    ];

    //O comando json_encode($X); transforma o array X em um objeto json
    $desenvolvedorObj = json_encode($desenvolvedor);
    var_dump($desenvolvedorObj);

    /*
        O comando json_decode('X', Y); recebe o objeto json X e transforma de volta, Y não é obrigatório mas refere-se 
        a transformar o objeto em um array associativo
    */
    var_dump(json_decode($desenvolvedorObj, true));

    /*
        O comando file_put_contents( X, Y); cria um aqruivo X com conteúdo Y
    */
    file_put_contents(__DIR__ . "/devObj.json", $desenvolvedorObj);
