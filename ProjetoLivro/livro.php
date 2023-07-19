<?php

require_once 'pessoa.php';
require_once 'publicacao.php';
class livro implements publicacao {
    private $titulo;
    /**
     * Summary of autor
     * @var 
     */
    private $autor;
    /**
     * Summary of totalPaginas
     * @var 
     */
    private $totalPaginas;
    /**
     * Summary of pagAtual
     * @var 
     */
    private $pagAtual;
    /**
     * Summary of aberto
     * @var 
     */
    private $aberto;
    /**
     * Summary of leitor
     * @var 
     */
    private $leitor;


    /**
     * Summary of __construct
     * @param mixed $titulo
     * @param mixed $autor
     * @param mixed $totalPaginas
     * @param mixed $leitor
     */
    public function __construct($titulo, $autor, $totalPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->leitor = $leitor;

    }
    
    /**
     * Summary of detalhes
     * @return void
     */
    public function detalhes(){

    }


    /**
     * Summary of getTitulo
     * @return mixed
     */
	public function getTitulo() {
		return $this->titulo;
	}

    /**
     * Summary of setTitulo
     * @param mixed $titulo
     * @return livro
     */
	public function setTitulo($titulo): self {
		$this->titulo = $titulo;
		return $this;
	}

    /**
     * Summary of getAutor
     * @return mixed
     */
	public function getAutor() {
		return $this->autor;
	}
	
    /**
     * Summary of setAutor
     * @param mixed $autor
     * @return livro
     */
	public function setAutor($autor): self {
		$this->autor = $autor;
		return $this;
	}


    /**
     * Summary of getTotalPaginas
     * @return mixed
     */
	public function getTotalPaginas() {
		return $this->totalPaginas;
	}
	
	
    /**
     * Summary of setTotalPaginas
     * @param mixed $totalPaginas
     * @return livro
     */
	public function setTotalPaginas($totalPaginas): self {
		$this->totalPaginas = $totalPaginas;
		return $this;
	}


    /**
     * Summary of getPagAtual
     * @return int|mixed
     */
	public function getPagAtual() {
		return $this->pagAtual;
	}
	
    /**
     * Summary of setPagAtual
     * @param mixed $pagAtual
     * @return livro
     */
	public function setPagAtual($pagAtual): self {
		$this->pagAtual = $pagAtual;
		return $this;
	}

    /**
     * Summary of getAberto
     * @return bool|mixed
     */
	public function getAberto() {
		return $this->aberto;
	}

    /**
     * Summary of setAberto
     * @param mixed $aberto
     * @return livro
     */
	public function setAberto($aberto): self {
		$this->aberto = $aberto;
		return $this;
	}

    /**
     * Summary of getLeitor
     * @return mixed
     */
	public function getLeitor() {
		return $this->leitor;
	}
	
    /**
     * Summary of setLeitor
     * @param mixed $leitor
     * @return livro
     */
	public function setLeitor($leitor): self {
		$this->leitor = $leitor;
		return $this;
	}

    /**
     * Summary of abrir
     * @return void
     */
    public function abrir(){
        $this->aberto = true;
    }
    /**
     * Summary of fechar
     * @return void
     */
    public function fechar(){
        $this->aberto = false;
    }
    /**
     * Summary of folhear
     * @param mixed $p
     * @return void
     */
    public function folhear($p){
        if($p>$this->totalPaginas){
            $this->pagAtual = 0;
        }else {
            $this->pagAtual=$p;
        }
    }
    /**
     * Summary of avancarPag
     * @return void
     */
    public function avancarPag(){
        $this->pagAtual ++ ;
    }

    /**
     * Summary of voltarPag
     * @return void
     */
    public function voltarPag(){
        $this->pagAtual -- ;
    }
}


?>