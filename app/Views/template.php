<html>
<head>
<meta charset="utf-8">
<title>sistema de biblioteca</title>
<link href="<?php echo base_url("assets/css/reset.css")?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url("assets/css/estilo.css")?>" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/js.js"></script>

</head>

<body>
	<?php include"cabecalho.php";?>

<div class="base-meio">	
	<?php
            
            echo view($nome_view);
	?>
	</div>
	
</body>
</html>
