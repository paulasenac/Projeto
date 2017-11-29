<html>
	<head>
		<meta charset="UTF-8">
		<title>Resultado</title>
		<style>
			fieldset{margin: 100px 250px 250px 300px; width:350px;}
			.caixa{border:none; background:transparent;}
		</style>
	</head>
	<body>
		<?php
			$nome = $_POST["nome"];
			$email = $_POST["email"];
			$tipo = $_POST["tipo"];
			$dias = $_POST["dias"];
			$total = 0;
			
			if($tipo == "Suite Luxo")
			{
				$total = $dias*(20*24);
			}
			else if($tipo == "Suite Simples")
			{
				$total = $dias*(15*24);
			}
			else if($tipo == "Apartamento")
			{
				$total = $dias*(5*24);
			}
		?>
		<fieldset>
			<legend>Reserva Finalizada</legend>
			<form>
				<table>
				<tr>
					<td>Nome do Hóspede:</td>
					<td><input type="text" class="caixa" size="20" value="<?php print $nome;?>" readonly></td>
				</tr>
				<tr>
					<td>Email para contato:</td>
					<td><input type="text" class="caixa" size="20" value="<?php print $email;?>" readonly></td>
				</tr>
				<tr>
					<td>Tipo de Acomodação:</td>
					<td>
						<input type="text" class="caixa" size="20" value="<?php print $tipo;?>" readonly>
					</td>
				<tr>	
					<td>Período(dias):</td>
					<td><input type="text" class="caixa" size="20" value="<?php print $dias;?>" readonly></td>
				</tr>
				<tr>	
					<td>Valor da Reserva:</td>
					<td><input type="text" class="caixa" size="20" value="<?php print $total;?>" readonly></td>
				</tr>
				<tr><td colspan="2" align="center">
					<input type="button" value="Finalizar" onClick="javascript:location.href='index.php'">
				</td></tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>