<html>
<head>
<meta charset="utf-8">
<title>sistema de biblioteca - Carlos Alberto da Silva</title>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
</head>

<body>
<div class="base-login">
	<div class="base-topo-login">
		<div class="conteudo">	
			<a href="" class="logo"><img src="assets/imagens/logo.png" title="logomarca"></a>		
		</div>
	</div>
	
	<div class="conteudo">
		<div class="caixa-login">
			<h1>LOGIN</h1>
			<form action="<?php echo base_url() ?>/aluno/novo" method="POST" name="">
				<span>USUÁRIO</span>
				<input type="text" placeholder="Insira seu login">
				<span>SENHA</span>
				<input type="password" placeholder="Insira sua senha">
				<input type="submit" value="entrar" class="btn">
			</form>
		</div>
	</div>
</div>
</body>
</html>
