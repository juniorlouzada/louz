<?php
    $placa = filter_input(INPUT_POST, "placa");
    $numChassi = filter_input(INPUT_POST, "numChassi");
    $cor = filter_input(INPUT_POST, "cor");
    $ano = filter_input(INPUT_POST, "ano");
    $marca = filter_input(INPUT_POST, "marca");
    $modelo = filter_input(INPUT_POST, "modelo");
    $pesoMaximo = filter_input(INPUT_POST, "pesoMaximo");
    $preco = filter_input(INPUT_POST, "preco");
    $numRodas = filter_input(INPUT_POST, "numRodas");
    
    $dadosVeiculo = array($placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas);
?>
