<?php
class Parlamentar {
	
	public $parlamentarId;
	public $partidoId;
	public $nome;
	public $nomeCivil;
	public $email;
	public $profissao;
	public $ideCadastro;

	public function popular($parlamentarId, $partidoId, $nome, $nomeCivil, $email, $profissao, $ideCadastro) {
		$this->$parlamentarId = $parlamentarId;
		$this->$partidoId = $partidoId;
		$this->$nome = $nome;
		$this->$nomeCivil = $nomeCivil;
		$this->$email = $email;
		$this->$profissao = $profissao;
		$this->$ideCadastro = $ideCadastro;
	}
	
}
?>