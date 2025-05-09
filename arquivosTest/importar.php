<?php 

    $caminho = __DIR__ . "/devObj.json";

    $conteudo = file_get_contents($caminho);
    $dev = json_decode($conteudo, true);
    var_dump($dev);