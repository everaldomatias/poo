<?php

/*
 * Classe Caneta
 */
class Caneta {
	
	// Atributos
	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;
	
	// Métodos
	public function rabiscar() {
		if ( $this->tampada == true ) {
			echo "<p>Erro! Não posso rabiscar</p>";
		} else {
			echo "<p>Estou Rabiscando</p>";
		}
	}

	public function tampar() {
		$this->tampada = true;
	}

	public function destampar() {
		$this->tampada = false;
	}

}