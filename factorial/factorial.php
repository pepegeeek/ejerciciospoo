<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Factorial numero</title>
	<br>
	<a href="../index.html">INDEX</a>
	<br>
</head>
<body>
	<section>
		<h1>Calcular Descuento</h1>
		<form name="factor" action="controladorfactorial.php" method="GET" enctype="multipart/form-data">
			<label>Numero a calcular</label>
			<label>Monto</label>
			<input type="text" name="num"  min="1" max="10" required />
			<br/>
			<input type="submit" name="calcular" value="calcular"/>
		</form>
		<?php
		if (isset($_POST['num'])) {
			echo 'Resultado '.$resultado;
		}
	?>

	</section>

	<div align="center"><img src="../img/P.png" style="border-radius: 50px;"></div>
	<p style="text-align: center; font-size: 50px; color: white;">Jose De jesus Rayas Mesillas</p>


</body>
</html>