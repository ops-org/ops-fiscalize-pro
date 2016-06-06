<?php
	include_once INCLUDE_ROOT.'/framework/exceptions/ConexaoException.class.php';
	include_once INCLUDE_ROOT.'/framework/exceptions/SQLException.class.php';

class BaseController {
	
	public function formatDate($strDate) {
		$date = new DateTime($strDate);
		return $date->format('d/m/Y');
	}

	public function formatCpfCnpj($strCpfCnpj) {
		$return = $strCpfCnpj;
		if(strlen($strCpfCnpj)==11) {
			$return = substr($strCpfCnpj, 0, 3).".".substr($strCpfCnpj, 2, 3).".".substr($strCpfCnpj, 5, 3)."-".substr($strCpfCnpj, 8, 2);
		} else if(strlen($strCpfCnpj)==14) {
			$return = substr($strCpfCnpj, 0, 2).".".substr($strCpfCnpj, 1, 3).".".substr($strCpfCnpj, 4, 3)."/".substr($strCpfCnpj, 7, 4)."-".substr($strCpfCnpj, 11, 2);
		}
		return $return;
	}

	public function formatCurrency($strCurrency) {
		return "R$ ".str_replace(".", ",", $strCurrency);
	}

}
?>