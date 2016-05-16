<?php
	include_once 'includes/json_include.php';
	include_once INCLUDE_ROOT.'/controllers/FiscalizeController.class.php';

	if(isset($_GET["notaFiscalId"])) {
		$notaFiscalId = $_GET["notaFiscalId"];

		$fiscalizeController = new FiscalizeController();
		
		$json = $fiscalizeController->consultarNotaFiscalJson($notaFiscalId);
		echo "$json";
	} else {
		echo "{\"erro\": \"Erro! Passe notaFiscalId como parâmetro!\"}";
	}
		
?>