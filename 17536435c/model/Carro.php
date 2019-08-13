<?php
include ("Veiculo.php");
class Carro extends Veiculo
{
    private $qtdPassageiros;
    private $numPortas;
    public $conexao;
    private $idVeiculo;

	public function __construct($dadosCarro, $dadosVeiculo){
            list($qtdPassageiros, $numPortas) = $dadosCarro;
            $this->setQtdPassageiros($qtdPassageiros);
            $this->setNumPortas($numPortas);
            parent::__construct($dadosVeiculo);
            $this->conexao = include("Conectionbd.php");
	}

	public function setIdVeiculo($idVeiculo){ 
            $this->idVeiculo = $idVeiculo;
        }
	public function setQtdPassageiros($qtdPassageiros){ 
            $this->qtdPassageiros = $qtdPassageiros;
        }
	public function setNumPortas($numPortas){ 
            $this->numPortas = $numPortas;
        }
	public function setConexao($conexao){ 
            $this->conexao = $conexao;
        }
	public function getIdVeiculo(){ 
            return $this->idVeiculo;
        }
	public function getQtdPassageiros(){ 
            return $this->qtdPassageiros;
        }
	public function getNumPortas(){ 
            return $this->numPortas;
        }
	public function getConexao(){ 
            return $this->conexao;
        }
	public function inserir(){
            $sqlCarro = "insert into veiculo (placa, numChassi, cor, ano, marca, modelo, pesoMaximo, preco, numRodas) values ('{$this->getPlaca()}','{$this->getNumChassi()}','{$this->getCor()}','{$this->getAno()}','{$this->getMarca()}','{$this->getModelo()}','{$this->getPesoMaximo()}','{$this->getPreco()}','{$this->getNumRodas()}')";

            $conectar = $this->getConexao()->query($sqlCarro);

            $this->setIdVeiculo($this->getConexao()->insert_id);

            $num_registro = $this->getConexao()->affected_rows;
            if ($num_registro == 1){
                $sql = "insert into carro (idVeiculo, qtdPassageiros, numPortas) values ('{$this->getIdVeiculo()}','{$this->getQtdPassageiros()}','{$this->getNumPortas()}')";

                $conectar = $this->getConexao()->query($sql);

                $num_registro = $this->getConexao()->affected_rows;
                    if ($num_registro == 1 ){
                       echo " Cadastrado com sucesso";
                    }else{
                       echo "Erro ao cadastrar ";
                    }
            }
        }
    public function listarTodos(){
        $conectar = new mysqli("localhost", "root", "", "mapaphp");
        $sqlListartudo = "select * from veiculo  JOIN carro  ON veiculo.idVeiculo = carro.idVeiculo";
        $retorno = $conectar->query($sqlListartudo);
        $lista = array();
        while($temp = $retorno->fetch_array()){
           $lista[] = $temp; 
        }
        return $lista;
    }
    
    public function listarUm(){}
}
?>
