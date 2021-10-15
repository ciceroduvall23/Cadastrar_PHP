<?php 

if (isset($_POST['create'])) {
	include "../db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
  /* vamos fazer as validadações e conectart com os campos do banco */
	$endereco = validate($_POST['endereco']);
	$email = validate($_POST['email']);
    $cnpj = validate($_POST['cnpj']);
	$telefone = validate($_POST['telefone']);
    $razaosocial = validate($_POST['razaosocial']);
	$nascimento = validate($_POST['nascimento']);



	$user_data = 'endereco='.$endereco. '&email='.$email. '&email='.$email. '&cnpj='.$cnpj. '&razaosocial='.$razaosocial. '&nascimento='.$nascimento ;

	if (empty($endereco)) {
		header("Location: ../index.php?$user_data");
	}else if (empty($email)) {
		header("Location: ../index.php?$user_data");
	}else if (empty($cnpj)) {
		header("Location: ../index.php?error=CNPJ é obrigatório&$user_data");
	}else if (empty($telefone)) {
		header("Location: ../index.php?error=Telefone é obrigatório&$user_data");
	}else if (empty($razaosocial)) {
		header("Location: ../index.php?error=Razão Social é obrigatório&$user_data");
	
	}else {
	
       $sql = "INSERT INTO users(endereco, email,cnpj,telefone,razaosocial,nascimento) 
               VALUES('$endereco', '$email', '$cnpj', '$telefone', '$razaosocial', 'nascimento')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=criado com sucesso");
       }else {
          header("Location: ../index.php?error=Ocorreu um erro desconhecido&$user_data");
       }
	}

}
