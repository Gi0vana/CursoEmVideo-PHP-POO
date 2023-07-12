<?php
    class Banco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        
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
            }elseif ($this->getSaldo()<0){
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
            if ($this->getStatus){
                if ($this->getSaldo()>$v){
                    $this->setSaldo = $this->getSaldo()-$v;

                    } else {
                    echo ("<p>Saldo insufuciente!</p>");
                    }
            } else {
                echo ("<p>Impossível sacar!A conta está fechada</p>");
            }
        }

       function __construct(){
        $this->$setSaldo(0);
        $this->setStatus(false);

       }

        public function pagarMensal($v){
            if($this->getTipo() == "CC" ){
              echo "VC PAROU DE EDITAR AQUI... CONTINUE ARRUMANDO O PAGAR MENSAL, 15:35 (AULA HORÁRIO)";
            }else{
                echo "TERMINA DE EDITAR";
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