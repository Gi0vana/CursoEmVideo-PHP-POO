<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;

    private $tocando;


    function __construct(){
        $this->volume = 50;
        $this->ligado= false;
        $this->tocando =false;
    }

	/**
	 * @return mixed
	 */
	public function getTocando() {
		return $this->tocando;
	}
	
	/**
	 * @param mixed $tocando 
	 * @return self
	 */
	public function setTocando($tocando): self {
		$this->tocando = $tocando;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getLigado() {
		return $this->ligado;
	}
	
	/**
	 * @param mixed $ligado 
	 * @return self
	 */
	public function setLigado($ligado): self {
		$this->ligado = $ligado;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getVolume() {
		return $this->volume;
	}
	
	/**
	 * @param mixed $volume 
	 * @return self
	 */
	public function setVolume($volume): self {
		$this->volume = $volume;
		return $this;
	}

    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
        echo "<br> Desligando...";
    }
    public function abrirMenu(){
        echo "<br>Está ligado?: " . ($this->getLigado() ? "SIM" : "NÃO") . "<br>";
        echo "<br>Está tocando?: " . ($this->getTocando() ? "SIM" : "NÃO") . "<br>";
        echo "Volume: " . $this->getVolume();
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        }
        echo "<br>";
        
        }

    public function fecharMenu(){
        echo "<br> Fechando o menu...";
    }
    public function maisVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+1);
        }else{
            echo "TV desligada, impossível aumentar o volume!";

        }
    }
    public function menosVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-1);
        }else {
            echo "TV desligada, impossível aumentar o volume!";
        }
    }
    public function ligarMudo(){
        if($this->getLigado()&& $this->getVolume() > 0){
            $this->setVolume(0);
        }else{
            echo "TV desligada ou volume já está no zero!";
        }
    }
    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }else{
            echo "<br> A TV não está no mudo!";
        }
    }
    public function play(){
        if($this->getLigado() && ! ($this->getTocando()) ){
            $this->setTocando(true);
        }
    }
    public function pause(){
        if($this->getLigado() && ($this->getTocando()) ){
            $this->setTocando(false);
        }
    }
    

}


?>