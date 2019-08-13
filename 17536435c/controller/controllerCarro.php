<?php
include ("../model/Carro.php");

    $qtdPassageiros = filter_input(INPUT_POST, "qtdPassageiros");
    $numPortas = filter_input(INPUT_POST, "numPortas");

    $dadosCarro = array($qtdPassageiros, $numPortas);

    include("controllerVeiculo.php");

    $carro1 = array();
    $carro = new Carro($dadosCarro, $dadosVeiculo);
?>
<?php	
    $carro->inserir();
    $retorno = $carro->listarTodos();
?><br>

<table border="1">
    <th>ID</th>
    <th>Placa</th>
    <th>NumChassi</th>
    <th>Cor</th>
    <th>Ano</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>PesoMaximo</th>
    <th>Preco</th>
    <th>NumRodas</th>
    <th>IDCarro</th>
    <th>IDVeiculo</th>
    <th>qtdPassageiros</th>
    <th>NumPortas</th>
<?php
foreach ($retorno as $key => $value){
        echo "<tr><td>" . $value["idVeiculo"] . "</td>";
        echo "<td>" . $value["placa"] . "</td>";
        echo "<td>" . $value["numChassi"] . "</td>";
        echo "<td>" . $value["cor"] . "</td>";
        echo "<td>" . $value["ano"] . "</td>";
        echo "<td>" . $value["marca"] . "</td>";
        echo "<td>" . $value["modelo"] . "</td>";
        echo "<td>" . $value["pesoMaximo"] . "</td>";
        echo "<td>" . $value["preco"] . "</td>";
        echo "<td>" . $value["numRodas"] . "</td>";
        echo "<td>" . $value["idCarro"] . "</td>";
        echo "<td>" . $value["idVeiculo"] . "</td>";
        echo "<td>" . $value["qtdPassageiros"] . "</td>";
        echo "<td>" . $value["numPortas"] . "</td></tr>";
    }
?>
</table>