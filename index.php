<html>
	<head>
		<meta charset="UTF-8">
		<title>Aula 05 - Ex 01</title>
		<style>
			fieldset{margin: 100px 250px 250px 300px; width:350px;}
		</style>
	</head>
	<body>
		<fieldset>
			<legend>Dados para Reserva</legend>
			<form action="resultado.php" method="post">
				<table>
				<tr>
					<td>Nome do Hóspede:</td>
					<td><input type="text" size="20" name="nome"></td>
				</tr>
				<tr>
					<td>Email para contato:</td>
					<td><input type="text" size="20" name="email"></td>
				</tr>
				<tr>
					<td>Tipo de Acomodação:</td>
					<td>
						<select name="tipo">
							<option>Suite Luxo</option>
							<option>Suite Simples</option>
							<option>Apartamento</option>
						</select>
					</td>
				<tr>	
					<td>Período(dias):</td>
					<td><input type="number" name="dias" min="1" max="30"></td>
				</tr>
				<tr><td colspan="2" align="center">
					<input type="submit" value="Enviar">
				</td></tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>