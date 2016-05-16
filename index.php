<?php
	include_once 'includes/web_include.php';
	include_once INCLUDE_ROOT.'/controllers/FiscalizeController.class.php';
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <title>OPS Fiscalize PRO</title>
	
	    <!-- Bootstrap -->
	    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/fiscalize.css" rel="stylesheet">
	
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>

	<div class="container">
		<h1>Notas Fiscais Mais Suspeitas</h1><br/>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="bootstrap/js/bootstrap.min.js"></script>
	    
		<?php
		
			$fiscalizeController = new FiscalizeController();
	
			$date = new DateTime();
			$data = $date->format('d/m/Y H:i:s');
	
			$html = "<h2>Atualizado em: $data</h2><br/>";
			
			$html .= $fiscalizeController->consultarFiscalizacoes();
			echo "<p>$html</p>";
			
			//$html = $fiscalizeController->consultarNotaFiscal(1);
			//echo "<p>Nota Fiscal 1 é: $html</p>";
		?>
	</div>
	
</body>
</html>