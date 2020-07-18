<?php

    require 'classes/BancoDados.php';

    $bancoDados = new BancoDados();
    $conexao = $bancoDados->getConexao();

    require 'leiaute/form.php';

?>