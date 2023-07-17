<?php
class Lutador{

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates; 
    
    public function __construct($nome, $nacionalidade, $altura, $idade, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
	public function apresentar(){
		echo ("<p>-----------------------------</p>");
		echo ("<p>CHEGOU A HORA! O LUTADOR: </p>". $this->getNome());
		echo ("<p>Veio diretamente de ". $this->getNacionalidade()."</p>");
		echo ("tem ". $this->getIdade()." anos,". $this->getAltura()."de altura e pesa ".$this->getPeso());
		echo ("<br>Ele tem ".$this->getVitorias()." vitórias, ".$this->getDerrotas()." derrotas e ".$this->getEmpates()." empates!</p>");
	}
	

	public function Status(){
		echo ("<p>-----------------------------</p>");
		echo ("<p>".$this->getNome()." é um peso ".$this->getCategoria()."</p>");
		echo ("<p>Já ganhou ".$this->getVitorias()." lutas!</p>");
		echo ("<p>Perdeu ".$this->getDerrotas()." lutas!</p>");
		echo ("<p>E empatou ".$this->getEmpates()." lutas!</p>");
	}
	

	public function ganharLuta(){
		$this->setVitorias($this->getVitorias()+1);
	}
	public function perderLuta(){
		$this->setDerrotas($this->getDerrotas()+1);
	}

	public function empatarLuta(){
		$this->setEmpates($this->getEmpates()+1);
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	public function getNacionalidade() {
		return $this->nacionalidade;
	}
	
	public function setNacionalidade($nacionalidade): self {
		$this->nacionalidade = $nacionalidade;
		return $this;
	}

	public function getIdade() {
		return $this->idade;
	}
	

	public function setIdade($idade): self {
		$this->idade = $idade;
		return $this;
	}

	
	public function getAltura() {
		return $this->altura;
	}

	public function setAltura($altura): self {
		$this->altura = $altura;
		return $this;
	}


	public function getPeso() {
		return $this->peso;
	}
	
	public function setPeso($peso) {
		$this->peso = $peso;
        $this->setCategoria();
	}

	public function getCategoria() {
		return $this->categoria;
	}

	private function setCategoria() {
        if($this->getPeso()<52.5){
            $this->categoria="Inválido";
        }else if($this->getPeso()<=70.3){
            $this->categoria="Leve";
        }else if($this->getPeso()<=83.9){
            $this->categoria="Médio";
        }else if($this->getPeso()<=120.2){
            $this->categoria="Pesado";
        } else{
            $this->categoria="Inválido.Muito gordo!";
        }
		return $this;
	}

	
	public function getVitorias() {
		return $this->vitorias;
	}
	

	public function setVitorias($vitorias) {
		$this->vitorias = $vitorias;
		return $this;
	}

	public function getDerrotas() {
		return $this->derrotas;
	}
	
	public function setDerrotas($derrotas): self {
		$this->derrotas = $derrotas;
		return $this;
	}

	public function getEmpates() {
		return $this->empates;
	}
	
	public function setEmpates($empates): self {
		$this->empates = $empates;
		return $this;
	}
}

?>