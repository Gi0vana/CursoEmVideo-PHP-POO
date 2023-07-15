

<?php
    class Banco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

         /**
         * Summary of Banco
         * @return void
         */
        function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);
            echo "<p> Conta criada com sucesso!</p>";
           }

        public function abrirConta($t){
           $this->setTipo($t);
           $this-> setStatus(true);
           if ($t == "CC"){
                $this->setSaldo(50);
           }elseif ($t == "CP"){
                $this->setSaldo(150);
           }
        }

        public function fecharConta(){
            if ($this->getSaldo() > 0){
                echo ("<p> Conta com dinheiro, não posso fecha-la!</p>");
            }elseif ($this->getSaldo()< 0){
                echo ("<p> Conta em débito. Impossível encerrar! </p>");
            } else{
                $this->setStatus(false);

            }
        }

        public function depositar($valor){
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo()+$valor);

            } else{
                echo ("<p> Conta fechada.Impossível depositar! </p>");

            }
        }
        public function sacar($v){
            if ($this->getStatus()){
                if ($this->getSaldo() >= $v){
                    $this ->setSaldo( $this->getSaldo()-$v);
                    } else {
                    echo ("<p>Saldo insufuciente para saque! POBRE!</p>");
                    }
            } else {
                echo ("<p>Impossível sacar!A conta está fechada</p>");
            }
        }


        public function pagarMensal(){
            if($this->getTipo() == "CC" ){
                $v = 12;
            }else if ($this->getTipo() == "CP"){
                $v = 20;
            }
            if ($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
            }else{
                echo "<p>Problemas com a conta.Não posso cobrar!</p>";
            }
        }

       
	public function getSaldo() {
		return $this->saldo;
	}

	public function setSaldo($saldo): self {
		$this->saldo = $saldo;
		return $this;
	}
	public function getDono() {
		return $this->dono;
	}
	
	public function setDono($dono): self {
		$this->dono = $dono;
		return $this;
	}

	public function setStatus($status): self {
		$this->status = $status;
		return $this;
	}

    public function getStatus() {
	return $this->status;
	}

	public function getTipo() {
		return $this->tipo;
	}
	
	public function setTipo($tipo): self {
		$this->tipo = $tipo;
		return $this;
	}
}

    ?>