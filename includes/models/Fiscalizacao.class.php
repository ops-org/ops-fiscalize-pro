<?php
class Fiscalizacao {
	
	public $notaFiscalId; 
	public $somaSuspeitas; 
	public $somaConfiaveis; 
	public $somaFiscalizacoes; 
	public $razaoConfiaveis;
	public $parlamentar;
	public $valor;
	
	public function popular($notaFiscalId, $somaSuspeitas, $somaConfiaveis, $somaFiscalizacoes, $razaoConfiaveis, $parlamentar, $valor) {
		$this->notaFiscalId = $notaFiscalId;
		$this->somaSuspeitas = $somaSuspeitas;
		$this->somaConfiaveis = $somaConfiaveis;
		$this->somaFiscalizacoes = $somaFiscalizacoes;
		$this->razaoConfiaveis = $razaoConfiaveis;
		$this->parlamentar = $parlamentar;
		$this->valor = $valor;
	}
	
}
?>