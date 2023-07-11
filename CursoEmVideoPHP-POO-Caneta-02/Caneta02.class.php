
<?php
    Class Caneta02 {
      
        public $modelo;

        private $ponta;
        private $tampada;
        private $cor;
        

        public function __construct($c, $m, $p){
            $this->cor = $c;
            $this->modelo = $m;
            $this->ponta = $p;
            $this->tampar();
        }
        public function getPonta() {
            return $this->ponta;
        }
        public function setPonta($p) {
            $this->ponta = $p;
            return $this;
        }    
	    public function getModelo() {
		    return $this->modelo;
	    }	
	    public function setModelo($m) {
		    $this->modelo = $m;
		    return $this;
	    }

	    public function getTamapda() {
	    	return $this->tampada;
	    }

	    public function setTamapda($t) {
		    $this->tampada = $t;
		    return $this;
    	}

	    public function getCor() {
		    return $this->cor;
	    }

	    public function setCor($c) {
		    $this->cor = $c;
		    return $this;
	    }

        public function destampar(){
            $this->tampada = true;
        }

        public function tampar(){
            $this->tampada = false;
        }
}
?>