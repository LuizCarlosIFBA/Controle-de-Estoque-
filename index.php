<html>
<head>
<html>
<head>
<title>CONTROLE DE ESTOQUE </title>
<?php header("Content-type: text/html; charset=utf-8"); ?>
<style type="text/css">
@import url("styles/index.css");
@import url("styles/menu.css");
</style>
<script type="text/javascript" src="application/js/jquery.min.js"></script>
<script type="text/javascript" src="application/js/menu.js"></script>
<script type="text/javascript" src="application/js/functions.js"></script>
<script type="text/javascript" src="application/js/validation.js">

</script>

</head>
<body>
<!-- Foi adicionada o accept-charset="utf-8"-->
<form name="form" accept-charset="utf-8" action="login.php" method="post" onSubmit="return validacao();">
<div id="Full">
<div id="Logo"><b>CONTROLE DE ESTOQUE</b></div>
	<div id="Menu">
	</div>
	<ul id="jsddm">
	<br>
	<center>
	<br>
	<br>
	<br>
	<img style="width:180; height:100px" src ="/estoque/img/acesso.jpg">
	<br>Usuário: <br>
	<input type="text" name="user"> <br> <br>
	Senha: <br>
	<input type="password" name="pass"> <br> <br>
	<input type="submit" value="Entrar">
	</center>
</ul>
</body>
</html>



