<?php
abstract class Veiculo {
    protected $placa;
    protected $numChassi;
    protected $cor;
    protected $ano;
    protected $marca;
    protected $modelo;
    protected $pesoMaximo;
    protected $preco;
    protected $numRodas;

    public function __construct($dadosVeiculo){
        list($placa, $numChassi, $cor, $ano, $marca, $modelo, $pesoMaximo, $preco, $numRodas) = $dadosVeiculo;
        $this->setPlaca($placa);
        $this->setNumChassi($numChassi);
        $this->setCor($cor);
        $this->setAno($ano);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setPesoMaximo($pesoMaximo);
        $this->setPreco($preco);
        $this->setNumRodas($numRodas);
    }
    public function setPlaca($placa){ 
        $this->placa = $placa;
    }
    public function setNumChassi($numChassi){ 
        $this->numChassi = $numChassi;
    }
    public function setCor($cor){ 
        $this->cor = $cor;
    }
    public function setAno($ano){ 
        $this->ano = $ano;
    }
    public function setMarca($marca){ 
        $this->marca = $marca;
    }
    public function setModelo($modelo){ 
        $this->modelo = $modelo;
    }
    public function setPesoMaximo($pesoMaximo){ 
        $this->pesoMaximo = $pesoMaximo;
    }
    public function setPreco($preco){ 
        $this->preco = $preco;
    }
    public function setNumRodas($numRodas){ 
        $this->numRodas = $numRodas;
    }

    public function getPlaca(){ 
        return $this->placa;
    }
    public function getNumChassi(){ 
        return $this->numChassi;
    }
    public function getCor(){ 
        return $this->cor;
    }
    public function getAno(){ 
        return $this->ano;
    }
    public function getMarca(){ 
        return $this->marca;
    }
    public function getModelo(){ 
        return $this->modelo;
    }
    public function getPesoMaximo(){ 
        return $this->pesoMaximo;
    }
    public function getPreco(){ 
        return $this->preco;
    }
    public function getNumRodas(){ 
        return $this->numRodas;
    }
}
