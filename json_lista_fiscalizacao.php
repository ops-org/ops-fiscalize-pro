<?php
	include_once 'includes/json_include.php';
	include_once INCLUDE_ROOT.'/controllers/FiscalizeController.class.php';

	$fiscalizeController = new FiscalizeController();
	
	$json = $fiscalizeController->consultarFiscalizacoesJson();
	echo "$json";
	
?>