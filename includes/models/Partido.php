<?php
class Partido {
	
	public $partidoId;
	public $sigla;
	public $nome;
	
	public function popular($partidoId, $sigla, $nome) {
		$this->partidoId = $partidoId;
		$this->sigla = $sigla;
		$this->nome = $nome;
	}
	
}
?>