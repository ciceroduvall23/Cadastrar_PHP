
 <?php
	session_start();
	include_once('../../db_conn.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Dados Colaborador</title>
	<head>
	<body>
		<?php
		/* o nome do arquivo que vai ser gerado*/
		$arquivo = 'dadosColaborador.xls';

			// Criei uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5">Planilha informações do colaborador</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Nome Completo</b></td>';
		$html .= '<td><b>Telefone</b></td>';
		$html .= '<td><b>E-mail</b></td>';
		$html .= '<td><b>Data de Nascimento</b></td>';
		$html .= '</tr>';
		
		//Vai selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM users";
		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["name"].'</td>';
			$html .= '<td>'.$row_msg_contatos["telefone"].'</td>';
			$html .= '<td>'.$row_msg_contatos["email"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nascimento"].'</td>';
			$data = date('d/m/Y H:i:s',strtotime($row_msg_contatos["created"]));
			$html .= '<td>'.$data.'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>