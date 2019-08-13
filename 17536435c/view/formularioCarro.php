<form action ="../controller/controllerCarro.php" method="post">
    <div class="dirl">

<?php
    include("FormularioVeiculo.php");
?>
    </div>
    <div class="dirl">
    <h2>Formulario Carro</h2>
    <label>Qtd de Passageiros: </label><input type="number" name="qtdPassageiros" class="placa" style = "width: 200px;"></br>
    <label>Número de Portas: </label><input type="number" name="numPortas" style = "width: 200px;">
    </div>

    <div class="botao"><input type="submit" value="Enviar Cadastro"></div>
</form>
